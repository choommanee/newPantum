<?php

namespace Modules\Account\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Modules\Product\Entities\Product;
use Modules\Product\Filters\ProductFilter;
use Modules\Serials\Entities\Serial;
use Modules\Serials\Http\Requests\UpdateSerialsRequest;
use Modules\User\Entities\User;
use Modules\Serials\Mail\sendMailWarranty;


class AccountWarrantyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $my = auth()->user();
       // dd($my);
       // $recentOrders = auth()->user()->recentOrders(5);
        $recentOrders = Serial::where('user_id',$my->id)->get();

        return view('public.account.warranty.index', compact('my', 'recentOrders'));
    }


    public function addwarranty(Product $model, ProductFilter $productFilter)
    {
        $my = auth()->user();
      //  $recentOrders = auth()->user()->recentOrders(5);
        $recentOrders = Serial::where('user_id',$my->id)->get();
        $product_option = $model->getProductOption();

        return view('public.account.warranty.addwarranty', compact('my', 'recentOrders','product_option'));
    }

    public function managewarranty(Serial $model, UpdateSerialsRequest $request){

        $my = auth()->user();
        $serial_no = request()->get('w_serial_no');
      //  $pages = Faq::where('pro_id', $id)->orderBy('id', 'ASC')->paginate(15);
        $pages =  $model->search(request()->get('w_serial_no'))->query()->get()->count();
        //$status =  $model->search(request()->get('w_serial_no'))->query()->first()->is_active;

        if($pages == 0){
           // echo "test";
           // return back()->withErrors(trans('account::messages.profile_updated'));
            return  back()->withErrors(trans('storefront::account.warranty.notfound'));
        }else{
            $pagesq =  $model->search(request()->get('w_serial_no'))->query()->first()->id;
            $Serial =  Serial::find($pagesq);

            if($Serial->cus_use <> '1'){
                return  back()->withErrors(trans('storefront::account.warranty.haveregister'));
            }

            $img_product ='';
            if(request()->hasfile('img_product'))
            {
               // echo storage_path('app/media/warranty');
               // echo "<br/>";

                    $name= date('mdYHis') . uniqid() .request()->file('img_product')->getClientOriginalName();
                    request()->file('img_product')->move(storage_path('app/public/media/warranty'), $name);
                    $img_product = $name;
            }
            //echo $img_product;
           // dd(request());
            //$form= new Form();
            //$form->filename=json_encode($data);
           // request()->get('purchase_date');
            $purchase_date = $this->ConvertDateThaiToDb(request()->get('purchase_date'));
           // die();
            $SerialUpdate = Serial::find($pagesq);

            $SerialUpdate->ResellerName = request()->get('reseller_name');
            $SerialUpdate->ResellerAddress = request()->get('reseller_address');
            $SerialUpdate->ResellerPhone = request()->get('reseller_phone_number');
            $SerialUpdate->PurchaseDate = $purchase_date;
           // $SerialUpdate->datevarunty_start = $purchase_date;
            $SerialUpdate->user_id = $my->id;
            $SerialUpdate->cus_use = 2;
            $SerialUpdate->img_product = $img_product;

            $SerialUpdate->save();

            $user = User::where('id', $my->id)->first();
            $code= $Serial->product->name;


            Mail::to($user)
                ->send(new sendMailWarranty($user,  $code,$serial_no));

            $to_name = 'csinfo';
            $to_email = 'csinfo@pantum.co.th';
            $data = array('user'=>$user, "produc_name" => $code,'serial_no'=>$serial_no);

            Mail::send('emails.send_warranty', $data, function($message) use ($to_name, $to_email) {
                $message->to($to_email, $to_name)
                    ->subject('Customer Send Serial to add warranty');
                $message->from('sakda.choommanee@gmail.com','csinfo');
            });

            return redirect()->route('account.warranty.index');



        }
    }



    public function ConvertDateThaiToDb($date){
        // thai date format mush be dd/mm/yyyy
        $date = trim($date);
        if($date==''){
            return ;
        }

        $pos = strpos($date, "/");
        if($pos !=false){
            list( $dd , $mm,$yy) = explode('/', $date);
            if ($yy > date('Y')) {
                $yy -= 543;
            }
            return "{$yy}-{$mm}-{$dd}";
        }

        list( $yy, $mm,$dd ) = explode('-', $date);
        if ($yy > date('Y')) {
            $yy -= 543;
        }

        return "{$yy}-{$mm}-{$dd}";
    }
}

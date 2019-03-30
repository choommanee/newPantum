<?php

namespace Modules\Account\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Product\Entities\Product;
use Modules\Serials\Entities\Serial;
use Modules\Serials\Http\Requests\UpdateSerialsRequest;


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


    public function addwarranty()
    {
        $my = auth()->user();
      //  $recentOrders = auth()->user()->recentOrders(5);
        $recentOrders = Serial::where('user_id',$my->id)->get();
        $product_option = Product::orderBy('id','ASC')->get();
        return view('public.account.warranty.addwarranty', compact('my', 'recentOrders','product_option'));
    }

    public function managewarranty(Serial $model, UpdateSerialsRequest $request){

        $my = auth()->user();
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

            //var_dump($Serial->is_active);
            if($Serial->is_active=='0'){
                return  back()->withErrors(trans('storefront::account.warranty.haveregister'));
            }
            $SerialUpdate = Serial::find($pagesq);

            $SerialUpdate->ResellerName = request()->get('reseller_name');
            $SerialUpdate->ResellerAddress = request()->get('reseller_address');
            $SerialUpdate->ResellerPhone = request()->get('reseller_phone_number');
            $SerialUpdate->PurchaseDate = request()->get('purchase_date');
            $SerialUpdate->datevarunty_start = request()->get('purchase_date');
            $SerialUpdate->user_id = $my->id;
            $SerialUpdate->cus_use = 2;

            $SerialUpdate->save();

            return redirect()->route('account.warranty.index');
        }
    }
}

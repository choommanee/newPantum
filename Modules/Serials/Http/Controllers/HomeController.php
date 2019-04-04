<?php

namespace Modules\Serials\Http\Controllers;

use Modules\Serials\Entities\Serial;

use Modules\Media\Entities\File;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Product;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Serial $model)
    {
        $pages='';
        $productGroup='';
        $logo = File::findOrNew(setting('storefront_header_logo'))->path;
        //if (request()->has('Search')) {
         if (request()->has('Search') && request()->has('Search')!='') {
             $pages = $model->searchWaranty(request()->get('Search'));
            // $pagesd = Serial::findOrFail($pages[0]->id);
             //dd($pagesd);
             if(!empty($pages[0])){
             if($pages[0]->PurchaseDate!=''){
                 $pages[0]->PurchaseDate =$this->ConvertDateThaiToDb($pages[0]->PurchaseDate);
             }
             //$dataExp = $this->dateExp($pages[0]->datevarunty_start, $pages[0]->varunty_time);
             $pages[0]->dataExp =$dataExp = $this->dateExp($pages[0]->datevarunty_start, $pages[0]->varunty_time);
             if($pages[0]->datevarunty_start!=''){
                 $pages[0]->datevarunty_start =$this->ConvertDateThaiToDb($pages[0]->datevarunty_start);
             }




                $productGroup = Product::findOrFail($pages[0]->pro_id)->get();

            }

             //dd($productGroup);
        }


       // $productGroup = Faq::ProductGroup()->get();
        //dd($productGroup);
        return view('public.warranty.show',compact('pages','productGroup'));
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

        $dds = strpos($dd, " ");
        if($dds !=false) {
            list( $dd,$dd1 ) = explode(' ', $dd);
        }

        return "{$dd}/{$mm}/{$yy}";
    }

    public function dateExp($date1,$varunty_time){

        $dateString =  $date1;
        $t = strtotime($dateString);
        $t2 = strtotime($varunty_time.' years', $t);

        return date("d/m/Y", $t2) . PHP_EOL;

    }

    public function getbycat($id){
        $logo = File::findOrNew(setting('storefront_header_logo'))->path;
        $pages = Serial::where('pro_id', $id)->orderBy('id', 'ASC')->paginate(15);
        $productGroup = Product::orderBy('id', 'ASC')->get();
        // $productGroup = Faq::ProductGroup()->get();
        //dd($productGroup);
        return view('public.faqs.show',compact('pages','logo','productGroup'));
    }
}

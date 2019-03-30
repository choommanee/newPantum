<?php

namespace Modules\Faq\Http\Controllers;

use Modules\Faq\Entities\Faq;

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
    public function index(Faq $model)
    {
        //echo "test";
        //$logo = File::findOrNew(setting('storefront_header_logo'))->path;
        //if (request()->has('Search')) {
            if (request()->has('Search') && request()->has('Search')!='') {
                $pages =  $model->search(request()->get('Search'))
                    ->query()
                    ->paginate(20);
          //  }
        }else{
            $pages = Faq::orderBy('pro_id','ASC','id', 'ASC')->paginate(20);
        }

        $productGroup = Product::orderBy('id', 'ASC')->get();
       // $productGroup = Faq::ProductGroup()->get();
        //dd($productGroup);
        return view('public.faqs.show',compact('pages','logo','productGroup'));
    }

    public function getbycat($id){
        $pages = Faq::where('pro_id', $id)->orderBy('id', 'ASC')->paginate(15);
        $productGroup = Product::orderBy('id', 'ASC')->get();
        // $productGroup = Faq::ProductGroup()->get();
        //dd($productGroup);
        return view('public.faqs.show',compact('pages','logo','productGroup'));
    }
}

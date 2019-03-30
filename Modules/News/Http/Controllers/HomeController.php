<?php

namespace Modules\News\Http\Controllers;

use Modules\News\Entities\News;
use Modules\Media\Entities\File;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //echo "test";
        $logo = File::findOrNew(setting('storefront_header_logo'))->path;
        $pages = News::orderBy('id', 'DESC')->get();

        return view('public.news.show',compact('pages','logo'));
    }
}

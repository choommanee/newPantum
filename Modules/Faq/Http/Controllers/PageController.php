<?php

namespace Modules\News\Http\Controllers;

use Modules\News\Entities\News;
use Modules\Media\Entities\File;
use Illuminate\Routing\Controller;

class PageController extends Controller
{
    /**
     * Display page for the slug.
     *
     * @param string $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $logo = File::findOrNew(setting('storefront_header_logo'))->path;
        $page = News::where('slug', $slug)->firstOrFail();

        return view('public.home.news.show', compact('page', 'logo'));
    }
}

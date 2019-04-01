<?php

namespace Modules\Compare\Http\Controllers;

use Modules\Compare\Compare;
use Illuminate\Routing\Controller;

class CompareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \Modules\Compare\Compare $compare
     * @return \Illuminate\Http\Response
     */
    public function index(Compare $compare)
    {


        //
        return view('public.compare.index', compact('compare'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Modules\Compare\Compare $compare
     * @return \Illuminate\Http\Response
     */
    public function store(Compare $compare)
    {
        //dd(request());
        $compare->clear();
        foreach (request('produc_com') as $product_id){
            $compare->store($product_id);
        }

        return redirect()->route('compare.index');
        //return back()->withSuccess(trans('compare::messages.added'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @param \Modules\Compare\Compare $compare
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Compare $compare)
    {
        $compare->remove($id);

        return back()->withSuccess(trans('compare::messages.removed'));
    }
}

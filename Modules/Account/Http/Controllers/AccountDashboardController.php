<?php

namespace Modules\Account\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Serials\Entities\Serial;

class AccountDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $my = auth()->user();
        //dd($my);
       // $recentOrders = auth()->user()->recentOrders(5);
       // echo $my->id;
        $recentOrders = Serial::where('user_id',$my->id)->get();
       // dd($recentOrders);
        return view('public.account.dashboard.index', compact('my', 'recentOrders'));
    }
}

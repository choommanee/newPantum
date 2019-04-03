<?php
/**
 * Created by PhpStorm.
 * User: KIM
 * Date: 2/21/2019
 * Time: 3:17 AM
 */

namespace Modules\Serials\admin;
use Illuminate\Support\Facades\DB;
use Modules\Admin\Ui\AdminTable;
use Modules\User\Entities\User;

class SerialTable extends AdminTable
{
    public function make()
    {
        return $this->newTable()
            ->addColumn('product_name', function ($serials) {
                return $serials->product->name;
            })
            ->editColumn('datevarunty_start',function($serials){
                return $serials->datevarunty_start->format('d/m/Y');
            }) ->editColumn('user_id',function($serials){
                if($serials->user_id==''){
                    return "empty";
                }else{
                   // var_dump($serials->customer);
                   // return  $serials->customer->first_name;
                   $user_data = User::where('id',$serials->user_id)->get();
                    $user_data[0]->first_name;

                    return $user_data[0]->first_name.'  '.$user_data[0]->last_name;
                }
                //return $serials->datevarunty_start->format('d/m/Y');
            });
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: KIM
 * Date: 2/21/2019
 * Time: 3:17 AM
 */

namespace Modules\Serials\admin;
use Modules\Admin\Ui\AdminTable;

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
            });
    }
}

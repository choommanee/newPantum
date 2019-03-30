<?php
/**
 * Created by PhpStorm.
 * User: KIM
 * Date: 2/21/2019
 * Time: 7:21 AM
 */

namespace Modules\Drivers\admin;
use Modules\Admin\Ui\AdminTable;

class DriverTable extends AdminTable
{
    public function make()
    {
        return $this->newTable()
            ->addColumn('product_name', function ($drivers) {
                return $drivers->product->name;
            })
            ->addColumn('body',function ($drivers){
                return $drivers->translation1->body;
            });
    }
}

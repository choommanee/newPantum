<?php
/**
 * Created by PhpStorm.
 * User: KIM
 * Date: 2/21/2019
 * Time: 5:06 AM
 */
namespace Modules\Serials\admin;

use Modules\Admin\Ui\Tab;
use Modules\Admin\Ui\Tabs;
use Modules\Product\Entities\Product;



class ImportTabs extends  Tabs
{
    public function make()
    {
        $this->group('serial_information', 'Serials Information')
            ->active()
            ->add($this->general());
    }

    private function general()
    {
        return tap(new Tab('import', 'Import'), function (Tab $tab) {
            $tab->active();
            $tab->weight(5);
            $tab->fields(['product_id', 'name']);

            $productdata = Product::all()->sortBy('name')->pluck('name', 'id');
            $productdata->prepend('Please Select', '');

            $tab->view('serials::admin.serials.tabs.import', compact('productdata'));
        });
    }

}

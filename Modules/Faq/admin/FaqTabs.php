<?php
/**
 * Created by PhpStorm.
 * User: KIM
 * Date: 2/21/2019
 * Time: 5:06 AM
 */
namespace Modules\Faq\admin;

use Modules\Admin\Ui\Tab;
use Modules\Admin\Ui\Tabs;
use Modules\Product\Entities\Product;



class FaqTabs extends  Tabs
{
    public function make()
    {
        $this->group('Faq_information', 'Faq Information')
            ->active()
            ->add($this->general());
    }

    private function general()
    {
        return tap(new Tab('general', 'General'), function (Tab $tab) {
            $tab->active();
            $tab->weight(5);
            $tab->fields(['product_id', 'name']);

            $productdata = Product::all()->sortBy('name')->pluck('name', 'id');
            $productdata->prepend('Please Select', '');

            $tab->view('faq::admin.faqs.tabs.general', compact('productdata'));
        });
    }

}

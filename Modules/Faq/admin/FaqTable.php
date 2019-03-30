<?php
/**
 * Created by PhpStorm.
 * User: KIM
 * Date: 2/21/2019
 * Time: 7:21 AM
 */

namespace Modules\Faq\admin;
use Modules\Admin\Ui\AdminTable;

class FaqTable extends AdminTable
{
    public function make()
    {
        return $this->newTable()
            ->addColumn('product_name', function ($faqs) {
                return $faqs->product->name;
            })
            ->addColumn('body',function ($faqs){
                //dd($faqs);
                return $faqs->translation1->body;
            });
    }
}

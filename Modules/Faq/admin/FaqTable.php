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
                //dd($faqs->translation1());
                if(!is_object($faqs->translation1())){
                    return 'no data';
                }
               /* if($faqs->translation1->body <>''){
                    return $faqs->translation1->body;
                }else{
                    return 'no data';
                }*/
                //return $faqs->translation1->body;
            });
    }
}

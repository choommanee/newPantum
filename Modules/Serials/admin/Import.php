<?php


namespace Modules\Serials\admin;

use Modules\News\Entities\News;
use Modules\Product\Entities\Product;
use Modules\Serials\Entities\Serial;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Modules\Serials\Entities\Serial_translations;

class Import implements ToModel
{
    /**
     * @param array $row
     *
     * @return User|null
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    public function model(array $row)
    {
        //var_dump($this->request);
         //print_r($row);
         if($row[0]==''){
             return;
         }
         $serial = new Serial();
        $pagesq =  $serial->search($row[0])->query()->first()->id;
       // dd($pagesq);
         if($pagesq!=''){
             return;
         }
            $pro_id= request()->get('pro_id');
            if($row[2]!=''){
                $date_star_warranty = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[2]);
                $datevarunty_start = $date_star_warranty->format('Y-m-d');
            }

            $slug = $row[0];
            $varunty_time = $row[3];
            $is_active = 1;
            $sla = $row[5];


        $data = new Serial;
        $data->slug = $slug;
        $data->is_active = $is_active;
        $data->pro_id = $pro_id;
        $data->datevarunty_start = $datevarunty_start;
        $data->varunty_time = $sla;
        $data->save();
       // echo $slug;
       // echo $data->id;
        $sn = new Serial_translations;
        $sn->serial_id =$data->id;
        $sn->locale ='en';
        $sn->name=$slug;
        $sn->save();
        //die();
        return;
        //echo $data->id;

        //$pages = Faq::where('pro_id', $id)
        //
        //
        //    $product_id = Product::where
        //    print_r($row);
        //    echo "<br/>";

        //die();
        /*return new User([
            'name'     => $row[0],
            'email'    => $row[1],
            'password' => Hash::make($row[2]),
        ]);*/
    }
}

<?php


namespace Modules\Serials\admin;


use Modules\Serials\Entities\Serial;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;


class Export implements FromQuery
{
    use Exportable;
    public function query()
    {
        return Serial::query();
    }
}

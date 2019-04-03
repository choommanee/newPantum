<?php

namespace Modules\Serials\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Modules\Admin\Traits\HasCrudActions;
use Modules\Admin\Ui\Facades\TabManager;
use Modules\Serials\admin\Export;
use Modules\Serials\Entities\Serial;
use Modules\Serials\Http\Requests\SaveSerialRequest;
use Modules\Serials\admin\Import;

class SerialImportController extends Controller
{
    //use HasCrudActions;

    //use Exportable;
    /**
     * Model for the resource.
     *
     * @var string
     */
    protected $model = Serial::class;

    /**
     * Label of the resource.
     *
     * @var string
     */
    protected $label = 'serials::serials.serial';

    /**
     * View path of the resource.
     *
     * @var string
     */
    protected $viewPath = 'serials::admin.serials';

    /**
     * Form requests for the resource.
     *
     * @var array
     */
    protected $validation = SaveSerialRequest::class;


    public function queryq()
    {
        return Serial::query();
    }
    public function index1(Request $request)
    {
        //echo "test";

        if ($request->has('query')) {
            return $this->getModel()
                ->search($request->get('query'))
                ->query()
                ->limit($request->get('limit', 10))
                ->get();
        }

        if ($request->has('table')) {

            return $this->getModel()->table($request);
        }
        //echo 'test';
        return view("{$this->viewPath}.customer");
    }

    public function import()
    {
      //  echo $this->getModel()->getTable();
        $data = array_merge([
            'tabs' => TabManager::get('imports'),
            $this->getResourceName() => $this->getModel(),
        ], $this->getFormData('import'));

        return view("{$this->viewPath}.import", $data);
    }

    public  function addimport(Request $request){
        if($request->hasFile('fileserial')){
            Excel::import(new Import($request), $request->file('fileserial'));
           // dd();
        }



        return redirect(route('admin.serials.index'))->with('success', 'All good!');

    }

    public function downloadExcel($type)
    {

        return (new Export)->download('serial.xlsx');
      // return (new Export())->download('serial.xlsx');
       // return Excel::download(new Export(), 'export.xlsx');
       // Excel::
    }
}

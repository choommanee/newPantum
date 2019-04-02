<?php

namespace Modules\Serials\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Traits\HasCrudActions;
use Modules\Admin\Ui\Facades\TabManager;
use Modules\Serials\Entities\Serial;
use Modules\Serials\Http\Requests\SaveSerialRequest;

class SerialController extends Controller
{
    use HasCrudActions;

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

    public function index(Request $request)
    {

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

        return view("{$this->viewPath}.index");
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
}

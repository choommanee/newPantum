<?php

namespace Modules\Drivers\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use Modules\Admin\Traits\HasCrudActions;
use Modules\Drivers\Entities\Driver;
use Modules\Drivers\Http\Requests\SaveDriverRequest;

class DriverController extends Controller
{
    use HasCrudActions;

    /**
     * Model for the resource.
     *
     * @var string
     */
    protected $model = Driver::class;

    /**
     * Label of the resource.
     *
     * @var string
     */
    protected $label = 'drivers::drivers.driver';

    /**
     * View path of the resource.
     *
     * @var string
     */
    protected $viewPath = 'drivers::admin.drivers';

    /**
     * Form requests for the resource.
     *
     * @var array
     */
    protected $validation = SaveDriverRequest::class;
}

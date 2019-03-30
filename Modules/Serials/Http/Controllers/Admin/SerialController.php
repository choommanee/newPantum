<?php

namespace Modules\Serials\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use Modules\Admin\Traits\HasCrudActions;
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
}

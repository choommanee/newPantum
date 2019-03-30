<?php

namespace Modules\Serials\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use Modules\Admin\Traits\HasCrudActions;
use Modules\Serials\Entities\Serial_translations;
use Modules\Serials\Http\Requests\SaveSerial_translationsRequest;

class Serial_translationsController extends Controller
{
    use HasCrudActions;

    /**
     * Model for the resource.
     *
     * @var string
     */
    protected $model = Serial_translations::class;

    /**
     * Label of the resource.
     *
     * @var string
     */
    protected $label = 'serials::serial_translations.serial_translations';

    /**
     * View path of the resource.
     *
     * @var string
     */
    protected $viewPath = 'serials::admin.serial_translations';

    /**
     * Form requests for the resource.
     *
     * @var array
     */
    protected $validation = SaveSerial_translationsRequest::class;
}

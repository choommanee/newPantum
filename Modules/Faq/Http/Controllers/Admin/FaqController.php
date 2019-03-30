<?php

namespace Modules\Faq\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use Modules\Admin\Traits\HasCrudActions;
use Modules\Faq\Entities\Faq;
use Modules\Faq\Http\Requests\SaveFaqRequest;

class FaqController extends Controller
{
    use HasCrudActions;

    /**
     * Model for the resource.
     *
     * @var string
     */
    protected $model = Faq::class;

    /**
     * Label of the resource.
     *
     * @var string
     */
    protected $label = 'faq::faqs.faq';

    /**
     * View path of the resource.
     *
     * @var string
     */
    protected $viewPath = 'faq::admin.faqs';

    /**
     * Form requests for the resource.
     *
     * @var array
     */
    protected $validation = SaveFaqRequest::class;
}

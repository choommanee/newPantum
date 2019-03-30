<?php

namespace Modules\News\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use Modules\Admin\Traits\HasCrudActions;
use Modules\News\Entities\News;
use Modules\News\Http\Requests\SaveNewsRequest;

class NewsController extends Controller
{
    use HasCrudActions;

    /**
     * Model for the resource.
     *
     * @var string
     */
    protected $model = News::class;

    /**
     * Label of the resource.
     *
     * @var string
     */
    protected $label = 'news::news.news';

    /**
     * View path of the resource.
     *
     * @var string
     */
    protected $viewPath = 'news::admin.news';

    /**
     * Form requests for the resource.
     *
     * @var array
     */
    protected $validation = SaveNewsRequest::class;
}

<?php

namespace Modules\Faq\Http\Requests;

use Modules\Core\Http\Requests\Request;

class SaveFaqRequest extends Request
{
    /**
     * Available attributes.
     *
     * @var string
     */
    protected $availableAttributes = 'faq::attributes';

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [];
    }
}

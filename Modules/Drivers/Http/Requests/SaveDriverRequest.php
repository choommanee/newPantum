<?php

namespace Modules\Drivers\Http\Requests;

use Modules\Core\Http\Requests\Request;

class SaveDriverRequest extends Request
{
    /**
     * Available attributes.
     *
     * @var string
     */
    protected $availableAttributes = 'drivers::attributes';

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

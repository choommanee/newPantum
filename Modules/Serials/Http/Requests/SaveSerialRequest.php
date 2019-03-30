<?php

namespace Modules\Serials\Http\Requests;

use Modules\Core\Http\Requests\Request;

class SaveSerialRequest extends Request
{
    /**
     * Available attributes.
     *
     * @var string
     */
    protected $availableAttributes = 'serials::attributes';

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

<?php

namespace Modules\Serials\Http\Requests;

use Illuminate\Validation\Rule;
use Modules\Core\Http\Requests\Request;

class UpdateSerialsRequest extends Request
{
    /**
     * Available attributes.
     *
     * @var string
     */
    protected $availableAttributes = 'user::attributes.users';

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $userId = auth()->id();

        return [
            'w_producname' => 'required',
            'w_serial_no' => 'required',
            'reseller_name' => 'required',
            'purchase_date' => 'required',
            'img_product' => 'required',
            'img_product.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ];
    }
}

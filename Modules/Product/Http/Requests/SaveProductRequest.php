<?php

namespace Modules\Product\Http\Requests;

use Illuminate\Validation\Rule;
use Modules\Product\Entities\Product;
use Modules\Core\Http\Requests\Request;

class SaveProductRequest extends Request
{
    /**
     * Available attributes.
     *
     * @var string
     */
    protected $availableAttributes = 'product::attributes';

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'slug' => $this->getSlugRules(),
            'name' => 'required',
            'description' => 'required',
            'tax_class_id' => ['nullable', Rule::exists('tax_classes', 'id')],
            'is_active' => 'required|boolean',
            'new_from' => 'nullable|date',
            'new_to' => 'nullable|date',
        ];
    }

    private function getSlugRules()
    {
        $rules = $this->route()->getName() === 'admin.products.update'
            ? ['required']
            : ['sometimes'];

        $slug = Product::withoutGlobalScope('active')->where('id', $this->id)->value('slug');

        $rules[] = Rule::unique('products', 'slug')->ignore($slug, 'slug');

        return $rules;
    }
}

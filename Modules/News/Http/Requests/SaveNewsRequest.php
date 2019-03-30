<?php

namespace Modules\News\Http\Requests;

use Illuminate\Validation\Rule;
use Modules\Core\Http\Requests\Request;
use Modules\News\Entities\News;

class SaveNewsRequest extends Request
{
    /**
     * Available attributes.
     *
     * @var string
     */
    protected $availableAttributes = 'news::attributes';

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
            'body' => 'required',
            'is_active' => 'required|boolean',
        ];
    }

    private function getSlugRules()
    {
        $rules = $this->route()->getName() === 'admin.news.update'
            ? ['required']
            : ['sometimes'];

        $slug = News::withoutGlobalScope('active')->where('id', $this->id)->value('slug');

        $rules[] = Rule::unique('news', 'slug')->ignore($slug, 'slug');

        return $rules;
    }
}

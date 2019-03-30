<?php

namespace Modules\Faq\Entities;

use Modules\Support\Eloquent\TranslationModel;

class FaqTranslation extends TranslationModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','body'];
}

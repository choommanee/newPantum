<?php

namespace Modules\News\Entities;

use Modules\Support\Eloquent\TranslationModel;

class NewsTranslation extends TranslationModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'body'];
}

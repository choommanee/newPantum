<?php

namespace Modules\Serials\Entities;

use Modules\Support\Eloquent\TranslationModel;

class SerialTranslation extends TranslationModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','body'];
}

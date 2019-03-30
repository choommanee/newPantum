<?php

namespace Modules\Drivers\Entities;

use Modules\Support\Eloquent\TranslationModel;

class DriverTranslation extends TranslationModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','body'];
}

<?php

namespace Modules\Serials\Entities;

use Modules\Support\Eloquent\Model;
use Modules\Support\Eloquent\Translatable;

class Serial_translations extends Model
{
    use Translatable;

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = ['translations'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['serial_id','name','locale'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * The attributes that are translatable.
     *
     * @var array
     */
    public $translatedAttributes = [];
}

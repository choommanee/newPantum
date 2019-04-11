<?php

namespace Modules\Drivers\Entities;

use Modules\Drivers\admin\DriverTable;
use Modules\Product\Entities\Product;
use Modules\Support\Eloquent\Model;
use Modules\Support\Eloquent\Translatable;
use Modules\Meta\Eloquent\HasMetaData;
use Modules\Support\Eloquent\Sluggable;
use Modules\Drivers\Entities\DriverTranslation;

class Driver extends Model
{
    use Translatable, Sluggable, HasMetaData;

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
    protected $fillable = ['slug', 'is_active','pro_id','driver_url','is_driver'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['is_active' => 'boolean',];

    /**
     * The attributes that are translatable.
     *
     * @var array
     */
    public $translatedAttributes = ['name', 'body'];

    protected $slugAttribute = 'name';

    protected static function boot()
    {
        parent::boot();

        static::addActiveGlobalScope();
    }

    public static function urlForPage($id)
    {
        return static::select('slug')->firstOrNew(['id' => $id])->url();
    }

    public function url()
    {
        if (is_null($this->slug)) {
            return '#';
        }

        return localized_url(locale(), $this->slug);
    }

    /**
     * Get table data for the resource
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function table()
    {
        // return new AdminTable($this->newQuery()->withoutGlobalScope('active'));
        return new DriverTable($this->with('product'));
    }

    public function product()
    {
        return $this->belongsTo(Product::class,'pro_id','id');
    }

    public function translation1()
    {
        return $this->belongsTo(DriverTranslation::class,'id','driver_id');
    }


}

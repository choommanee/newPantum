<?php

namespace Modules\Faq\Entities;

use Modules\Faq\admin\FaqTable;
use Modules\Product\Entities\Product;
use Modules\Support\Eloquent\Model;
use Modules\Support\Search\Searchable;
use Modules\Support\Eloquent\Translatable;
use Modules\Meta\Eloquent\HasMetaData;
use Modules\Support\Eloquent\Sluggable;
use Modules\Faq\Entities\FaqTranslation;

class Faq extends Model
{
    use Translatable, Sluggable,Searchable, HasMetaData;

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
    protected $fillable = ['slug', 'is_active','pro_id','driver_url'];

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

    public function scopeProductGroup($query)
    {
        return $query->where('is_active', '=', '1')
            //->product()
            ->selectRaw('pro_id')
            ->groupBy('pro_id')
            ->orderBy('pro_id');
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
        return new FaqTable($this->with('product'));
    }

    public function product()
    {
        return $this->belongsTo(Product::class,'pro_id','id');
    }

    public function translation1()
    {
        return $this->belongsTo(FaqTranslation::class,'id','faq_id');
    }

    public function toSearchableArray()
    {
        // MySQL Full-Text search handles indexing automatically.
        if (config('scout.driver') === 'mysql') {
            return [];
        }

        $translations = $this->translations()
            ->withoutGlobalScope('locale')
            ->get(['name', 'body']);

        return ['id' => $this->id, 'translations' => $translations];
    }

    public function searchTable()
    {
        return 'faq_translations';
    }

    public function searchKey()
    {
        return 'faq_id';
    }

    public function searchColumns()
    {
        return ['name'];
    }
}

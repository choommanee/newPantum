<?php

namespace Modules\News\Entities;

use Modules\Media\Eloquent\HasMedia;
use Modules\Media\Entities\File;
use Modules\Admin\Ui\AdminTable;
use Modules\Support\Eloquent\Model;
use Modules\Meta\Eloquent\HasMetaData;
use Modules\Support\Eloquent\Sluggable;
use Modules\Support\Eloquent\Translatable;
use Modules\Support\Search\Searchable;
use Illuminate\Support\Facades\Request;

class News extends Model
{
    use Translatable, Sluggable, HasMetaData,HasMedia,Searchable;

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
    protected $fillable = ['slug', 'is_active'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * The attributes that are translatable.
     *
     * @var array
     */
    protected $translatedAttributes = ['name', 'body'];

    /**
     * The attribute that will be slugged.
     *
     * @var string
     */
    protected $slugAttribute = 'name';

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::saving(function () {
            Request::merge(['files' => [
                'news_image' => request()->input('files.news_image', []),
                'additional_images_news' => request()->input('files.additional_images_news', []),
            ]]);

            //$product->selling_price = $product->getSellingPrice();
        });

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
        return new AdminTable($this->newQuery()->withoutGlobalScope('active'));
    }

    public function scopeWithNewsImage($query)
    {
       //  echo "news test";
        $query->with(['files' => function ($q) {
            $q->wherePivot('zone', 'news_image');
        }]);
    }


    public function getPageDescAttribute()
    {
        return strip_tags($this->body);
    }

    /**
     * Get product's additional images.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAdditionalImagesNewsAttribute()
    {
        return $this->files
            ->where('pivot.zone', 'additional_images_news')
            ->sortBy('pivot.id');
    }

    public function getNewsImageAttribute()
    {
        return $this->files->where('pivot.zone', 'news_image')->first() ?: new File;
    }
}

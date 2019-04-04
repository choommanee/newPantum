<?php

namespace Modules\Serials\Entities;

//use Modules\Admin\Ui\AdminTable;
use Modules\Product\Entities\Product;
use Modules\Support\Eloquent\Model;
use Modules\Meta\Eloquent\HasMetaData;
use Modules\Support\Eloquent\Sluggable;
use Modules\Support\Eloquent\Translatable;
use Modules\Serials\admin\SerialTable;
use Modules\Support\Search\Searchable;
use Modules\Serials\Entities\SerialTranslation;
use Modules\User\Entities\User;

class Serial extends Model
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
    protected $fillable = ['id','slug', 'is_active','pro_id','varunty_time','datevarunty_start','ResellerName','ResellerAddress','ResellerPhone','PurchaseDate','sla','user_id','cus_use'];

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
    public $translatedAttributes = ['name', 'body'];

    protected $slugAttribute = 'name';

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected $dates = [
        'datevarunty_start',
        'PurchaseDate',
    ];

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
        return $query->selectRaw('pro_id')
            ->groupBy('pro_id')
            ->orderBy('pro_id');
    }

    public function searchWaranty($txtSearch){
        $query = \DB::table('serials')
            ->join('serial_translations', 'serials.id', '=', 'serial_translations.serial_id')
            ->where('serial_translations.name', '=', $txtSearch)
            ->select('serials.*', 'serial_translations.name')
            ->get();

        return $query;
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
        return new SerialTable($this->with('product'));
    }

    public function product()
    {
        return $this->belongsTo(Product::class,'pro_id','id');
    }

    public function cusotmer()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function translation1()
    {
        return $this->belongsTo(SerialTranslation::class,'id','serial_id');
    }
    public function dateExp(){

        $dateString =  $this->datevarunty_start;
        $t = strtotime($dateString);
        $t2 = strtotime($this->varunty_time.' years', $t);

        return date("d/m/Y", $t2) . PHP_EOL;

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
        return 'serial_translations';
    }

    public function searchKey()
    {
        return 'serial_id';
    }

    public function searchColumns()
    {
        return ['name','body'];
    }
}

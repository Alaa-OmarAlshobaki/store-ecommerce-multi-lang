<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use Translatable,SoftDeletes;
    protected $table="products";
    protected $with=['translations'];
    protected $fillable=[
        'slug',
        'price',
        'special_price',
        'special_price_type',
        'special_price_start',
        'special_price_end',
        'selling_price',
        'sku',
        'mange_stock',
        'qty',
        'in_stock',
        'viewed',
        'is_active',
        'brand_id',

    ];
    protected $cast=[
        'mange_stock'=>'boolean',
        'in_stock'=>'boolean',
        'is_active'=>'boolean',
    ];
    protected $dates=[
        'special_price_start',
        'special_price_end',
        'start_date',
        'end_date',
        'deleted_at'
        
    ];
    protected $translatedAttributes=['name','description','short_description'];
    // protected $slugAttribute='name';
    public function Brand(){
        return $this->belongsTo(Brand::class)->withDefault();
    }
    public function Categories(){
        return $this->belongToMany(Category::class ,'product_categories');
    }
    public function Tags(){
        return $this->belongToMany(Tag::class ,'product_Tags');
    }
    public function scopeActive($query)
    {
        return $query->where('is_active', '1');
    }
}
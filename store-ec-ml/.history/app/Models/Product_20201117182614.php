<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Astrotomic\Translatable\Translatable;
class Product extends Model
{
    use Translatable,SoftDeletes;
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
    protected $slu
}

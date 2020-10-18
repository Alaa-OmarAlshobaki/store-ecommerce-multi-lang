<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
class Category extends Model
{
    use Translatable;
    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = ['translations'];


    protected $translatedAttributes = ['name'];

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['key', 'is_translatable', 'plain_value'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_translatable' => 'boolean',
    ];

}
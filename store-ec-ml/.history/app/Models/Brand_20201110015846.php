<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use Translatable;
    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = ['translations'];
    protected $hidden = ['translations'];

    
    protected $translatedAttributes = ['name'];

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'slug', 'is_active',];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_active' => 'boolean',
    ];
}

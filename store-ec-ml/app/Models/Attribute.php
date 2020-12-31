<?php

namespace App\Models;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
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
    protected $fillable=['timestamps'];

    public function Option(){
       
            return $this->hasMany('App\Models\Option', 'attribute_id');
       
    }

}

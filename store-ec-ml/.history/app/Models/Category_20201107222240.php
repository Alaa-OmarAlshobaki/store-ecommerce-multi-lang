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
    protected $hidden = ['translations'];

    //make scope method to give only category where parent id null
    public function scopeParent($query){
        return $query->whereNull('parent_id');

    }
      //make scope method to give only category where parent id not null for child
      public function scopeChild($query){
        return $query->whereNotNull('parent_id');

    }
    ///handle is_active
    public function getStatus(){
        return $this->is_active == 0?__('admin/category.active'):__('admin/category.disable');
    } 
    //make relation one to many 
    public function Category(){
        return $this->hasMany('App\Models\Category', 'parent_id', 'id');
    }
    public function post()
{
    return $this->belongsTo('App\Models\Post', 'foreign_key');
}



    protected $translatedAttributes = ['name'];

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['parent_id', 'slug', 'is_active'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_active' => 'boolean',
    ];

}
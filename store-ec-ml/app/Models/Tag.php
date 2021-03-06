<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;

class Tag extends Model
{
    use Translatable;
    protected $with=['translations'];
    protected $translatedAttributes=['name'];
    protected $fillable=['slug'];
    protected $table='tags';
    
}

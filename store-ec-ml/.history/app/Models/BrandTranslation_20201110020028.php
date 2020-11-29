<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BrandTranslation extends Model
{
    protected $table = "category_translations";
    protected $fillable = ['name'];
}

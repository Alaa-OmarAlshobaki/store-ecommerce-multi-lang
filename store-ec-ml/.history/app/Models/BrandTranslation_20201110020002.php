<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BrandTranslation extends Model
{
    protected $table = "translations";
    protected $fillable = ['name'];
}

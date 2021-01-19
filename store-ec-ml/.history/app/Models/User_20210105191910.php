<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'password','mobile'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function VerifyCode(){
      
            return $this->hasMany('App\Models\VerificationCode', 'user_id');
       
    }

    public static function wishlist()
    {
        return $this->belongsToMany(Product::class, 'wish_lists')->withTimestamps();
    }

    public function wishlistHas($productId)
    {
        return self::wishlist()->where('product_id', $productId)->exists();
    }
}
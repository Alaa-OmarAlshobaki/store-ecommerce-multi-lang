<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
  protected $table="transactions";
  protected $fillable=['order_id','transaction_id','payment_method'];
      /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts=[
      'data'=>'array',
    ];

       /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    public function Order(){
      return $this->belongTo(Order::class);
    }

}

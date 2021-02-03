<?php

namespace App\Models;

use App\Models\User;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";
    protected $fillable = ['customer_id', 'customer_phone', 'customer_name', 'total', 'payment_method', 'local', 'status', 'note'];
    const PAID = 'paid';
    const UNPAID = 'unpaid';
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['start_date', 'end_date', 'delete_at'];
    public function Transaction()
    {
        return $this->hasOne(Transaction::class, 'transaction_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';
    protected $fillable = [
        'uniq',
        'user_id',
        'price_total',
        'type_of_payment',
        'proof_of_payment',
        'status',
    ];

    protected $hidden;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function detail(){
        return $this->hasMany(TransactionDetail::class);
    }
}

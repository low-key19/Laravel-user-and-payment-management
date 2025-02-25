<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = ['payment_type', 'user_id', 'amount', 'payment_date', 'next_renew_date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

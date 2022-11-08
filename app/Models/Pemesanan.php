<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //default value
    protected $attributes = [
        'status' => 0
    ];

    public function customers()
    {
        return $this->belongsTo(Customer::class);
    }

    public function user()
    {
        return $this->belongsToThrough(User::class, Peserta::class);
    }

    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class);
    }
}

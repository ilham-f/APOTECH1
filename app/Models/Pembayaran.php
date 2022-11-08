<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //default value
    protected $attributes = [
        'status' => 0
    ];

    public function pemesanan()
    {
        return $this->hasOne(Pemesanan::class);
    }
}

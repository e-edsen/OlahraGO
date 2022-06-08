<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    public function olahraga()
    {
        return $this->belongsTo(olahraga::class, 'olahraga_id', 'id');
    }
    public function pesanan_details()
    {
        return $this->hasMany(pesanan_detail::class, 'product_id', 'id');
    }
}

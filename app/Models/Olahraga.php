<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class olahraga extends Model
{
    use HasFactory;
    public function products()
    {
        return $this->hasMany(product::class, 'olahraga_id', 'id');
    }
}

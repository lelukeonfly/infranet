<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
    use HasFactory;

    public function municipalities()
    {
        return $this->belongsToMany(Municipality::class);
    }

    public function numbers()
    {
        return $this->belongsToMany(Number::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    use HasFactory;

    public function adresses()
    {
        return $this->hasMany(Address::class);
    }

    public function fractions()
    {
        return $this->hasMany(Fraction::class);
    }

    public function streets()
    {
        return $this->belongsToMany(Street::class);
    }

}

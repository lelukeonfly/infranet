<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    public function municipality()
    {
        return $this->belongsTo(Municipality::class);
    }

    public function street()
    {
        return $this->belongsTo(Street::class);
    }

    public function number()
    {
        return $this->hasOne(Number::class);
    }

}

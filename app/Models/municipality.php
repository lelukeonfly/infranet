<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
    use HasFactory;

    public function adresses()
    {
        return $this->hasMany(Address::class);
    }

    public function fractions()
    {
        return $this->hasMany(Fraction::class);
    }

    //gets all streets related to the one Municipality
    public function streets()
    {
        return $this->belongsToMany(Street::class);
    }

    public function numbers()
    {
        $this->hasManyThrough(Number::class, Street::class);
    }

}

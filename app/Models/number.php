<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Number extends Model
{
    use HasFactory;
    // use \Staudenmeir\EloquentHasManyDeep\HasRelationships;

    public function streets()
    {
        return $this->belongsToMany(Street::class);
    }

    // public function municipalities()
    // {
    //     //https://github.com/staudenmeir/eloquent-has-many-deep#manytomany--manytomany
    //     return $this->hasManyDeep(Municipality::class, ['municipality_street', Street::class, 'number_street']);
    // }

}

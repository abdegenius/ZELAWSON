<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    public function property() {
        return $this->hasMany(Property::class);
    }

    public function chat() {
        return $this->hasMany(Property::class);
    }
}

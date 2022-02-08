<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Property extends Model
{
    use HasFactory;

    public function agent() {
        return $this->belongsTo(Agent::class);
    }
    public function wishlist() {
        return $this->belongsTo(HasMany::class);
    }
}

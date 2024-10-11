<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    use HasFactory;

    protected $fillable = ['apartment_id', 'floor_number'];

    public function apartment()
    {
        return $this->belongsTo(Apartment::class);
    }

    public function units()
    {
        return $this->hasMany(Unit::class);
    }
}

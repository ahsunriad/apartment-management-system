<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $fillable = ['floor_id', 'rent', 'square_footage', 'description', 'is_available'];

    public function floor()
    {
        return $this->belongsTo(Floor::class);
    }

    public function tenant()
    {
        return $this->hasOne(Tenant::class);
    }
}

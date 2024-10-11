<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utility extends Model
{
    use HasFactory;

    protected $fillable = ['tenant_id', 'gas_bill', 'service_charge', 'water_bill', 'waste_bill', 'total_bill', 'bill_generate_date', 'bill_payment_date'];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
}

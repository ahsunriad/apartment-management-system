<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('utilities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id')->constrained('tenants')->onDelete('cascade');
            $table->integer('gas_bill');
            $table->integer('service_charge');
            $table->integer('water_bill');
            $table->integer('waste_bill');
            $table->integer('total_bill')->computed('gas_bill + service_charge + water_bill + waste_bill');
            $table->date('bill_generate_date');
            $table->date('bill_payment_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilities');
    }
};

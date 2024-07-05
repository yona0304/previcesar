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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->string('n_contract');
            $table->date('affiliation_date');
            $table->bigInteger('quota_value')->unsigned();
            $table->string('site_issuance');
            $table->string('advisor')->nullable();
            $table->string('holder_id')->nullable();
            $table->string('payment_period', 20);
            $table->date('end_date')->nullable();
            $table->date('payment_date')->nullable();
            $table->smallInteger('quota_number')->unsigned()->nullable();
            $table->date('next_payment')->nullable();
            $table->string('state', 15);
            $table->timestamps();
        });

        Schema::create('holders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('identification')->unsigned();
            $table->string('name');
            $table->date('date_of_birth');
            $table->string('phone_number', 20)->nullable()->unique();
            $table->string('address');
            $table->string('shipping_location');
            $table->string('state', 15);
            $table->string('n_contract');
            $table->string('role');
            $table->timestamps();
        });

        Schema::create('beneficiary', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('identification')->unsigned();
            $table->string('name');
            $table->date('date_of_birth');
            $table->string('state', 15);
            $table->string('n_contract');
            $table->string('role');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contract');
        Schema::dropIfExists('holder');
        Schema::dropIfExists('beneficiary');
    }
};

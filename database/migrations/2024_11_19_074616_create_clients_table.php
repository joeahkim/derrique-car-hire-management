<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone_number');
            $table->string('email');
            $table->string('id_number')->unique();
            // $table->string('id_passport_photo')->nullable();
            $table->string('nationality');
            $table->string('occupation');
            $table->string('residence');
            $table->string('drivers_license_number');
            $table->date('drivers_license_expiry_date');
            $table->string('id_card_front')->nullable();
            $table->string('id_card_back')->nullable();
            $table->timestamps();
        });
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNextOfKinTable extends Migration
{
    public function up()
    {
        Schema::create('next_of_kin', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained('clients')->onDelete('cascade');
            $table->string('name');
            $table->string('phone_number');
            $table->string('id_passport_number')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('next_of_kin');
    }
}

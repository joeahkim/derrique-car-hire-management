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
        Schema::create('guarantors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained('clients')->onDelete('cascade');
            $table->string('name');
            $table->string('phone_number');
            $table->string('id_number')->unique();
            // $table->string('id_passport_photo')->nullable();
            $table->string('Nationality');
            $table->string('residence');
            $table->string('Occupation');
            $table->string('relationship');
            $table->string('id_card_front')->nullable();
            $table->string('id_card_back')->nullable();
            $table->timestamps();
        });
    }
};

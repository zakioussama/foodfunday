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
    Schema::create('reservations', function (Blueprint $table) {
        $table->id();
        $table->string('form_name');
        $table->string('email');
        $table->string('phone')->nullable();
        $table->unsignedTinyInteger('no_of_persons');
        $table->date('date');
        $table->string('time');
        $table->string('preferred_food');
        $table->string('occasion');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};

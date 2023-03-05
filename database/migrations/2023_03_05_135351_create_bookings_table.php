<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId("car_id")->constrained();
            $table->boolean("confirmed")->default(false);
            $table->boolean("second_driver");
            $table->boolean("unlimited_mileage");
            $table->boolean("border_crossing");
            $table->boolean("baby_seat_small");
            $table->boolean("baby_seat_big");
            $table->boolean("baby_seat_booster");
            $table->boolean("green_card");
            $table->integer("basic_insurance");
            $table->integer("full_insurance");
            $table->integer("deposit");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};

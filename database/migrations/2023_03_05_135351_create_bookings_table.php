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
            $table->integer("border_crossing");
            $table->boolean("baby_seat_small");
            $table->boolean("baby_seat_big");
            $table->boolean("baby_seat_booster");
            $table->integer("basic_insurance");
            $table->integer("full_insurance");
            $table->integer("deposit");
            $table->integer("damage_participation");
            $table->string("first_name");
            $table->string("last_name");
            $table->string("email");
            $table->string("phone_number");
            $table->text("additional_information")->nullable();
            $table->string('pick_up_location');
            $table->string('pick_up_date');
            $table->string('pick_up_time');
            $table->string('pick_off_location');
            $table->string('pick_off_date');
            $table->string('pick_off_time');
            $table->integer('total');
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

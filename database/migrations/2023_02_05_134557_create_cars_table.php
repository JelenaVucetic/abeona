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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->softDeletes();
            $table->foreignId('user_id');
            $table->string('name');
            $table->integer('year');
            $table->string('motor');
            $table->integer('doors');
            $table->integer('passenger');
            $table->string('transmission');
            $table->integer('basic_insurance');
            $table->integer('full_insurance');
            $table->integer('participation_damage');
            $table->integer('deposit');
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
    }
};

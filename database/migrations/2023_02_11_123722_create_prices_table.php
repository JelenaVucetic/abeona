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
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id')->constrained();

            $table->enum('season', ['zima', 'proljeće', 'ljeto', 'jesen']);
            // all prices are in cents
            $table->integer('default');
            $table->integer('1-3');
            $table->integer('4-7');
            $table->integer('8-15');
            $table->integer('16-22');
            $table->integer('23+');
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
        Schema::dropIfExists('prices');
    }
};

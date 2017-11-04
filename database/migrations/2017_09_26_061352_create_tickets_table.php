<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('busID')->unsigned();
            $table->foreign('busID')->references('id')->on('buses');
            $table->integer('uID')->unsigned();
            $table->foreign('uID')->references('id')->on('users');
            $table->string('name');
            $table->string('email')->default(NULL);
            $table->integer('phone')->default(NULL);
            $table->date('booking_date')->default(NULL);;
            $table->date('travel_date')->default(NULL);;
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
        Schema::dropIfExists('tickets');
    }
}

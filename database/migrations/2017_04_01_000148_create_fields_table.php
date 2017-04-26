<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatefieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fields', function (Blueprint $table){
            $table->increments('id');
            $table->string ('stadium');
            $table->integer ('capacity');
            $table->string ('uses');
            $table->string('reservationdate')->nullable();
            $table->string('from')->nullable();
            $table->string('to')->nullable();
            $table->timestamps();
        });

//        Schema::table('fields', function (Blueprint $table) {
//            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
//            //add notes to this part.
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('fields');
    }
}

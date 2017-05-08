<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDownloadsTable extends Migration
{
    public function up()
    {
        Schema::create('downloads', function(Blueprint $table){
            $table-> increments("id");
            $table-> string("number of customers in August");
            $table-> string("number of fields used in August");
            $table-> string("number of customers in September");
            $table-> string("number of fields used in September");

        });
    }
    public function down()
    {
        Schema::drop("downloads");
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('list', function(Blueprint $blueprint){
            $blueprint->increments("id");
            $blueprint->string("name","255");
            $blueprint->longText("picture");
            $blueprint->longText("address");
            $blueprint->integer("number")->length("10");
            $blueprint->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('list');
    }
}

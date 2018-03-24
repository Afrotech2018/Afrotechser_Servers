<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{

    public function up()
    {
        Schema::create('Post', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');

            $table->string('surname');
            $table->string('message');

            // Schema declaration
            // Constraints declaration

        });
    }

    public function down()
    {
        Schema::drop('Post');
    }
}

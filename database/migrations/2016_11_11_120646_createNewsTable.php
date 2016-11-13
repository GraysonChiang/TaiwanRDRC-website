<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('officialnews', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sid');
            $table->text('title');
            $table->text('content');
            $table->string('dep');
            $table->date('data');
            $table->string('file1');
            $table->string('file2');
            $table->string('file3');

        });




    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('officialnews');

    }
}

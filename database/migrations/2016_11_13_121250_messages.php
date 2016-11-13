<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Messages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('phone');
            $table->text('content');
            $table->text('type');
            $table->dateTime('create_at');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');

    }
}

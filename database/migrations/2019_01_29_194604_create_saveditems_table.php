<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaveditemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saveditems', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->string('name');
            $table->text('description');
            $table->text('summary');
            $table->text('tags');
            $table->string('picture');
            $table->string('picture2');
            $table->string('category');
            $table->string('genre');
            $table->string('color');
            $table->integer('price');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on("users");
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
        Schema::dropIfExists('saveditems');
    }
}

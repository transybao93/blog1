<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('pTitle', 200)->comment('title column');
            $table->text('pMainImageLink')->comment('main image link column');
            $table->text('pContent')->comment('content column');
            $table->string('pAuthor', 50)->comment('author column');
            $table->integer('pTypeID')->unsigned();
            $table->timestamps();
            //define foreign key with pTypeID column
            // $table->foreign('pTypeID')->references('id')->on('types');
        });
        // Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}

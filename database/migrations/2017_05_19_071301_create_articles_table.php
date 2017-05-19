<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',20);
            $table->string('abstract',100);
            $table->longText('content', 20000);
            $table->string('article_img', 100);
            $table->string('author_img', 100)->nullable();
            $table->string('author_name', 12);
            $table->integer('author_id');
            $table->integer('be_dz')->default(0);
            $table->integer('be_pl')->default(0);
            $table->integer('be_sc')->default(0);
            $table->integer('be_see')->default(0);
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
        Schema::drop('articles');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',12);
            $table->string('email',30)->unique()->nullable();
            $table->string('phone',11)->unique();
            $table->string('password', 60);
            $table->integer('gender')->default(0);
            $table->integer('is_sx')->default(1);
            $table->integer('is_pl')->default(1);
            $table->integer('is_dz')->default(1);
            $table->integer('is_sc')->default(1);
            $table->integer('can_sx')->default(1);
            $table->integer('can_pl')->default(1);
            $table->integer('can_at')->default(1);
            $table->bigInteger('is_sx_total')->default(0);
            $table->bigInteger('is_pl_total')->default(0);
            $table->bigInteger('is_dz_total')->default(0);
            $table->bigInteger('is_sc_total')->default(0);
            $table->string('intro', 60)->nullable();
            $table->string('head_src', 100)->nullable();
            $table->rememberToken();
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
        Schema::drop('users');
    }
}

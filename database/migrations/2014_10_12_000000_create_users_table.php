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
            $table->tinyInteger('gender')->default(0);
            $table->tinyInteger('is_sx')->default(1);
            $table->tinyInteger('is_pl')->default(1);
            $table->tinyInteger('is_dz')->default(1);
            $table->tinyInteger('is_sc')->default(1);
            $table->tinyInteger('can_sx')->default(1);
            $table->tinyInteger('can_pl')->default(1);
            $table->tinyInteger('can_at')->default(1);
            $table->bigInteger('is_sx_total')->default(0);
            $table->bigInteger('is_pl_total')->default(0);
            $table->bigInteger('is_dz_total')->default(0);
            $table->bigInteger('is_sc_total')->default(0);
            $table->string('intro', 60);
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

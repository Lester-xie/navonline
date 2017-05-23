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
            $table->string('name',12);  // 昵称
            $table->string('email',30)->unique()->nullable();   // 邮箱
            $table->string('phone',11)->unique();   // 手机号
            $table->string('password', 60);  // 密码
            $table->integer('gender')->default(0);  // 性别
            $table->integer('is_sx')->default(1);   // 私信通知，0：关闭，1：打开
            $table->integer('is_pl')->default(1);   // 评论通知，0：关闭，1：打开
            $table->integer('is_dz')->default(1);   // 点赞通知，0：关闭，1：打开
            $table->integer('is_sc')->default(1);   // 收藏通知，0：关闭，1：打开
            $table->integer('can_sx')->default(1);  // 私信管理，0：关闭私信，1：接收任何私信，2：只接收关注的人的私信
            $table->integer('can_pl')->default(1);  // 评论管理，0：关闭评论，1：任何人都能评论，2：只允许关注的人评论
            $table->integer('can_at')->default(1);  // 不接收@我的消息，1：接收所有人@我的消息，2：只接收关注的人@我的消息
            $table->integer('is_fh')->default(0);   // 是否封号，0：未封号，1：封号
            $table->bigInteger('is_fh_time')->default(0);   // 被封号时长，X小时
            $table->integer('is_jy')->default(0);   // 是否禁言，0：未禁言，1：禁言
            $table->bigInteger('is_jy_time')->default(0);   // 被禁言时长，X小时
            $table->bigInteger('is_sx_total')->default(0);  // 私信通知数量
            $table->bigInteger('is_pl_total')->default(0);  // 评论通知数量
            $table->bigInteger('is_dz_total')->default(0);  // 点赞通知数量
            $table->string('intro', 60)->nullable();    // 个人介绍
            $table->string('head_src', 100)->nullable();    // 头像地址
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

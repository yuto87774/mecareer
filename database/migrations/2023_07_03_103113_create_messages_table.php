<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    // database/migrations/create_messages_table.php
Schema::create('messages', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('sender_id');
    $table->unsignedBigInteger('receiver_id');
    $table->text('content');
    $table->timestamps();

    //userテーブルのidを外部キーにすると言っている
    //これによってuserテーブルに存在しないidはmessageテーブルには登録させないみたいなことができる
    $table->foreign('sender_id')->references('id')->on('users')->onDelete('cascade');
    $table->foreign('receiver_id')->references('id')->on('users')->onDelete('cascade');
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

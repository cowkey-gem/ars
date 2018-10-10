<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charaset = 'utf8';
            $table->char('member_no', 6)->comment('社員番号');
            $table->unsignedInteger('user_id')->comment('ユーザーID');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->primary('member_no');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}

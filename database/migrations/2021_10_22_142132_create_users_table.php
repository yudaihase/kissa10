<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if (!Schema::hasTable('users')) { //ブログのテーブルが無かったら作る
            Schema::create('users', function (Blueprint $userstable) {
                $userstable->Increments('id'); //勝手に採番される
                $userstable->string('user_name')->unique();
                $userstable->string('e_mail')->unique();
                $userstable->string('password');
                $userstable->string('role');
                $userstable->rememberToken()->nullable(); // nullを許容したい時
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

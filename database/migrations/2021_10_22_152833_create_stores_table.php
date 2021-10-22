<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if (!Schema::hasTable('stores')) { //ブログのテーブルが無かったら作る
            Schema::create('stores', function (Blueprint $storestable) {
                $storestable->Increments('id'); //勝手に採番される
                $storestable->foreignId('user_id');
                $storestable->foreignId('category_id');
                $storestable->string('store_name');
                $storestable->string('store_link')->nullable();
                $storestable->string('meal_price');
                $storestable->text('overview');
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
        Schema::dropIfExists('stores');
    }
}

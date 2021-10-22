<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if (!Schema::hasTable('reviews')) { //ブログのテーブルが無かったら作る
            Schema::create('reviews', function (Blueprint $reviewstable) {
                $reviewstable->Increments('id'); //勝手に採番される
                $reviewstable->foreignId('user_id');
                $reviewstable->foreignId('store_id');
                $reviewstable->text('comment');
               
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
        Schema::dropIfExists('reviews');
    }
}

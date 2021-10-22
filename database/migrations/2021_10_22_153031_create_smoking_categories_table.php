<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmokingCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if (!Schema::hasTable('smoking_categories')) { //ブログのテーブルが無かったら作る
            Schema::create('smoking_categories', function (Blueprint $smoking_categoriestable) {
                $smoking_categoriestable->Increments('id'); //勝手に採番される
                $smoking_categoriestable->string('category_name');
               
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
        Schema::dropIfExists('smoking_categories');
    }
}

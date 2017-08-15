<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsPhotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_posts_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_id')->unsigned();
            $table->string('img_dir',256)->default('serveimage.gif');
            $table->string('name',256);
        });
        Schema::table('tbl_posts_photos',function(Blueprint $table){
          $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     * rn void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_posts_photos');
    }
}

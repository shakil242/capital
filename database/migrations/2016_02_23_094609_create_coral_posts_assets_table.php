<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoralPostsAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coral_posts_assets', function (Blueprint $table) {
            $table->integer("post_id")->unsigned();
            $table->integer("asset_id")->unsigned();

            $table->foreign("asset_id")->references("id")->on("coral_assets")->onDelete('cascade');
            $table->foreign("post_id")->references("id")->on("coral_blog_posts")->onDelete('cascade');
            $table->boolean("featured")->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('coral_posts_assets');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoralCategoriesPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coral_categories_posts', function (Blueprint $table) {
            $table->integer("category_id")->unsigned();
            $table->integer("post_id")->unsigned();

            $table->foreign("category_id")->references("id")->on("coral_blog_categories");
            $table->foreign("post_id")->references("id")->on("coral_blog_posts");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('coral_categories_posts');
    }
}

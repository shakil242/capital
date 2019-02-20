<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateForeignKeyCategoryPost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('coral_categories_posts', function (Blueprint $table) {

            $table->dropForeign('coral_categories_posts_category_id_foreign');

            $table->dropForeign('coral_categories_posts_post_id_foreign');


            $table->foreign('category_id')
                ->references('id')->on('coral_blog_categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('post_id')
                ->references('id')->on('coral_blog_posts')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('coral_categories_posts', function (Blueprint $table) {

            $table->dropForeign('coral_categories_posts_category_id_foreign');

           $table->dropForeign('coral_categories_posts_post_id_foreign');

            $table->foreign("category_id")->references("id")->on("coral_blog_categories");
            $table->foreign("post_id")->references("id")->on("coral_blog_posts");

        });
    }
}

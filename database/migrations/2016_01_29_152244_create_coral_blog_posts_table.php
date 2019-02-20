<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoralBlogPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coral_blog_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string("title");
            $table->string("slug")->unique();
            $table->text("body")->nullable();
            $table->timestamp("published_at")->nullable();
            $table->integer("user_id")->unsigned();

            $table->foreign("user_id")->references("id")->on("users");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('coral_blog_posts');
    }
}

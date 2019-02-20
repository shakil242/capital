<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCoralTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coral_team', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name",30);
            $table->string("slug")->unique();
            $table->string("image");
            $table->string("candid_image");
            $table->string("large_image");
            $table->text("body");
            $table->timestamps();
        });
        Schema::create('coral_team_certification', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->integer('team_id')->unsigned();
            $table->timestamps();
            $table->foreign('team_id')->references('id')->on('coral_team')->onDelete('cascade');
        });
        Schema::create('coral_team_affiliation', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->integer('team_id')->unsigned();
            $table->timestamps();
            $table->foreign('team_id')->references('id')->on('coral_team')->onDelete('cascade');
        });

        Schema::create('coral_team_focus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->integer('team_id')->unsigned();
            $table->timestamps();
            $table->foreign('team_id')->references('id')->on('coral_team')->onDelete('cascade');
        });

        Schema::create('coral_team_jobs', function (Blueprint $table) {

            $table->increments('id');
            $table->string('title', 100);
            $table->integer('team_id')->unsigned();
            $table->timestamps();
            $table->foreign('team_id')->references('id')->on('coral_team')->onDelete('cascade');
        });

        Schema::create('coral_team_board_membership', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->integer('team_id')->unsigned();
            $table->timestamps();
            $table->foreign('team_id')->references('id')->on('coral_team')->onDelete('cascade');
        });


        Schema::create('coral_team_Other_experience', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->integer('team_id')->unsigned();
            $table->timestamps();
            $table->foreign('team_id')->references('id')->on('coral_team')->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('coral_team_certification', function (Blueprint $table) {
            $table->dropForeign('coral_team_certification_team_id_foreign');
            $table->drop('coral_team_certification');
        });
        Schema::table('coral_team_affiliation', function (Blueprint $table) {
        $table->dropForeign('coral_team_affiliation_team_id_foreign');
        $table->drop('coral_team_affiliation');
        });
        Schema::table('coral_team_focus', function (Blueprint $table) {
            $table->dropForeign('coral_team_focus_team_id_foreign');
            $table->drop('coral_team_focus');
        });

        Schema::table('coral_team_jobs', function (Blueprint $table) {
            $table->dropForeign('coral_team_jobs_team_id_foreign');
            $table->drop('coral_team_jobs');
        });

        Schema::table('coral_team_Other_experience', function (Blueprint $table) {
            $table->dropForeign('coral_team_other_experience_team_id_foreign');
            $table->drop('coral_team_Other_experience');
        });
        Schema::table('coral_team_board_membership', function (Blueprint $table) {
            $table->dropForeign('coral_team_board_membership_team_id_foreign');
            $table->drop('coral_team_board_membership');
        });

        Schema::table('coral_team', function (Blueprint $table) {
            $table->drop('coral_team');
        });


    }
}

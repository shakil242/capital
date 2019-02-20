<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoralAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coral_assets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("asset_type_id");
            $table->string("name");
            $table->integer("file_size");
            $table->string("extension");
            $table->string("file_path");
            $table->string("mime_type");
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
        Schema::drop('coral_assets');
    }
}

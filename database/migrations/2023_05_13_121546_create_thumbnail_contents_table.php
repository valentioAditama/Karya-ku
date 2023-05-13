<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThumbnailContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thumbnail_content', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_content');
            $table->string('path', 200);
            $table->timestamps();

            // reference to Content
            $table->foreign('id_content')->references('id')->on('content');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thumbnail_contents');
    }
}

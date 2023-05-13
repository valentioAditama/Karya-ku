<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThumbnailCommunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thumbnail_community', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->unsignedBigInteger('id_community');
            $table->string('path', 200);
            $table->timestamps();

            // reference to community
            $table->foreign('id_community')->references('id')->on('community');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thumbnail_community');
    }
}

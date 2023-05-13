<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoContentCommunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_content_communities', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->unsignedBigInteger('id_content_community');
            $table->string('path', 200);
            $table->timestamps();

            // reference to to content community
            $table->foreign('id_content_community')->references('id')->on('content_community');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('video_content_communities');
    }
}

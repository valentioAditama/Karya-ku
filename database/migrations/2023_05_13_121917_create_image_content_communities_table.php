<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImageContentCommunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_content_community', function (Blueprint $table) {
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
        Schema::dropIfExists('image_content_community');
    }
}

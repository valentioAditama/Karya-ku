<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikeContentCommunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like_content_community', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_content_community');
            $table->uuid('id_user');
            $table->timestamps();

            // reference to to content community and users
            $table->foreign('id_content_community')->references('id')->on('content_community')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('like_content_community');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentContentCommunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_content_community', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->unsignedBigInteger('id_content_community');
            $table->unsignedBigInteger('id_user');
            $table->timestamps();

            // reference to to content community and users
            $table->foreign('id_content_community')->references('id')->on('content_community');
            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment_content_community');
    }
}

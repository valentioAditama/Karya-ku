<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentCommunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_community', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->unsignedInteger('id_user');
            $table->unsignedInteger('id_community');
            $table->string('description', 2000);
            $table->timestamps();

            // reference to users and community
            $table->foreign('id_user')->references('id')->on('users');
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
        Schema::dropIfExists('content_community');
    }
}

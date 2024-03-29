<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImageContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_content', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_content');
            $table->string('path', 200);
            $table->timestamps();

            // reference to content
            $table->foreign('id_content')->references('id')->on('content')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image_contents');
    }
}

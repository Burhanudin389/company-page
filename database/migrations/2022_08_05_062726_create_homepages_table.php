<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepages', function (Blueprint $table) {
            $table->id();
            $table->string('jumbotron_image');
            $table->string('jumbotron_title');
            $table->string('jumbotron_description');
            $table->string('jumbotron_button');
            $table->string('keunggulan_img');
            $table->string('keunggulan_title');
            $table->string('keunggulan_description');
            $table->string('solusi_img');
            $table->string('solusi_title');
            $table->string('solusi_description');
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
        Schema::dropIfExists('homepages');
    }
};

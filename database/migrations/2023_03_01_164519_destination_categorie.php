<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DestinationCategorie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destination_categorys', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('destination_id');
            $table->foreign('destination_id')->references('id')->on('destinations');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categorys');
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
        Schema::dropIfExists('destination_categorys');
    }
}

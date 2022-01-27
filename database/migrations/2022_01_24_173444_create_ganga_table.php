<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGangaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gangas', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('url');
            $table->foreignId('category_id')->constrained('categories');
            $table->integer('points');
            $table->unsignedDouble('price');
            $table->unsignedDouble('discount_price');
            $table->boolean('available');
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
        Schema::dropIfExists('gangas');
    }
}

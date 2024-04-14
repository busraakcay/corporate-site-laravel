<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->datetime('date')->nullable();
            $table->string('image_tr');
            $table->string('image_en');
            $table->string('title_tr');
            $table->string('title_en');
            $table->longText('content_tr');
            $table->longText('content_en');
            $table->boolean('status')->default(true);
            $table->integer('place')->nullable();
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
        Schema::dropIfExists('news');
    }
}

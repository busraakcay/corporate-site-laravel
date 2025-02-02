<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name_tr');
            $table->string('name_en');
            $table->longText('description_tr');
            $table->longText('description_en');
            $table->string('color_tr');
            $table->string('color_en');
            $table->string('size');
            $table->string('material_tr');
            $table->string('material_en');
            $table->string('base_tr');
            $table->string('base_en');
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('products');
    }
}

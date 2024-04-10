<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->longText('about_us_tr');
            $table->longText('about_us_en');
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('company_name');
            $table->string('company_email');
            $table->string('company_phone');
            $table->string('company_address');

            $table->longText('seo_title_tr');
            $table->longText('seo_keywords_tr');
            $table->longText('seo_description_tr');

            $table->longText('seo_title_en');
            $table->longText('seo_keywords_en');
            $table->longText('seo_description_en');



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
        Schema::dropIfExists('settings');
    }
}

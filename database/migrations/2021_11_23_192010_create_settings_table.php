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
            
            $table->text('about_text')->nullable();

            $table->string('about_image')->nullable();
            $table->string('about_buttton')->nullable();
            $table->string('about_button_1')->nullable();
            
            $table->text('about_first')->nullable();
            $table->text('about_second')->nullable();
            $table->text('about_third')->nullable();
            $table->text('about_fourth')->nullable();

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

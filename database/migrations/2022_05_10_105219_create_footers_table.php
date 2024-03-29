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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            // $table->text('facebook');
            // $table->text('twitter');
            // $table->text('instagram');
            // $table->text('youtube');
             $table->text('facebook')->nullable();
            $table->text('twitter')->nullable();
            $table->text('instagram')->nullable();
            $table->text('youtube')->nullable();
            $table->text('contact_info')->nullable();
            $table->text('email')->nullable();

            //community section
            $table->text('community_section')->nullable();

            //blog section
            $table->text('blog_section')->nullable();

            //contact us section
            $table->text('contact_us_section')->nullable();

            $table->text('section4')->nullable();




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
        Schema::dropIfExists('footers');
    }
};

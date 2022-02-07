<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('section_title_image')->nullable();
            $table->string('section_title_title')->nullable();
	        $table->text('section_title_description')->nullable();

	        $table->string('section_history_title')->nullable();
	        $table->text('section_history_description')->nullable();

	        $table->string('section_service_title')->nullable();
	        $table->text('section_service_description')->nullable();

	        $table->string('section_certificates_title')->nullable();
	        $table->text('section_certificates_description')->nullable();
	        $table->text('section_certificates_link')->nullable();
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
        Schema::dropIfExists('abouts');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactDirectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_directs', function (Blueprint $table) {
            $table->id();
            $table->string('sub_title_direction')->nullable();
            $table->text('direction')->nullable();
            $table->string('sub_title_phone')->nullable();
            $table->text('personal_phone')->nullable();
            $table->text('general_phone')->nullable();
            $table->text('email')->nullable();
            $table->string('sub_title_social')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('google')->nullable();
            $table->string('pinterst')->nullable();
            $table->string('tiktok')->nullable();
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
        Schema::dropIfExists('contact_directs');
    }
}

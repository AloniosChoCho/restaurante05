<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('header_title',200)->nullable();
            $table->text('header_description')->nullable();
            $table->string('form_title',200)->nullable();
            $table->text('form_description')->nullable();
            $table->boolean('show_form_input_name')->default(1);
            $table->boolean('show_form_input_phone')->default(1);
            $table->boolean('show_form_input_email')->default(1);
            $table->boolean('show_form_input_guest')->default(1);
            $table->boolean('show_form_input_date')->default(1);
            $table->boolean('show_form_input_time')->default(1);
            $table->string('contact_phone',15)->nullable();
            $table->boolean('is_active')->default(1);
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
        Schema::dropIfExists('reservations');
    }
}

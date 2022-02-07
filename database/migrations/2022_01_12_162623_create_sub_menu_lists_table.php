<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubMenuListsTable extends Migration
{

  public function up()
  {
    Schema::create('sub_menu_lists', function (Blueprint $table) {
      $table->id();
      $table->bigInteger('id_menu_list');
      $table->string('name', 255);
      $table->string('alert_message', 50)->nullable();
      $table->text('description');
      $table->decimal('price', 7, 2);
      $table->boolean('is_active')->default(1);
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('sub_menu_lists');
  }
}

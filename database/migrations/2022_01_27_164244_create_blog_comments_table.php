<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogCommentsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('blog_comments', function (Blueprint $table) {
      $table->id();
      $table->string('name',120);
      $table->string('phone',15);
      $table->string('email',60);
      $table->boolean('gender')->comment('0 => Femenino, 1 => Masculino');
      $table->text('comment');
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
    Schema::dropIfExists('blog_comments');
  }
}

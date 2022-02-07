<?php

use App\Blog;
use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
  public function run() {
    $blog = new Blog();
    $blog->title_blog = 'BLOG INDIVIDUAL';
    $blog->description_blog	 = 'Restaurar la autenticidad de los alimentos desde la base es la misión que nos impulsa. La restauración es la realización de un sueño.';
    $blog->link = 'www.google.com';
    $blog->save();
  }
}

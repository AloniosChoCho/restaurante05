<?php

use App\SubBlog;
use Illuminate\Database\Seeder;

class SubBlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // SubBlog::truncate();

        $SubBlog = new SubBlog();
        $SubBlog->date = '23 de octubre de 2016';
        $SubBlog->title = 'LAS LIMONADAS MINERALES MÁS ANTIGUAS' ;
        $SubBlog->name ='por John Parkinson en Blog, Psta';
        $SubBlog->description ='Lorem ipsum dolor sit amet, ea pri erroribus abhorreant.' ;
        $SubBlog->save();
    }
}

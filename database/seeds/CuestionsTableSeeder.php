<?php

use App\Cuestions;
use Illuminate\Database\Seeder;

class CuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $cuestions = new Cuestions();
      $cuestions->title='Cuestions';
      $cuestions->description='Cuestions';
      $cuestions->save();
    }
}

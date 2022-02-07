<?php

use App\BlogComment;
use Illuminate\Database\Seeder;

class BlogComentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $Coment = new BlogComment();
      $Coment->name = 'John Parkinson';
      $Coment->phone = '963587423';
      $Coment->email = 'Jhonpark@gmail.com';
      $Coment->gender = true;
      $Coment->comment = 'Lorem ipsum dolor sit amet, ea pri erroribus abhorreant. Voluptua honestatis scripserit mei te, in mei mentitum eloquentiam, et exerci homero vim. Nam ad amet tota. Nam rebum congue meliore cu. Theophrastus signiferumque mel ex, in phaedrum singulis has.';
      $Coment->save();
    }
}

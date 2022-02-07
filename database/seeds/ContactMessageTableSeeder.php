<?php

use App\ContactMessage;
use Illuminate\Database\Seeder;

class ContactMessageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $message = new ContactMessage();
      $message->name= 'Alonios';
      $message->email= 'uwueweowoiwi@gmail.com';
      $message->phone= '937854697';
      $message->message= 'diamantes';
      $message->save();
    }
}

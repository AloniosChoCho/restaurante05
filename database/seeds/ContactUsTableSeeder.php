<?php

use App\ContactUs;
use Illuminate\Database\Seeder;

class ContactUsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $contact = new ContactUs();
      $contact->title = "CONTACTE CON";
      $contact->description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fermentum massa vel enim feugiat gravida.";
      $contact->save();
    }
}

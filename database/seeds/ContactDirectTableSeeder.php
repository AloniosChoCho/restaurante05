<?php

use App\ContactDirect;
use Illuminate\Database\Seeder;

class ContactDirectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $subContact = new ContactDirect();
      $subContact->sub_title_direction= 'DETALLES DE LA DIRECCIÓN';
      $subContact->direction= '1234 Whimsy Lane Stamp City NY 8878 United States Chalfont, PA 18814';
      $subContact->sub_title_phone= 'CONTACTO DIRECTO';
      $subContact->personal_phone= '(+001) 888 88 8888 - (+001) 888 88 8888';
      $subContact->general_phone= '(+001) 888 88 8888';
      $subContact->email= 'reception@youremail.com';
      $subContact->sub_title_social= 'REDES SOCIALES';
      $subContact->facebook= 'https://es-la.facebook.com/';
      $subContact->twitter= 'https://twitter.com/?lang=es';
      $subContact->google= 'https://www.google.com.mx/';
      $subContact->pinterst= 'https://www.pinterest.com/';
      $subContact->tiktok= 'https://www.tiktok.com/es/';
      $subContact->save();
    }
}

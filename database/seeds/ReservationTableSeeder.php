<?php

use App\Reservation;
use Illuminate\Database\Seeder;

class ReservationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $reservation = new Reservation;
      $reservation->header_title = 'RESERVA';
      $reservation->header_description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fermentum massa vel enim feugiat gravida.';
      $reservation->form_title = 'SEPARE SU VISITA';
      $reservation->form_description = 'Numerosos comentaristas también se han referido a la excéntrica costumbre del supuesto dueño del restaurante de hacer propaganda para conseguir clientes fuera de su establecimiento, vestido de forma aristocrática y blandiendo una espada';
      $reservation->contact_phone = '+51 951557314';
      $reservation->save();
    }
}

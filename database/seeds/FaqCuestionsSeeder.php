<?php

use App\FaqCuestions;
use Illuminate\Database\Seeder;

class FaqCuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faq = new FaqCuestions();
        $faq->questions='¿Porque decidieron abrir una pagina web?';
        $faq->answers='Porque estamos innovando';
        $faq->save();
    }
}

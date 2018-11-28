<?php

use App\Models\Branch;
use Illuminate\Database\Seeder;

class BrachTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $branch1 = new Branch();
        $branch1->name 			= "MACHOS";
        $branch1->description 	= "Somos una barbería profesional con el fin de complacer a nuestros clientes y cumplir cada una de sus expectativas. Nos gustan los retos, retanos y pon a prueba nuestras habilidades con tus más locas ideas de estilo.";
        $branch1->image 	= "branch1.jpg";
        $branch1->address 	= "Lopez Portillo frente al chedrahui de la region 100";
        $branch1->cp 		= "77513";
        $branch1->paypal 	= "machos@gmail.com";
        $branch1->schedule  = "9:00  - 20:00";
        $branch1->brand_id 	= 1;
        $branch1->save();

    }
}


 // $table->string('name');
 //            $table->longText('description');
 //            $table->string('image');
 //            $table->string('address');
 //            $table->string('cp');
 //            $table->string('paypal');
                                            
 //            $table->string('schedule');//horario/ format 24hrs 3:00-19:00
 //            $table->integer('brand_id')->unsigned();
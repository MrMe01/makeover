<?php

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	$brand1 = new Brand();
    	$brand1->name 			= "MACHOS";
    	$brand1->slogan 		= "Hasta el más rudo merece ser consentido";
    	$brand1->description 	= "Somos una barbería profesional con el fin de complacer a nuestros clientes y cumplir cada una de sus expectativas ";
    	$brand1->image 			= "brand1.jpg";
    	$brand1->type 			= 1;
    	$brand1->user_id 		= 2;
        $brand1->save();







    }
}


// $table->string('name');
//             $table->string('slogan');
// $table->longText('description');
//             $table->string('image');
//             $table->integer('type');//Lo traigo de las categories, puede tener varios
//             $table->string('email');
//             $table->string('paypal');
//             $table->integer('user_id')->unsigned();
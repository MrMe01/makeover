<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Role;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	
        	$role_user = Role::where('name','User')->first();
        	$role_admin = Role::where('name','Admin')->first();
        	$role_author = Role::where('name','Author')->first();
        	//1
        	$user = new User();
        	$user->name       		= "Andres Romero";
        	$user->email 			= "cliente@gmail.com";
        	$user->password   		= "secret";
        	$user->address 			= "Region 99 Mza 9 Lte 9 Entre calle 8 y 6 sobre la 133";
        	$user->image 			= "user1.png";
        	$user->cp 				= "77536";
        	$user->cel 				= "529988417622";
        	$user->addressdetails 	= "Casa blanca con patio de puras flores";
        	$user->type 			= "User";
        	$user->save();
        	$user->roles()->attach($role_user);

            //2
        	$admin = new User();
        	$admin->name       		= "Jose Ramirez";
        	$admin->email 			= "admin@gmail.com";
        	$admin->password   		= "secret";
        	$admin->address 		= "Region 95 Mza 9 Lte 9 Entre calle 5 y 6 sobre la 135";
        	$admin->image 			= "user1.png";
        	$admin->cp 				= "77537";
        	$admin->cel 			= "529988417623";
        	$admin->addressdetails 	= "Casa con rejas negras";
        	$admin->type 			= "Admin";
        	$admin->save();
        	$admin->roles()->attach($role_admin);

        	/**
        	 * EMPLEADOS 
        	 * @var User
        	 */
            //3
        	$author1 = new User();
        	$author1->name       		= "Katherine Felix";
        	$author1->email 			= "empleado1@gmail.com";
        	$author1->password   		= "secret";
        	$author1->address 			= "Privadas Turquesa";
        	$author1->image 			= "user2.jpg";
        	$author1->cp 				= "77537";
        	$author1->cel 				= "529988417626";
        	$author1->addressdetails 	= "Casa rosa";
        	$author1->type 				= "Author";
        	$author1->save();
        	$author1->roles()->attach($role_author);

            //4
        	$author2 = new User();
        	$author2->name       		= "Angel Baez";
        	$author2->email 			= "empleado2@gmail.com";
        	$author2->password   		= "secret";
        	$author2->address 			= "Playa del Carmen casa en la playa";
        	$author2->image 			= "user3.jpg";
        	$author2->cp 				= "77537";
        	$author2->cel 				= "529988417626";
        	$author2->addressdetails 	= "Junto a la playa";
        	$author2->type 				= "Author";
        	$author2->save();
        	$author2->roles()->attach($role_author);

            //5
        	$author3 = new User();
        	$author3->name       		= "Daniel Lozano";
        	$author3->email 			= "empleado3@gmail.com";	
        	$author3->password   		= "secret";
        	$author3->address 			= "Playa del Carmen casa en la playa";
        	$author3->image 			= "user4.jpg";
        	$author3->cp 				= "77537";
        	$author3->cel 				= "529988417626";
        	$author3->addressdetails 	= "Junto a la playa";
        	$author3->type 				= "Author";
        	$author3->save();
        	$author3->roles()->attach($role_author);



    }
}




// $table->string('name');
//             $table->string('email')->unique();
//             $table->string('password');
//             $table->string('address');
//             $table->string('image')->nullable();
//             $table->string('cp');
//             $table->string('cel');
//             $table->string('addressdetails')->nullable();
//             $table->string('type');//user, admin, employee//user: ver bucar comprar etc, admin emplo: brand and branches: employee: schedule
            
//             $table->rememberToken();
//             $table->timestamp('email_verified_at')->nullable();
//             $table->timestamps();
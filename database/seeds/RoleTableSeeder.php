<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = new Role();
        $role_user->name = 'User';
        $role_user->description = 'Eres un cliente y puedes comprar cualquier servicio disponible y personalizarlo a tu gusto';
        $role_user->save();


        $role_author = new Role();
        $role_author->name = 'Author';
        $role_author->description = 'Eres un empleado, ponte a trabajar';
        $role_author->save();

        $role_admin = new Role();
        $role_admin->name = 'Admin';
        $role_admin->description = 'Administra tus negocios';
        $role_admin->save();


    }
}

<?php

use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	
    	$empleado1 = new Employee();
    	$empleado1->type 		= 'Employee';
    	$empleado1->tohome 		= 1;
    	$empleado1->user_id 	= 3;
    	$empleado1->branch_id 	= 1;
        $empleado1->save();
    	$empleado1->services()->attach(1);
    	$empleado1->services()->attach(2);
    	$empleado1->services()->attach(3);
    	$empleado1->services()->attach(4);
    	$empleado1->services()->attach(5);
        $empleado1->services()->attach(6);
        $empleado1->services()->attach(7);
        $empleado1->services()->attach(8);
        $empleado1->services()->attach(9);
        $empleado1->services()->attach(10);


    	$empleado2 = new Employee();
    	$empleado2->type 		= 'Employee';
    	$empleado2->tohome 		= 1;
    	$empleado2->user_id 	= 4;
    	$empleado2->branch_id 	= 1;
        $empleado2->save();
    	$empleado2->services()->attach(1);
        $empleado2->services()->attach(2);
        $empleado2->services()->attach(3);
        $empleado2->services()->attach(4);
        $empleado2->services()->attach(5);
        $empleado2->services()->attach(6);
        $empleado2->services()->attach(7);
        $empleado2->services()->attach(8);
        $empleado2->services()->attach(9);
        $empleado2->services()->attach(10);



    	$empleado3 = new Employee();
    	$empleado3->type 		= 'Employee';
    	$empleado3->tohome 		= 1;
    	$empleado3->user_id 		= 5;
    	$empleado3->branch_id 	= 1;
        $empleado3->save();
    	$empleado3->services()->attach(1);
        $empleado3->services()->attach(2);
        $empleado3->services()->attach(3);
        $empleado3->services()->attach(4);
        $empleado3->services()->attach(5);
        $empleado3->services()->attach(6);
        $empleado3->services()->attach(7);
        $empleado3->services()->attach(8);
        $empleado3->services()->attach(9);
        $empleado3->services()->attach(10);



    }
}



// $table->string('type')->default('Employee');//admin/employee
//             $table->tinyInteger('tohome')->default(0);


//             $table->integer('user_id')->unsigned();
//             $table->integer('branch_id')->unsigned();
//             $table->timestamps();

//             $table->foreign('branch_id')->references('id')->on('branches');
//             $table->foreign('user_id')->references('id')->on('users');
//             
//             
//                Illuminate\Database\QueryException  : SQLSTATE[42S22]: Column not found: 1054 Unknown column 'employee_id' in 'field list' (SQL: insert into `employee_service` (`employee_id`, `service_id`) values (1, 1))
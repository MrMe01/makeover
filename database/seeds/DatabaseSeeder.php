<?php
use App\User;
use App\Models\Branch;
use App\Models\BranchComment;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Employee;
use App\Models\EmployeeComment;
use App\Models\Freedate;
use App\Models\Freehour;
use App\Models\Reservation;
use App\Models\Service;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        User::truncate();
        Brand::truncate();
        Branch::truncate();
        Category::truncate();
        Service::truncate();
        Employee::truncate();
        Freedate::truncate();
        Freehour::truncate();
        Reservation::truncate();
        BranchComment::truncate();
        EmployeeComment::truncate();



        DB::table('branch_employee')->truncate();
        DB::table('branch_service')->truncate();
        DB::table('employee_service')->truncate();
        DB::table('workdays')->truncate();


    }
}

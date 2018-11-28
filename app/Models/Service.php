<?php

namespace App\Models;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
     public function Employees()
    {
    	return $this->belongsToMany(Employee::class,'employee_service');
    }

    
}

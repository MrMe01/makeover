<?php

use App\Models\Employee;
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    public function employee()
    {
    	return $this->hasMany(Employee::class);
    }
}

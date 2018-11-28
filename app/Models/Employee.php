<?php

use App\Models\Service;
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function services()
    {
    	return $this->belongsToMany(Service::class);
    }
}

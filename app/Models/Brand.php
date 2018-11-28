<?php

namespace App\Models;

use App\Models\Branch;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    
    public function branch()
    {
    	return $this->hasMany(Branch::class);
    }

}

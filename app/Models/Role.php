<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    

	public function users()
	{
		return $this->belongsToMany('App\User','user_id','role_id','user_role');
	}

}

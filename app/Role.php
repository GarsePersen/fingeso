<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users(){
    	return $this->belongsToMany(User::class,'users_roles','users_id','roles_id');
    }
}

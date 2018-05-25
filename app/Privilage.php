<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Privilage extends Model
{
	 protected $fillable = [
        'role_id',
        'student_id',
        // add all other fields
    ];
    protected $table='user_role';

}

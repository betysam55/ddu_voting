<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;
class Candidates extends Model
{

	use Rateable;
    protected $table='candidates';
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;

class Vote extends Model
{
    use Rateable;
     protected $table='ratings';
}

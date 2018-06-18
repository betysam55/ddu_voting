<?php

namespace App;
use willvincent\Rateable\Rateable;
use Illuminate\Database\Eloquent\Model;

class PresidentVote extends Model
{
    use Rateable;
     protected $table='p_ratings';
}

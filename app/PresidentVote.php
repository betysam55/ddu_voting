<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PresidentVote extends Model
{
    use Rateable;
     protected $table='p_ratings';
}

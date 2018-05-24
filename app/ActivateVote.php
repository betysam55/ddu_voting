<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivateVote extends Model
{
   protected $fillable = [
        'type',
        'status',
        'startdate',
        'enddate',
        // add all other fields
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'votestatus';
}

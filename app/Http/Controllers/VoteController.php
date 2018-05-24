<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ActivateVote;

class VoteController extends Controller
{
	public  function index(){
        
       $data=ActivateVote::all();
            return view('admin.vote',['vote' => $data]);
       

    }
    public  function activate(Request $request)
    { 
         $data=ActivateVote::all();
        $this->validate(request(),[
            'type'=>'required|string|max:255',
            'status'=>'required|string|max:255',
            'startdate'=>'required|string|max:255',
            'enddate'=>'required|string|max:255',
            ]);
                  
    	$vote= new ActivateVote();
    	$vote->type= $request['type'];
        $vote->status= $request['status'];
        $vote->startdate= $request['startdate'];
        $vote->enddate= $request['enddate'];
    	// add other fields
        
    	$vote->save();

          
		return view('admin.vote',['vote' => $data]);


    }
    public function view(){
         $data=ActivateVote::all();
            return view('inc.activevotes',['vote' => $data]);
       
    }
}

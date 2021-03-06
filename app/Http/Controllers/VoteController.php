<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ActivateVote;
use Carbon;

class VoteController extends Controller
{
	public  function index(){
        $data=ActivateVote::latest()->first();
         if ($data!=null) {
             return view('admin.vote',['vote' => $data]);
         } 
       else{
            session()->flash('message', 'No data available');
         
             return view('admin.vote',['vote' => $data]);

           }

    }
    public  function display(){
        $data=ActivateVote::latest()->first();
         if ($data!=null) {
             return view('inc.activevotes',['vote' => $data]);
         } 
       else{
            session()->flash('message', 'No data available');
         
             return view('inc.activevotes',['vote' => $data]);

           }

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

         $data=ActivateVote::latest()->first();
         if ($data!=null) {
             return view('inc.activevotes',['vote' => $data]);
         } 
       else{
            session()->flash('message', 'No data available');
         
             return view('inc.activevotes',['vote' => $data]);

           }
    }
    public function delete1()
    {
        $data=ActivateVote::latest()->first();
           $mytime = Carbon\Carbon::now();
            
            
           if ($data!=null) {
             $end=$data->enddate;
           $today=$mytime->toDateString();
           if ($end==$today) {
                $data->status='disabled';
                $data->save();
                
           }
           }
           else{
            session()->flash('message', 'No data available');
         
             return view('inc.activevotes',['vote' => $data]);

           }


    }
    public function destroy(request $vote)
       {  
          $data=ActivateVote::find($vote)->get();
           dd($data);
           // $data->delete();
           // session()->flash('message','successfully deleted');
           // return redirect()->back();
       }
}

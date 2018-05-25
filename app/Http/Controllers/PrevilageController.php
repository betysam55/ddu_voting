<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Privilage;
use App\User;
use DB;
use App\Candidates;
use Illuminate\Http\RedirectResponse;
class PrevilageController extends Controller
{
	public function previlage(){
		$data=User::all();
            return view('admin.previlage', ['users' => $data]);
        
    }
    public function admin (Request $request,$id){
    	
    	$user=User::find($request->id);
    	$prev= new Privilage();
    	$prev->role_id=1;
    	$prev->student_id=$user->student_id;
    	$prev->save();
    	$data=DB::update('update users set role = "1" where student_id = ?',[$user->student_id]);  
    	      
      return redirect()->back()->with(['users' => $user]);
    }public function user (Request $request,$id){
    	
    	$user=User::find($request->id);
    	$prev= new Privilage();
    	$prev->role_id=0;
    	$prev->student_id=$user->student_id;
    	$prev->save();
    	$data=DB::update('update users set role = "0" where student_id = ?',[$user->student_id]);
         
      return redirect()->back()->with(['users' => $user]);
    }public function candidate (Request $request,$id){
    	
    	$user=User::find($request->id);
    	$prev= new Privilage();
    	$prev->role_id=2;
    	$prev->student_id=$user->student_id;
    	$prev->save();
        $data=DB::update('update users set role = "2" where student_id = ?',[$user->student_id]);
      	$candidate=new Candidates();
        $candidate->student_id=$user->student_id;
        $candidate->fname=$user->fname;
        $candidate->lname=$user->lname;
        $candidate->gender=$user->gender;
        $candidate->department=$user->department;
        $candidate->batch=$user->batch;
        $candidate->save();
      return redirect()->back()->with(['users' => $user]);
    }
}

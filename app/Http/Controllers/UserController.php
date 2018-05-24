<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\User;
class UserController extends Controller
{
     public function index(){
     	$data = DB::table('users')->where('Status', '=', 'New')->get();
     	
   		return view('admin.add_user',['users' => $data]);
   }
    public function previlage(){
		$data=User::all();
        // dd($data);
            return view('admin.previlage', ['users' => $data]);
        
    }
    public function representativevote($id){
      $data['data']=DB::table('users')->find($id);
        $data1 = DB::table('users')->where('department', '=',$data['data']->department )->get();
     
      return view('user.representativevote', ['users' => $data1]);
    }
    
}


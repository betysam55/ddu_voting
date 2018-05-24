<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Validator;
use Response;
use Illuminate\Support\Facedes\input; 
class PostController extends Controller
{
   public function index(){
   		$post=Post::all();

   		return view('admin.post',['posts' => $post]);
   }
  public function addpost(Request $req){
  	$rules=array(
  		'title' =>'required',
  		'body'=>'required',
  		 );
  	$validator=Validator::make(input::all(),$rules);
  	if($validator->false){
  		return response::json(array('errors' =>$validator->getMessageBag()->toarray()));
  	}
  	else{
  		$post=new Post;
  		$post->title=$req->title;
  		$post->body=$req->body;
  		$post->save();
  		return response()->json($post);
  	}
    
  }public function userview(){
      $post=Post::all();

      return view('user.usernews',['posts' => $post]);
   }
}

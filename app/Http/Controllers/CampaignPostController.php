<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CampaignPost;
use Validator;
use Response;
use Illuminate\Support\Facedes\input; 
use App\http\Requests;

class CampaignPostController extends Controller
{
   public function index()
      {
          //1
        //  $posts = Post::all();
            //$posts = Post::orderBy('id', 'desc')->get();
            $posts = CampaignPost::orderBy('id', 'desc')->paginate(3);
          return view('candidates/posts.index', ['posts' => $posts]);
    }
   public function create()
      {
          //2
          return view('candidates/posts.create');
    }
   public function store(Request $request)
      {
         //3
        // echo $request->title;
        $this->validate($request,[
            'title' => 'required|min:3',
            'body' =>  'required|min:10'
        ]);
        CampaignPost::create([
            'title' => $request->title,
            'body' =>  $request->body,
        ]);
       // return 'Blen';
       return redirect(route('campaignposts.index'));
      }
    public function show(CampaignPost $post)
      {
        //4
        return view('candidates/posts.show', ['post' => $post]);
      }
    public function edit(CampaignPost $post)
      {
          //5
          return view('candidates/posts.edit', compact('post'));
      } 
    public function update(Request $request, CampaignPost $post)
       {
         //6
         $post->title = $request->title;
         $post->body = $request->body;
         $post->save();
         session()->flash('message', 'Your post have been updated successfully');
         return redirect()->back();
       }
    public function destroy(CampaignPost $post)
       {
           //7
           $post->delete();
           return redirect(route('campaignposts.index'));
       }
       public function userview(){
      $post=CampaignPost::all();

      return view('user.usernews',['posts' => $post]);
   }
}

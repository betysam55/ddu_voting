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
            $cpost = CampaignPost::orderBy('id', 'desc')->paginate(3);
          return view('candidates/canposts.index', ['cposts' => $cpost]);
    }
   public function create()
      {
          //2
          return view('candidates/canposts.create');
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
       return redirect(route('canposts.index'));
      }
    public function show(CampaignPost $canpost)
      {
        //4
        return view('candidates/canposts.show', ['canpost' => $canpost]);
      }
    public function edit(CampaignPost $canpost)
      {
          //5
          return view('candidates/canposts.edit', compact('canpost'));
      } 
    public function update(Request $request, CampaignPost $canpost)
       {
         //6
         $canpost->title = $request->title;
         $canpost->body = $request->body;
         $canpost->save();
         session()->flash('message', 'Your post have been updated successfully');
         return redirect()->back();
       }
    public function destroy(CampaignPost $canpost)
       {
           //7
           $canpost->delete();
           return redirect(route('canposts.index'));
       }
       public function userview(){
      $post=CampaignPost::all();

      return view('user.usernews',['posts' => $post]);
   }
}

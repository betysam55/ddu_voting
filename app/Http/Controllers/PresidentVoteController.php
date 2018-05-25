<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use auth;
use DB;
use App\Vote;
use App\Candidates;
use Illuminate\Database\Query\Builder;
use Illuminate\Database\Eloquent\Collection;
class PresidentVoteController extends Controller
{



      /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {

        $this->middleware('auth');

    }


    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        return view('home');

    }


    public function posts()

    {
        $posts=Candidates::all();
          
        return view('candidates.candidatevote',compact('posts'));

    }


    public function show($id)

    {

        $post = Candidates::find($id);

        return view('candidates.candidatesview',compact('post'));

    }

    public function postPost(Request $request)

    {

        request()->validate(['rate' => 'required']);

        $post = Candidates::find($request->id);

        $rating = new \willvincent\Rateable\Rating;

        $rating->rating = $request->rate;
        
        $rating->user_id = auth()->user()->id;
        // dd($rating->user_id);

        $post->ratings()->save($rating);

       
        return redirect()->route("pposts"); 
            }
        

    }
     



<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class RepresentativeVoteController extends Controller
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

        $posts = User::all();

        return view('user.representativevote',compact('posts'));

    }


    public function show($id)

    {

        $post = User::find($id);

        return view('user.vote',compact('post'));

    }


    public function postPost(Request $request)

    {

        request()->validate(['rate' => 'required']);

        $post = User::find($request->id);


        $rating = new \willvincent\Rateable\Rating;

        $rating->rating = $request->rate;

        $rating->user_id = auth()->user()->id;


        $post->ratings()->save($rating);

        
        return redirect()->route("posts");

    }

}

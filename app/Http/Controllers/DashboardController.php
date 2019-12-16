<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
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
        // Get the logining user id
        $user_id = auth()->user()->id;
        // Get the user that has this id
        $user = User::find($user_id);
        // Get all posts that written by this user
        $posts = $user->posts;
        return view('user.dashboard')->with('posts', $posts);
    }
}

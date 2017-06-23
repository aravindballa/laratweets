<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;

use Illuminate\Support\Facades\Redis;

class HomeController extends Controller
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
        $tweets = Tweet::orderBy('created_at', 'desc')->get();
        return view('home', ['tweets' => $tweets]);
    }

    public function store(Request $request)
    {
        $request->user()->tweets()->create([
            'text' => $request->text,
            'stars' => 0,
        ]);

        Redis::publish('tweets-channel', json_encode([
            'text' => $request->text, 
            'user' => $request->user()->name,
            ]));

        return redirect('/home');
    }


}

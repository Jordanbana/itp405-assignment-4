<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TweetController extends Controller
{
    public function index(){
       $tweets = DB::table('tweets')
           ->select('tweet', 'id')
           ->OrderBy('id')
           ->get();

       return view('home', [
           'tweets' => $tweets
       ]);
   }

}

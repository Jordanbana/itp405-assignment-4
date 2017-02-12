<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;


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

     public function store(Request $request){
           $validator = Validator::make($request->all(), [
               'tweet' => 'required',
           ]);

           if ($validator->passes()) {
               DB::table('tweets')->insert([
                   'tweet' => request('tweet'),
               ]);

               return redirect('/')
                   ->with('successStatus', 'Song created successfully!');
           } else {
               return redirect('/')->withErrors($validator);
           }
       }

}

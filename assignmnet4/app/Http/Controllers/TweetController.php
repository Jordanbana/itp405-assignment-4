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
           ->OrderBy('id' , 'DESC')
           ->get();

       return view('home', [
           'tweets' => $tweets
       ]);
   }

     public function store(Request $request){
           $validator = Validator::make($request->all(), [
               'tweet' => 'required|max:140',
           ]);

           if ($validator->passes()) {
               DB::table('tweets')->insert([
                   'tweet' => request('tweet'),
               ]);

               return redirect('/')
                   ->with('successStatus', 'Tweet created successfully!');
           } else {
               return redirect('/')->withErrors($validator);
           }
       }

    public function view($tweetsID){

          // DB::table('tweets')
          //     ->where('id', '=', $tweetsID)
          //     ->delete();

          return redirect("/tweet");

    }

}

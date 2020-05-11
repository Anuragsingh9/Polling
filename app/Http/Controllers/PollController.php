<?php

namespace App\Http\Controllers;
use App\Poll;
use DB;
use Illuminate\Http\Request;

class PollController extends Controller
{
    public function store(Request $request){
        $this->validate($request,[
            'date' =>' required',
             ]);   

             $insert= new Poll([
                'date' => $request->get('date')
                
            ]);
                
            $insert->save();
            // return view('form')->back()->with('successs', 'Profile updated!');
            // return redirect()->back()->with('successs', 'You have  successfully given your vote! Thank You');
            return redirect()->route('showvote');
            // return redirect()->action('HomeController@showresult');
    }

    public function showresult(){
        $count = DB::table('polls')->count();
        echo "Total Votes==>".$count."<br>";

        $wordlist = Poll::where('date', '=', '30')->get();
        $wordCount1 = $wordlist->count();
        echo "Total Votes for 30 days ==>".$wordCount1."<br>";
        

        $wordlist = Poll::where('date', '=', '60')->get();
        $wordCount2 = $wordlist->count();
        echo "Total Votes for 60 days ==>". $wordCount2."<br>";

        return view('auth.votes' , compact(['count', 'wordCount1', 'wordCount2']));
        

    }

    

}

<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voter;
use Auth;
class VotersController extends Controller
{
        public function store(Request $request)
    {
        // Validate
        // $request->validate([
        //     'title' => 'required|min:3',
        //     'description' => 'required',
        // ]);   
        $task = Voter::create(['name' => $request->name,'email' => $request->email,'password'=> $request->password]);
        return redirect()->back()->with('successs', 'Profile Added Successfully!');
    }



    public function doLogin(Request $request)
{
    // $this->validate($request, [
    //     'email'   => 'required|email',
    //     'password'  => 'required|alphaNum|min:3'
    //    ]);
  
       $user_data = array(
        'email'  => $request->get('email'),
        'password' => $request->get('password')
       );
    //    dd( $user_data );
       if(Auth::attempt($user_data))
       {
        return view('register');
       }
    //    else{
    //        return("not matched");
    //    }

}
    public function showLogin(){
        return View('loginn');
    }
}


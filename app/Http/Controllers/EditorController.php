<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class EditorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('editor',['except'=>'candidate']);

    }


    public function index(){
        return view('auth.editor');
    }
}

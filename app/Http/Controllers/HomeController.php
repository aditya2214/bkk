<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->role == 0){
    
            return view('welcome');
        }else{
            $count_jobs = \App\Jobs::count();
            $count_user = \App\User::count();
    
            return view('component_backend.content.dashboard',compact('count_jobs','count_user'));

        }
   
    }
}

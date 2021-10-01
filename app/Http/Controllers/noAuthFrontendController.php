<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class noAuthFrontendController extends Controller
{
    public function index(){
        $jobs = DB::table('jobs')
            ->join('requirements','jobs.id','requirements.id_jobs')
            ->select('jobs.*','requirements.*')
            ->get();

            // return $jobs;

        return view('welcome',compact('jobs'));
    }
}

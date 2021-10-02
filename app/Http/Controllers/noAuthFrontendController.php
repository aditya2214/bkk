<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB,Auth;
class noAuthFrontendController extends Controller
{
    public function index(){
        if (Auth::user() != null) {
            # code...
            $jobs = DB::table('jobs')
            ->join('requirements','jobs.id','requirements.id_jobs')
            ->select('jobs.*','requirements.*')
            ->orderBy('jobs.id','DESC')
            ->get();

            $profil_user = \App\ProfilUsers::where('id_user',Auth::user()->id)->first();




            return view('content_frontend.loker',compact('jobs','profil_user'));
        }else {
            # code...
            $jobs = DB::table('jobs')
            ->join('requirements','jobs.id','requirements.id_jobs')
            ->select('jobs.*','requirements.*')
            ->orderBy('jobs.id','DESC')
            ->get();




            return view('content_frontend.loker',compact('jobs'));
        }

    }

    public function pageDetailJob($id){
        // return $id;
        if (Auth::user() != null) {
            # code...
            $profil_user = \App\ProfilUsers::where('id_user',Auth::user()->id)->first();
    
            $jobs_first = DB::table('jobs')
            ->join('requirements','jobs.id','requirements.id_jobs')
            ->select('jobs.*','requirements.*')
            ->where('id_jobs',$id)
            ->first();
    
            return view('content_frontend.page_detail_job',compact('profil_user','jobs_first'));
        }else {
            # code...
  
            $jobs_first = DB::table('jobs')
            ->join('requirements','jobs.id','requirements.id_jobs')
            ->select('jobs.*','requirements.*')
            ->where('id_jobs',$id)
            ->first();
    
            return view('content_frontend.page_detail_job',compact('jobs_first'));
        }
    }
    
}

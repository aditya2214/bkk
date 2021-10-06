<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB,Auth;
use Alert;
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

            $user_c = \App\User::count();
            $jobs_c = \App\Jobs::count();
            $m_active = DB::table('profil_users')
                ->Where('active_period','>',date('Y-m-d'))
                ->count();
                
            $m_nonaktif = DB::table('profil_users')
            ->Where('active_period','<',date('Y-m-d'))
            ->count();
            return view('content_frontend.loker',compact('jobs','profil_user','m_nonaktif','m_active','jobs_c','user_c'));
        }else {
            # code...
            $jobs = DB::table('jobs')
            ->join('requirements','jobs.id','requirements.id_jobs')
            ->select('jobs.*','requirements.*')
            ->orderBy('jobs.id','DESC')
            ->get();

            $user_c = \App\User::count();
            $jobs_c = \App\Jobs::count();
            $m_active = DB::table('profil_users')
                ->Where('active_period','>',date('Y-m-d'))
                ->count();
                
            $m_nonaktif = DB::table('profil_users')
            ->Where('active_period','<',date('Y-m-d'))
            ->count();

            return view('content_frontend.loker',compact('jobs','m_nonaktif','m_active','jobs_c','user_c'));
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

    public function media_bkk(){

        Alert::error('error', ' Halaman Belum tersedia');
        return redirect('/');
    }

    public function chat(){

        Alert::error('error', ' Halaman Belum tersedia');
        return redirect('/');
    }


    
}

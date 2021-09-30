<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use DB;
class frontendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function page_post_a_jobs(){

        return view('component_backend.content.post_a_jobs');
    }

    public function index_a_jobs(){
        $jobs = \App\Jobs::all();
        return view('component_backend.content.index_a_jobs',compact('jobs'));
    }

    public function store_jobs(Request $request){
        // Store Jobs
        $store_jobs = new \App\Jobs;
        $store_jobs->title_jobs = $request->title_jobs;
        $store_jobs->job_desc = $request->job_desc;
        $store_jobs->test_date = $request->test_date;
        $store_jobs->status = 0;
        $store_jobs->save();

        // store requirements
        $store_requirements = new \App\Requirements;
        $store_requirements->id_jobs = $store_jobs->id;
        $store_requirements->gender = $request->gender;
        $store_requirements->education = $request->education;
        $store_requirements->age = $request->age;
        $store_requirements->other_requirements = $request->other_requirements;
        $store_requirements->notes = $request->notes;
        $store_requirements->save();

        Alert::success(' Success ', ' Succesfully Added');
        return redirect('index_a_jobs');
    }

    public function edit_jobs($id){
        $edit_jobs = DB::table('jobs')
            ->join('requirements','jobs.id','=','requirements.id_jobs')
            ->select('jobs.*','requirements.*')
            ->where('id_jobs',$id)
            ->get();

        
            return view('component_backend.content.edit_jobs',compact('edit_jobs'));
    }

    public function update_jobs(Request $request,$id){
        // return $id;
        $update_jobs = DB::table('jobs')->where('id',$id)->update([
            'title_jobs' => $request->title_jobs,
            'job_desc' => $request->job_desc,
            'test_date' => $request->test_date
        ]);

        $update_requirements = DB::table('requirements')->where('id_jobs',$id)->update([
            'gender' => $request->gender,
            'education' => $request->education,
            'age' => $request->age,
            'other_requirements' => $request->other_requirements,
            'notes' => $request->notes,
        ]);

        Alert::success(' Success ', ' Succesfully Updated');
        return redirect('index_a_jobs');
    }

    public function page_dashboard_sortcut(){
        $count_jobs = \App\Jobs::count();
        $count_user = \App\User::count();

        return view('component_backend.content.dashboard',compact('count_jobs','count_user'));
    }

    public function page_users(){
        $users = DB::table('users')
            ->leftjoin('profil_users','users.id','=','profil_users.id_user')
            ->select('users.*','profil_users.*')
            ->get();

            // return $users;
        return view('component_backend.content.users',compact('users'));
    }
}
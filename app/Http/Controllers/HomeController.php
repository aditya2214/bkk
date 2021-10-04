<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB,Alert,Auth;
use DataTables;

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
            $jobs = DB::table('jobs')
            ->join('requirements','jobs.id','requirements.id_jobs')
            ->select('jobs.*','requirements.*')
            ->orderBy('jobs.id','DESC')
            ->get();

            if (Auth::user() != null) {
                # code...
                $profil_user = \App\ProfilUsers::where('id_user',Auth::user()->id)->first();
            }


            return view('content_frontend.loker',compact('jobs','profil_user'));
        }else{
            $count_jobs = \App\Jobs::count();
            $count_user = \App\User::count();
    
            return view('component_backend.content.dashboard',compact('count_jobs','count_user'));

        }
   
    }

    public function page_post_a_jobs(){

        return view('component_backend.content.post_a_jobs');
    }

    public function index_a_jobs(){
        $jobs = \App\Jobs::all();
        return view('component_backend.content.index_a_jobs',compact('jobs'));
    }

    public function store_jobs(Request $request){

        // return $request->all();
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

    public function json_users(){
        $j_users = \App\ProfilUsers::with('relation_user2')->get();

        // return $j_users;

        return Datatables::of($j_users)
        ->editColumn('name', function ($j_users) {
            return $j_users->relation_user2->name;
        })
        ->editColumn('email', function ($j_users) {
            return $j_users->relation_user2->email;
        })
        ->editColumn('role', function ($j_users) {
            if($j_users->relation_user2->role == 0 ){
                return "<a href='jadikan_admin/".$j_users->id_user." ' class='badge badge-primary'>User</a>";
            }elseif($j_users->relation_user2->role > 0){
                return "<a href='jadikan_user/".$j_users->id_user." ' class='badge badge-success'>Admin</a>";
            }
        })
        ->escapeColumns([])
        ->make(true);



    }

    public function page_users(){

        return view('component_backend.content.users');
    }

        
    public function delete_jobs($id){
        $delete_jobs = \App\Jobs::where('id',$id)->delete();
        $delete_requirements = \App\Requirements::where('id_jobs',$id)->delete();

        Alert::success(' Success ', ' Succesfully Deleted');
        return redirect('index_a_jobs');
    }

    public function view_peserta($id){
        $view_peserta = \App\Relation_Jobs_Users::where('id_jobs',$id)->get();

        $db_jobs = \App\Jobs::where('id',$id)->first();

        // return $db_jobs;
        return view('component_backend.content.view_peserta',compact('view_peserta','db_jobs'));
    }

    public function pengumuman_test(){

        return view('component_backend.content.pengumuman_test');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use DB;
use Auth;
class frontendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function page_profil_user(){
        
        $profil_user = \App\ProfilUsers::where('id_user',Auth::user()->id)->first();

        return view('content_frontend.page_profil_user',compact('profil_user'));
    }

    public function page_edit_profil(){
        $profil_user = \App\ProfilUsers::where('id_user',Auth::user()->id)->first();


        return view('content_frontend.edit_form_profil',compact('profil_user'));
    }

    public function page_add_profil(){
        $profil_user = \App\ProfilUsers::where('id_user',Auth::user()->id)->first();


        return view('content_frontend.add_form_profil',compact('profil_user'));

    }

    public function storeProfilUser(Request $request){
        // return $request->all();
        //  $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
    
        $storeProfilUser = new \App\ProfilUsers;
        $storeProfilUser->id_user = Auth::user()->id;
        $storeProfilUser->images = $request->images->store('images','public');
        $storeProfilUser->full_name = $request->full_name;
        $storeProfilUser->place = $request->place;
        $storeProfilUser->date_of_birth = $request->date_of_birth;
        $storeProfilUser->gender = $request->gender;
        $storeProfilUser->last_education = $request->last_education;
        $storeProfilUser->number_phone = $request->number_phone;
        $storeProfilUser->address = $request->address;
        $storeProfilUser->save();

        Alert::success(' Success ', ' Succesfully Added');
        return redirect('/page_profil_user');

    }

    public function editProfilUser(Request $request, $id){

        $storeProfilUser = \App\ProfilUsers::findOrFail($id);
        $storeProfilUser->id_user = Auth::user()->id;
        if ($request->images == null) {
            # code...
        }else{
            $storeProfilUser->images = $request->images->store('images','public');
        }
        $storeProfilUser->full_name = $request->full_name;
        $storeProfilUser->place = $request->place;
        $storeProfilUser->date_of_birth = $request->date_of_birth;
        $storeProfilUser->gender = $request->gender;
        $storeProfilUser->last_education = $request->last_education;
        $storeProfilUser->number_phone = $request->number_phone;
        $storeProfilUser->address = $request->address;
        $storeProfilUser->update();

        Alert::success(' Success ', ' Succesfully Updted');
        return redirect('/page_profil_user');
    }

    public function sidebar(){
        $profil_user = \App\ProfilUsers::where('id_user',Auth::user()->id)->first();

        return view('sidebar',compact('profil_user'));
    }


    public function daftar($id){

        // return $id;
        $cek = Auth::user()->with('profil_user_r')->get();
        foreach ($cek as $key => $c) {
            # code...
            if ($c->profil_user_r == null) {
                # code...
                Alert::error(' Gagal ', ' Lengkapi Data Anda Terlebih Dulu!!!');
                return redirect('/page_add_profil');
            }
        }

        if (Auth::user()->role > 0) {
            Alert::error(' Gagal ', ' Anda Menggunakan Akun Admin!!!');

            Auth::logout();
            return redirect('/');
        }
        
        $store_relation_jobs_users = new \App\Relation_Jobs_Users;
        $store_relation_jobs_users->id_user = Auth::user()->id;
        $store_relation_jobs_users->id_jobs = $id;
        $store_relation_jobs_users->save();

        Alert::success(' Success ', ' Berhasil Mendaftar');
        return redirect('/');
    }
  

   
}

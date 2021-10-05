@extends('layouts.app_frontend')

@section('content')


@include('content_frontend.cara_daftar')
<div class="section mt-2">
    <div class="card bg-primary">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
        </div>
    </div>
</div>
<div class="section full mt-3 mb-3">
    <div class="carousel-multiple owl-carousel owl-theme">

        <div class="item">
            <div class="card">
                <img src="{{ asset ('cv6.png') }}" class="card-img-top" alt="image">
                <div class="card-body pt-2">
                    <h4 class="mb-0">CV6</h4>
                    <p class="text-warning"></i>&nbsp; Rp 20.000</p>

                    <button class="btn btn-primary btn-sm form-control">Pesan</button>
                    
                </div>

            </div>
        </div>

        <div class="item">
            <div class="card">
                <img src="{{ asset ('cv1.jfif') }}" class="card-img-top" alt="image">
                <div class="card-body pt-2">
                    <h4 class="mb-0">CV1</h4>
                    <p class="text-warning"></i>&nbsp; Rp 20.000</p>
                    
                    <button class="btn btn-primary btn-sm form-control">Pesan</button>

                </div>

            </div>
        </div>

        <div class="item">
            <div class="card">
                <img src="{{ asset ('cv2.jfif') }}" class="card-img-top" alt="image">
                <div class="card-body pt-2">
                    <h4 class="mb-0">CV1</h4>
                    <p class="text-warning"></i>&nbsp; Rp 20.000</p>
                    
                    <button class="btn btn-primary btn-sm form-control">Pesan</button>

                </div>

            </div>
        </div>

        <div class="item">
            <div class="card">
                <img src="{{ asset ('cv3.jfif') }}" class="card-img-top" alt="image">
                <div class="card-body pt-2">
                    <h4 class="mb-0">CV1</h4>
                    <p class="text-warning"></i>&nbsp; Rp 20.000</p>
                    
                    <button class="btn btn-primary btn-sm form-control">Pesan</button>

                </div>

            </div>
        </div>

        <div class="item">
            <div class="card">
                <img src="{{ asset ('cv4.jfif') }}" class="card-img-top" alt="image">
                <div class="card-body pt-2">
                    <h4 class="mb-0">CV1</h4>
                    <p class="text-warning"></i>&nbsp; Rp 20.000</p>
                    
                </div>

                <button class="btn btn-primary btn-sm form-control">Pesan</button>

            </div>
        </div>

        <div class="item">
            <div class="card">
                <img src="{{ asset ('cv5.jfif') }}" class="card-img-top" alt="image">
                <div class="card-body pt-2">
                    <h4 class="mb-0">CV1</h4>
                    <p class="text-warning"></i>&nbsp; Rp 20.000</p>
                    
                    <button class="btn btn-primary btn-sm form-control">Pesan</button>

                </div>

            </div>
        </div>
    </div>
</div>

<div class="section mt-2 ">
    <div class="card bg-primary">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
        </div>
    </div>
</div>

<hr>
&nbsp;&nbsp;&nbsp;&nbsp;<b>LOWONGAN TERSEDIA</b>
<hr>

@foreach($jobs as $job)
<div class="section mt-3 mb-3">
    <div class="card">
        <div class="form-row">
            <div class="col-4">
                <img src="{{ asset ('download.png') }}" class="card-img-top" alt="image">
            </div>
            <div class="col-8">
                <div class="card-body">
                    <h6 class="card-subtitle">{{$job->title_jobs}}</h6>
                    <!-- <p>Tanggal Tes : {{date('D, d M Y',strtotime($job->test_date))}}</p> -->
                    <p class="card-text">
                        {{$job->education}}
                    </p>
                    <a href="{{ url ('pageDetailJob/'.$job->id_jobs) }}" class="btn btn-primary btn-sm">
                    <i class="fas fa-eye"></i>&nbsp;
                        Detail
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

<div class="section mt-2">
    <div class="card bg-primary">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
        </div>
    </div>
</div>
<?php
 $user_c = \App\User::count();
 $jobs_c = \App\Jobs::count();
 $m_active = DB::table('profil_users')
     ->whereRaw('active_period > '.date('Y-m-d'))
     ->count();
     
 $m_nonaktif = DB::table('profil_users')
 ->whereRaw('active_period < '.date('Y-m-d'))
 ->count();
?>

<div class="section mt-2">
    <div class="row">
        <div class="col-6">
            <div class="card product-card">
                <div class="card-body">
                    <h2 class="title">Total Pengguna</h2>
                    <h1 class="text-center">{{$user_c}}</h1>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card product-card">
                <div class="card-body">
                <div class="card-body">
                    <h2 class="title">Lowongan</h2>
                    <h1 class="text-center">{{$jobs_c}}</h1>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section mt-2">
    <div class="row">
        <div class="col-6">
            <div class="card product-card">
                <div class="card-body">
                <div class="card-body">
                    <h2 class="title">Member Aktif</h2>
                    <h1 class="text-center">{{$m_active}}</h1>
                </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card product-card">
                <div class="card-body">
                <div class="card-body">
                    <h2 class="title">Member Tidak Aktif</h2>
                    <h1 class="text-center">{{$m_nonaktif}}</h1>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
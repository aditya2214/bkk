@extends('layouts.app_frontend')

@section('content')
<!-- App Capsule -->
    
    <div class="section full mt-2">
        <div class="section-title"><b>{{$jobs_first->title_jobs}}</b></div>
        <div class="wide-block pt-2 pb-2">
            <p><b>Tempat Dan Tanggal</b></p>
            <small>{!!$jobs_first->job_desc!!} <br>
               {!!$jobs_first->other_requirements!!}<br>
               {!!$jobs_first->notes!!}<br>
            </psmall >
            <div>
                <a href="{{ url ('daftar/'.$jobs_first->id_jobs) }}" class="btn btn-primary form-control" >Daftar</a>
            </div>
        </div>

    </div>

    <div class="section full mt-2 mb-3">
        <div class="section-title mb-1">Buat CV</div>

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
                    <button class="btn btn-primary btn-sm form-control">Pesan</button>

                </div>

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


@endsection
<!-- * App Capsule -->

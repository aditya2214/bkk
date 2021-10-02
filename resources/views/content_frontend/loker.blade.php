@extends('layouts.app_frontend')

@section('content')
<div class="section full mt-3 mb-3">
    <div class="carousel-multiple owl-carousel owl-theme">

        <div class="item">
            <div class="card">
                <img src="{{ asset ('cv6.png') }}" class="card-img-top" alt="image">
                <div class="card-body pt-2">
                    <h4 class="mb-0">CV6</h4>
                    <p class="text-warning"></i>&nbsp; Rp 20.000</p>
                    
                </div>

            </div>
        </div>

        <div class="item">
            <div class="card">
                <img src="{{ asset ('cv1.jfif') }}" class="card-img-top" alt="image">
                <div class="card-body pt-2">
                    <h4 class="mb-0">CV1</h4>
                    <p class="text-warning"></i>&nbsp; Rp 20.000</p>
                    
                </div>

            </div>
        </div>

        <div class="item">
            <div class="card">
                <img src="{{ asset ('cv2.jfif') }}" class="card-img-top" alt="image">
                <div class="card-body pt-2">
                    <h4 class="mb-0">CV1</h4>
                    <p class="text-warning"></i>&nbsp; Rp 20.000</p>
                    
                </div>

            </div>
        </div>

        <div class="item">
            <div class="card">
                <img src="{{ asset ('cv3.jfif') }}" class="card-img-top" alt="image">
                <div class="card-body pt-2">
                    <h4 class="mb-0">CV1</h4>
                    <p class="text-warning"></i>&nbsp; Rp 20.000</p>
                    
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

            </div>
        </div>

        <div class="item">
            <div class="card">
                <img src="{{ asset ('cv5.jfif') }}" class="card-img-top" alt="image">
                <div class="card-body pt-2">
                    <h4 class="mb-0">CV1</h4>
                    <p class="text-warning"></i>&nbsp; Rp 20.000</p>
                    
                </div>

            </div>
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

@endsection
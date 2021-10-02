@extends('layouts.app')

@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Job Vacancy</h1>
    <a onClick="window.location.reload();" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-reload fa-sm text-white-50"></i> Resfresh</a>
</div>

<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    @foreach($jobs as $job)
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                           {{$job->title_jobs}}</div>
                            <div class="btn-group">
                                <a href="{{url ('edit_jobs/'.$job->id) }}" class=" btn-sm btn btn-warning form-control">Edit</a herf="edit_jobs">
                                <a href="{{url ('delete_jobs/'.$job->id) }}" class=" btn-sm btn btn-danger form-control">Hapus</a herf="edit_jobs">
                            </div>
                            <div class="float-right">
                                <a href="{{url ('view_peserta/'.$job->id) }}" class=" btn-sm btn btn-secondary">Lihat Peserta</a>
                            </div>
                    </div>
                    <!-- <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>


@endsection
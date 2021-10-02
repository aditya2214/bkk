@extends('layouts.app')

@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Peserta</h1>
        <a onClick="window.location.reload();" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-refresh fa-sm text-white-50"></i> Resfresh</a>
    </div>

    @foreach($view_peserta as $vp)
    {{$vp->relation_user->full_name}}
    @endforeach
</div>
<!-- /.container-fluid -->
@endsection
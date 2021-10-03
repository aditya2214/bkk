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

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>Nama Peserta</th>
                        <th>Tempat Tanggal Lahir</th>
                        <th>Nomer Wa</th>
                        <th>Email</th>
                        <th>Pendidikan</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($view_peserta as $vp)
                    <tr>
                        <td>{{$vp->relation_user->full_name}}</td>
                        <td>{{$vp->relation_user->place}} ,{{date('d M Y',strtotime($vp->relation_user->date_of_birth))}}</td>
                        <td>{{$vp->relation_user->number_phone}}</td>
                        <td>{{$vp->relation_user->relation_user2->email}}</td>
                        <td>{{$vp->relation_user->last_education}}</td>
                        <td>{!!$vp->relation_user->address!!}</td>



                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
</div>
<!-- /.container-fluid -->
@endsection
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
            <div class="card">
                <div class="card-body " style="overflow-x:auto;">
                <table class="table table-bordered" id="table_view_peserta">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>No</th>
                            <th>Nama _Peserta</th>
                            <th>Tempat_Tanggal_Lahir</th>
                            <th>Nomer_Wa</th>
                            <th>Email</th>
                            <th>Pendidikan</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($view_peserta as $key=>$vp)
                        <tr>
                            <td>{{$key+1}}</td>
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
    </div>
    
</div>
<!-- /.container-fluid -->
@endsection

@section('scripts')
<script type="text/javascript">


  $(document).ready(function() {
    $('#table_view_peserta').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>

@endsection
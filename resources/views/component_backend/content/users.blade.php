@extends('layouts.app')

@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Users</h1>
        <a onClick="window.location.reload();" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-refresh fa-sm text-white-50"></i> Resfresh</a>
    </div>

    <div class="row" >
        <div class="col-md-12">
            <div class="card">
                <div class="card-body"  style="overflow-x:auto;">
                    <table class="table table-bordered" id="tabel-user">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Place</th>
                                <th>Date Of Birth</th>
                                <th>Gender</th>
                                <th>Last Education</th>
                                <th>Number Phone</th>
                                <th>Address</th>
                                <th>
                                <i class="fas fa-user-cog"></i>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user-> name }}</td>
                                <td>{{$user->email }}</td>
                                <td>{{$user->place }}</td>
                                <td>{{$user->date_of_birth }}</td>
                                <td>{{$user->gender }}</td>
                                <td>{{$user->last_education }}</td>
                                <td>{{$user-> number_phone}}</td>
                                <td>{!!$user->address !!}</td>
                                <td>
                                    @if($user->role == 0)
                                    <a class="badge badge-primary btn">User</a>
                                    @else                                    
                                    <a class="badge badge-success btn">Admin</a>
                                    @endif
                                </td>
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
<script>
    $(document).ready(function(){
        $('#tabel-user').DataTable();
    });
</script>
@endsection
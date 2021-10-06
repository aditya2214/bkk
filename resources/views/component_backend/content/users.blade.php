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
    <hr><hr>
    <p><b>Change Role</b></p>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body bg-primary text-white" >
                    <form action="{{ url ('update_role') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Email</label><br>
                                <select name="id_users" id="select2_users" class="form-control" >
                                    @foreach($j_users as $j_u)
                                        <option value="{{$j_u->id}}">{{$j_u->email}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="">Role</label>
                                <select name="id_role" id="" class="form-control">
                                    <option value="0">Users</option>
                                    <option value="1">Admin</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-success btn-sm">Proccess</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <hr><hr>
    <p><b>Renew Member</b></p>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body bg-primary text-white">
                    <form action="{{ url ('update_member') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Email</label><br>
                                <select name="id_users_2"class="form-control"  id="select2_users2" >
                                    @foreach($j_users as $j_u)
                                        <option value="{{$j_u->id}}">{{$j_u->email}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="">New Actived Member</label>
                                    <input type="date" name="actived" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-success btn-sm">Proccess</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <style>
        .dataTables_filter input {
            background-color : white;
        }
    </style>
    <p><b>Table Users</b></p>
    <div class="row" >
        <div class="col-md-12">
            <div class="card">
                <div class="card-body bg-primary"  style="overflow-x:auto;">
                    <table class="table table-bordered" id="tabel-user">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>Active_Period</th>
                                <th>Full_Name</th>
                                <th>Email</th>
                                <th>Place</th>
                                <th>Date_Of_Birth</th>
                                <th>Gender</th>
                                <th>Last_Education</th>
                                <th>Number_Phone</th>
                                <th>Address</th>
                                <th>
                                <i class="fas fa-user-cog"></i>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="Modal_Confirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-body">
            Jadikan User Ini Admin?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
    </div>
    
</div>
<!-- /.container-fluid -->
@endsection

@section('scripts')
<script>
 $(function() {
    var table = $('#tabel-user').DataTable({
        
        processing: true,
        serverSide: true,
        ajax: "{{url ('/json_users') }}",
        columns: [
            { data: 'active_period', name: 'active_period' },
            { data: 'full_name', name: 'full_name' },
            { data: 'email', name: 'email' },
            { data: 'place', name: 'place' },
            { data: 'date_of_birth', name: 'date_of_birth' },
            { data: 'gender', name: 'gender' },
            { data: 'last_education', name: 'last_education' },
            { data: 'number_phone', name: 'number_phone' },
            { data: 'address', name: 'address' },
            { data: 'role', name: 'role' },

        ]
    });
});

// In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
    $('#select2_users').select2();
});

$(document).ready(function() {
    $('#select2_users2').select2();
});

</script>
@endsection
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
</script>
@endsection
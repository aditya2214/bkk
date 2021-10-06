@extends('layouts.app')

@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Post A Jobs</h1>
    <a onClick="window.location.reload();" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-refresh fa-sm text-white-50"></i> Resfresh</a>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body bg-primary text-white">
                <div class="float-right">
                    <a href="{{ url ('index_a_jobs') }}" class="btn btn-success">Lihat Lowongan</a>
                </div>
                <form action="{{ url ('store_jobs') }}" methode="post">
                    @csrf
                    <p><b>Header Jobs</b></p>
                    <div class="form-group">
                        <label for="">Title Jobs</label>
                        <input type="text" name="title_jobs" id="title_jobs" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Tempat Dan Tanggal</label>
                        <textarea class="form-control" name="job_desc" id="job_desc" rows="3"></textarea>
                       
                        <script>
                            CKEDITOR.replace( 'job_desc' );
                        </script>
                    </div>
                    <!-- <div class="form-group">
                        <label for="">Test Date</label>
                        <input type="date" name="test_date" id="test_date" class="form-control" required>
                    </div>
                    <br>
                    <p><b>Requirements</b></p>
                    <div class="form-group">
                        <label for="">Gender</label>
                        <input type="text" name="gender" id="gender" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Education</label>
                        <input type="text" name="education" id="education" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Age</label>
                        <input type="number" name="age" id="age" class="form-control" required>
                    </div> -->
                    <div class="form-group">
                        <label for="">Other Recuirement</label>
                        <textarea class="form-control" name="other_requirement" id="other_requiremets" rows="3"></textarea>
                        <script>
                            CKEDITOR.replace( 'other_requiremets' );
                        </script>
                    </div>
                    <div class="form-group">
                        <label for="">Notes</label>
                        <textarea class="form-control" name="notes" id="notes" rows="3"></textarea>
                        <script>
                            CKEDITOR.replace( 'notes' );
                        </script>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success form-control">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit A Jobs</h1>
    <a onClick="window.location.reload();" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-refresh fa-sm text-white-50"></i> Resfresh</a>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="float-right">
                    <a href="{{ url ('index_a_jobs') }}" class="btn btn-success">Lihat Lowongan</a>
                </div>
                @foreach($edit_jobs as $edit)
                <form action="{{ url ('update_jobs/'.$edit->id_jobs) }}" methode="post">
                    @csrf
                    <p><b>Jobs</b></p>
                    <div class="form-group">
                        <label for="">Title Jobs</label>
                        <input value="{{$edit->title_jobs}}" type="text" name="title_jobs" id="title_jobs" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Tempat Dan Tanggal</label>
                        <textarea class="form-control" required name="job_desc" id="job_desc" rows="3">{{$edit->job_desc }}</textarea>
                        <script>
                            CKEDITOR.replace( 'job_desc' );
                        </script>
                    </div>
                    <!-- <div class="form-group">
                        <label for="">Test Date</label>
                        <input value="{{$edit->test_date }}" type="date" name="test_date" id="test_date" class="form-control" required>
                    </div>
                    <br>
                    <p><b>Requirements</b></p>
                    <div class="form-group">
                        <label for="">Gender</label>
                        <input value="{{$edit->gender}}" type="text" name="gender" id="gender" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Education</label>
                        <input value="{{$edit->education}}" type="text" name="education" id="education" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Age</label>
                        <input value="{{$edit->age }}" type="number" name="age" id="age" class="form-control" required>
                    </div> -->
                    <div class="form-group">
                        <label for="">Other Recuirement</label>
                        <textarea class="form-control" name="other_requirements" id="other_requirements" rows="3">{{$edit->other_requirements }}</textarea>
                        <script>
                            CKEDITOR.replace( 'other_requirements' );
                        </script>
                    </div>
                    <div class="form-group">
                        <label for="">Notes</label>
                        <textarea class="form-control" name="notes" id="notes" rows="3">{{$edit->notes }}</textarea>
                        <script>
                            CKEDITOR.replace( 'notes' );
                        </script>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success form-control">Update</button>
                    </div>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
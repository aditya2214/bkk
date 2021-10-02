@extends('layouts.app_frontend')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div>
                    <img src="{{ asset ('storage/'.$profil_user->images) }}" class="img-thumbnail" style="width:100px; border-radius:50%;" alt="">
                    </div>
                    <form action="{{ url ('editProfilUser/'.$profil_user->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Ubah Profile</label>
                            <input type="file" name="images" id="images">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input value="{{$profil_user->full_name }}" type="text" name="full_name" id="full_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input value="{{$profil_user->place }}" type="text" name="place" id="place" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input value="{{$profil_user->date_of_birth }}" type="date" name="date_of_birth" id="date_of_birth" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <input value="{{$profil_user-> gender}}" type="text" name="gender" id="gender" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Pendidikan Terakhir</label>
                            <input value="{{$profil_user->last_education }}" type="text" name="last_education" id="last_education" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Nomer Wa</label>
                            <input value="{{$profil_user-> number_phone}}" type="number" name="number_phone" id="number_phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <textarea class="form-control" name="address" id="address" rows="3">{{$profil_user->address}}</textarea>
                       
                            <script>
                                CKEDITOR.replace( 'address' );
                            </script>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success form-control">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
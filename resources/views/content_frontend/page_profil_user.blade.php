@extends('layouts.app_frontend')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if($profil_user == null)
                    <div class="form-group">
                        <label for=""><i class="text-danger">Data Profil Anda Kosong</i></label><br>
                        <a href="{{ url ('page_add_profil') }}" class="btn btn-success form-control">Tambah Data</a href="{{ url ('page_add_profil') }}">
                    </div>
                    @else
                    <div class="">
                        <div class="form-group">
                            <label for="">Foto Profile</label><br>
                            <img src="{{ asset ('storage/'.$profil_user->images) }}" class="img-thumbnail" style="width:100px; border-radius:50%;" alt="">
                        </div>
                        <div class="form-group">
                            <label for=""><b>Nama Lengkap</b></label><br>
                            <small ><i>{{$profil_user->full_name}}</i></small>
                        </div>
                        <div class="form-group">
                            <label for=""><b>Tempat Lahir</b></label><br>
                            <small ><i>{{$profil_user->place}}</i></small>
                        </div>
                        <div class="form-group">
                            <label for=""><b>Tanggal Lahir</b></label><br>
                            <small ><i>{{$profil_user->	date_of_birth	}}</i></small>
                        </div>
                        <div class="form-group">
                            <label for=""><b>Jenis Kelamin</b></label><br>
                            <small ><i>{{$profil_user->	gender}}</i></small>
                        </div>
                        <div class="form-group">
                            <label for=""><b>Pendidikan Terakhir</b></label><br>
                            <small ><i>{{$profil_user->	last_education}}</i></small>
                        </div>
                        <div class="form-group">
                            <label for=""><b>Nomer Wa</b></label><br>
                            <small ><i>{{$profil_user->	number_phone	}}</i></small>
                        </div>
                        <div class="form-group">
                            <label for=""><b>Alamat</b></label><br>
                            <small ><i>{!!$profil_user->	address	!!}</i></small>
                        </div>
                        <div class="form-group">
                            <a  href="{{ url ('page_edit_profil') }}" class="btn btn-warning form-control">Edit Data</a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
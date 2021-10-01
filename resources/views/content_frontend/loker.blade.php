@extends('welcome')

@section('content')
<div class="section mt-3 mb-3">
    <div class="card">
        <img src="{{ asset ('frontend/assets/img/sample/photo/wide4.jpg') }}" class="card-img-top" alt="image">
        <div class="card-body">
            <h6 class="card-subtitle">Discover</h6>
            <h5 class="card-title">Components</h5>
            <p class="card-text">
                Reusable components designed for the mobile interface and ready to use.
            </p>
            <a href="app-components.html" class="btn btn-primary">
                <ion-icon name="cube-outline"></ion-icon>
                Preview
            </a>
        </div>
    </div>
</div>

<div class="section mt-3 mb-3">
    <div class="card">
        <img src="{{ asset ('frontend/assets/img/sample/photo/wide2.jpg') }}" class="card-img-top" alt="image">
        <div class="card-body">
            <h6 class="card-subtitle">Discover</h6>
            <h5 class="card-title">Pages</h5>
            <p class="card-text">
                Mobilekit comes with basic pages you may need and use in your projects easily.
            </p>
            <a href="app-pages.html" class="btn btn-primary">
                <ion-icon name="layers-outline"></ion-icon>
                Preview
            </a>
        </div>
    </div>
</div>
@endsection
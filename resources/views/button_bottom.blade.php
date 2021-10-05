<div class="appBottomMenu">
    <a href="{{ url ('/') }}" class="item active">
        <div class="col">
        <i class="fas fa-home fa-3x"></i>
        <br>
        <b>Home</b>
    </div>
    </a>
    <a href="{{ url ('media_bkk') }}" class="item">
        <div class="col">
        <i class="fas fa-photo-video fa-3x"></i>
        <br>
        <b>Media BKK</b>
        </div>
    </a>
    <a href="{{ url ('chat') }}" class="item">
        <div class="col">
        <i class="far fa-comments fa-3x"></i>
            <span class="badge badge-danger">5</span>
            <br>
            <b>Chat</b>
        </div>
    </a>
    @if(Auth::user() != null)
    <a href="{{ url ('page_profil_user') }}" class="item">
        <div class="col">
        <i class="fas fa-user-tag fa-3x"></i>
        <br>
        <b>{{Auth::user()->email}}</b>
    </div>
    </a>
    @else
    <a href="{{ url ('login') }}" class="item">
        <div class="col">
        <i class="fas fa-user-tag fa-3x"></i>
        <br>
        <b>Login</b>
    </div>
    </a>
    @endif
    <a href="#" class="item" data-toggle="modal" data-target="#sidebarPanel">
        <div class="col">
        <i class="fas fa-cog fa-3x"></i>
        <br>
        <b>Pengaturan</b>
        </div>
    </a>
</div>


<div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">

                <!-- profile box -->
                @if(Auth::user() == null)
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><b>LOGIN</b></h1>
                                    </div>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input placeholder="Email" id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input placeholder="Password" id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            {{ __('Login') }}
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{ url ('register') }}">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="profileBox">
                    <div class="image-wrapper">
                        <img src="{{ asset ('storage/'.$profil_user->images) }}" alt="image" class="imaged rounded">
                    </div>
                    <div class="in">
                        <strong>{{Auth::user()->name}}</strong>
                        <div class="text-muted">
                            <ion-icon name="location"></ion-icon>
                            {{Auth::user()->email}}
                        </div>
                    </div>
                    <a href="javascript:;" class="close-sidebar-button" data-dismiss="modal">
                        <ion-icon name="close"></ion-icon>
                    </a>
                </div>
                <!-- * profile box -->

                <ul class="listview flush transparent no-line image-listview mt-2">
                    <li>
                        <a href="{{ url ('page_profil_user') }}" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="home-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Profile
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="app-components.html" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="cube-outline"></ion-icon>
                            </div>
                            <div class="in">
                               Notification
                            </div>
                            <span class="badge badge-danger">5</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url ('home') }}" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="layers-outline"></ion-icon>
                            </div>
                            <div class="in">
                                <div>Lowongan Pekerjaan</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="page-chat.html" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                            </div>
                            <div class="in">
                                <div>Buat CV</div>
                                
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url ('logout') }}" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                            </div>
                            <div class="in">
                                <div>Logout</div>
                                
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="moon-outline"></ion-icon>
                            </div>
                            <div class="in">
                                <div>Dark Mode</div>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input dark-mode-switch"
                                        id="darkmodesidebar">
                                    <label class="custom-control-label" for="darkmodesidebar"></label>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

                <!-- <div class="listview-title mt-2 mb-1">
                    <span>Friends</span>
                </div>
                <ul class="listview image-listview flush transparent no-line">
                    <li>
                        <a href="page-chat.html" class="item">
                            <img src="{{ asset ('frontend/assets/img/sample/avatar/avatar7.jpg') }}" alt="image" class="image">
                            <div class="in">
                                <div>Sophie Asveld</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="page-chat.html" class="item">
                            <img src="{{ asset ('frontend/assets/img/sample/avatar/avatar3.jpg') }}" alt="image" class="image">
                            <div class="in">
                                <div>Sebastian Bennett</div>
                                <span class="badge badge-danger">6</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="page-chat.html" class="item">
                            <img src="{{ asset ('frontend/assets/img/sample/avatar/avatar10.jpg') }}" alt="image" class="image">
                            <div class="in">
                                <div>Beth Murphy</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="page-chat.html" class="item">
                            <img src="{{ asset ('frontend/assets/img/sample/avatar/avatar2.jpg') }}" alt="image" class="image">
                            <div class="in">
                                <div>Amelia Cabal</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="page-chat.html" class="item">
                            <img src="{{ asset ('frontend/assets/img/sample/avatar/avatar5.jpg') }}" alt="image" class="image">
                            <div class="in">
                                <div>Henry Doe</div>
                            </div>
                        </a>
                    </li>
                </ul> -->
                @endif

            </div>

            <!-- sidebar buttons -->
            <!-- <div class="sidebar-buttons">
                <a href="javascript:;" class="button">
                    <ion-icon name="person-outline"></ion-icon>
                </a>
                <a href="javascript:;" class="button">
                    <ion-icon name="archive-outline"></ion-icon>
                </a>
                <a href="javascript:;" class="button">
                    <ion-icon name="settings-outline"></ion-icon>
                </a>
                <a href="javascript:;" class="button">
                    <ion-icon name="log-out-outline"></ion-icon>
                </a>
            </div> -->
            <!-- * sidebar buttons -->
        </div>
    </div>
</div>
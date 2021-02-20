<!-- Button trigger modal nya di navbar -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="/toko"><h4 class="modal-title" id="exampleModalLabel">Masuk</h4></a>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="mb-3">
                                <label for="email" class="col-form-label">Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="col-form-label">Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                                <a href="{{ url('/password/reset') }}">Lupa kata sandi?</a>
                                <div class="masuk">
                                    <button class="btn btn3">Masuk</button>
                                </div>
                            <p class="text-center">ATAU</p>
                            <div class="icon text-center">
                                <a href="{{ url('google') }}">
                                    <svg width="24" height="24" viewBox="0 0 256 262" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid"><path d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027" fill="#4285F4"/><path d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1" fill="#34A853"/><path d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782" fill="#FBBC05"/><path d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251" fill="#EB4335"/></svg>
                                </a>
                                &nbsp;&nbsp;&nbsp;
                                <a href="{{ url('facebook') }}">
                                    <img style="-webkit-user-select: none;margin: auto;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/240px-Facebook_f_logo_%282019%29.svg.png" class="facebook-login">
                                </a>
                                <p class="text-center mt-3">Belum punya akun? silakan Daftar <span> <a href="{{ route('register') }}"> disini</a></span></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- NAVBAR kode 1 -->
        <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light" id="toko">
            <div class="container-fluid" style="margin: 0 5%;">
                <a class="navbar-brand" href="/"><img src="/storage/img/config/{{ $web->logo }}" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav align-items-center">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item ms-3">
                                    <!-- Button trigger// modalnya di atas -->
                                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Masuk
                                    </button>
                                </li>
                            @endif
                                        
                            @if (Route::has('register'))
                                <li class="nav-item ms-3">
                                    <!-- Button trigger// modalnya di atas -->
                                    <a href="{{ route('register') }}" class="btn2">
                                        Daftar
                                    </a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item ms-3">
                                <!-- KERANJANG -->
                                <a href="/keranjang" class="notification">
                                    <i class='fa fa-shopping-cart' style='font-size:24px;'></i>
                                    <span class="badge">3</span>
                                </a>
                            </li>
                            <!-- DROPDOWN -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  {{ Auth::user()->name }} &nbsp;
                                    <span>
                                        <img class="profile" src="/storage/img/avatar/{{ Auth::user()->avatar }}" alt="">
                                    </span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @if(Auth::user()->level == "Admin")
                                        <li>
                                            <a class="dropdown-item" href="/home">Menu Admin</a>
                                        </li>
                                    @endif
                                    <li>
                                        <a class="dropdown-item" href="#">Profile</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Keluar</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    <!-- NAVBAR -->
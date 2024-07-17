<div class="container-fluid bg-white sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
                <a href="index.html" class="navbar-brand d-lg-none">
                    <h1 class="fw-bold m-0">DESA ANJUN</h1>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="{{route('index.page')}}" class="nav-item nav-link">Home</a>
                        <a href="{{route('struktur.page')}}" class="nav-item nav-link">Struktur</a>
                        <a href="{{route('layanan.page')}}" class="nav-item nav-link">Layanan</a>
                        <a href="{{route('tentang.page')}}" class="nav-item nav-link">Tentang</a>
                        <a href="{{route('contact.page')}}" class="nav-item nav-link">Contact</a>
                        @if (Route::has('login'))
                            <!-- <nav class="-mx-3 flex flex-1 justify-end"> -->
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                       class="nav-item nav-link"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="nav-item nav-link"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                           class="nav-item nav-link"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                            </div>
                        </div> 
                        <!-- -->
                    </div>
                    
                </div>
            </nav>
        </div>
    </div>
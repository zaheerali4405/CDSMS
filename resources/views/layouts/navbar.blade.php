<header class="site-navbar py-3" role="banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-11 col-xl-2">
                <h1 class="mb-0"><a href="/" class="text-white h2 mb-0 text-decoration-none ">CDSMS</a></h1>
            </div>
            <div class="col-12 col-md-10 d-none d-xl-block">
                <nav class="site-navigation position-relative text-right" role="navigation">
                    <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                        <li><a href="/">Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li><a href="{{ route('student.application_status') }}">Application Status</a></li>

                            <li><a href="{{ route('enquiries.index') }}">Enquiries</a></li>

                            <li class="has-children">
                                <a href="#" class="text-uppercase" data-toggle="dropdown" >{{ Auth::user()->name }}</a>
                                <ul class="dropdown">
                                    <li><a href="{{ route('student.update-profile') }}">Update Profile</a></li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </nav>
            </div>
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
        </div>
    </div>
</header>

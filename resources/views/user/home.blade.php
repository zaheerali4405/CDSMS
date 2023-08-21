{{--<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}
{{--    <div class="container">--}}
{{--        <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--            {{ config('app.name', 'Laravel') }}--}}
{{--        </a>--}}
{{--        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}

{{--        <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--            <!-- Left Side Of Navbar -->--}}
{{--            <ul class="navbar-nav me-auto">--}}

{{--            </ul>--}}

{{--            <!-- Right Side Of Navbar -->--}}
{{--            <ul class="navbar-nav ms-auto">--}}
{{--                <!-- Authentication Links -->--}}
{{--                @guest--}}
{{--                    @if (Route::has('login'))--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                        </li>--}}
{{--                    @endif--}}

{{--                    @if (Route::has('register'))--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                        </li>--}}
{{--                    @endif--}}
{{--                @else--}}
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                            {{ Auth::user()->name }}--}}
{{--                        </a>--}}

{{--                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">--}}
{{--                            <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                               onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                {{ __('Logout') }}--}}
{{--                            </a>--}}

{{--                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                                @csrf--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                @endguest--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}

@extends('layouts.app')

@section('content')

    @include('layouts.navbar')

    {{-- Content --}}

    <div class="site-blocks-cover overlay" style="background-image: url({{ asset('assets/images/hero_banner1.jpg') }});"
         data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                    <h1 class="text-white font-weight-light mb-5 text-uppercase font-weight-bold">Car Driving
                        School</h1>
                    <p>
                        @if($status == 'active')
                            <a href="{{ route('student.dashboard') }}" class="btn btn-primary py-3 px-5 text-white">Go to Dashboard</a></p>
                        @elseif($status == 'inactive')
                            <a href="{{ route('student.create') }}" class="btn btn-primary py-3 px-5 text-white">Get Enrolled</a></p>
                        @endif
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row align-items-center align-items-stretch overlap-section">
            <div class="col-md-4">
                <div class="feature-1 pricing h-100 text-center">
                    <div class="icon">
                        <span class="icon-local_offer"></span>
                    </div>
                    <h2 class="my-4 heading">Total Packages</h2>
                    <h3> 3

                    </h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bg-dark feature-3 pricing h-100 text-center">
                    <div class="icon">
                        <span class="icon-person"></span>
                    </div>
                    <h2 class="my-4 heading  text-center">Students Enrolled</h2>
                    <h3> 6

                    </h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-3 pricing h-100 text-center">
                    <div class="icon">
                        <span class="icon-location_city"></span>
                    </div>
                    <h2 class="my-4 heading">Campuses</h2>
                    <h3> 7

                    </h3>
                </div>
            </div>
        </div>
    </div>

    {{--<div class="site-section bg-light" id= "freight">--}}
    {{--    <div class="container">--}}
    {{--        <div class="row justify-content-center mb-5">--}}
    {{--            <div class="col-md-7 text-center border-primary">--}}
    {{--                <h2 class="font-weight-light text-primary">Your Booked freights</h2>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <div class="row align-items-stretch">--}}

    {{--            <div class="col-md-12 col-lg-12 mb-6 mb-lg-6 mb-4" style="-moz-box-shadow: 0 0 3px #ccc;-webkit-box-shadow: 0 3px 3px #ccc;box-shadow: 0 03px 3px #ccc;">--}}
    {{--                <div class="unit-4 d-flex">--}}
    {{--                    hhhhhhh--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <hr>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</div>--}}

    {{--<div class="site-section block-13">--}}
    {{--    <div class="owl-carousel nonloop-block-13">--}}
    {{--        <div>--}}
    {{--            <a href="#" class="unit-1 text-center">--}}
    {{--                <img src="images/img_1.jpg" alt="Image" class="img-fluid">--}}
    {{--                <div class="unit-1-text">--}}
    {{--                    <h3 class="unit-1-heading">Storage</h3>--}}
    {{--                    <p class="px-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos tempore ullam minus voluptate libero.</p>--}}
    {{--                </div>--}}
    {{--            </a>--}}
    {{--        </div>--}}

    {{--        <div>--}}
    {{--            <a href="#" class="unit-1 text-center">--}}
    {{--                <img src="images/img_2.jpg" alt="Image" class="img-fluid">--}}
    {{--                <div class="unit-1-text">--}}
    {{--                    <h3 class="unit-1-heading">Air Transports</h3>--}}
    {{--                    <p class="px-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos tempore ullam minus voluptate libero.</p>--}}
    {{--                </div>--}}
    {{--            </a>--}}
    {{--        </div>--}}

    {{--        <div>--}}
    {{--            <a href="#" class="unit-1 text-center">--}}
    {{--                <img src="images/img_3.jpg" alt="Image" class="img-fluid">--}}
    {{--                <div class="unit-1-text">--}}
    {{--                    <h3 class="unit-1-heading">Cargo Transports</h3>--}}
    {{--                    <p class="px-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos tempore ullam minus voluptate libero.</p>--}}
    {{--                </div>--}}
    {{--            </a>--}}
    {{--        </div>--}}

    {{--        <div>--}}
    {{--            <a href="#" class="unit-1 text-center">--}}
    {{--                <img src="images/img_4.jpg" alt="Image" class="img-fluid">--}}
    {{--                <div class="unit-1-text">--}}
    {{--                    <h3 class="unit-1-heading">Cargo Ship</h3>--}}
    {{--                    <p class="px-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos tempore ullam minus voluptate libero.</p>--}}
    {{--                </div>--}}
    {{--            </a>--}}
    {{--        </div>--}}

    {{--        <div>--}}
    {{--            <a href="#" class="unit-1 text-center">--}}
    {{--                <img src="images/img_5.jpg" alt="Image" class="img-fluid">--}}
    {{--                <div class="unit-1-text">--}}
    {{--                    <h3 class="unit-1-heading">Ware Housing</h3>--}}
    {{--                    <p class="px-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos tempore ullam minus voluptate libero.</p>--}}
    {{--                </div>--}}
    {{--            </a>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</div>--}}

    @include('layouts.footer')

@endsection


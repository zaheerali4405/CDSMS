@extends('layouts.app')

@section('content')

    @include('layouts.navbar')

    <div class="site-blocks-cover overlay" style="background-image: url({{ asset('assets/images/hero_banner1.jpg') }});"
         data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                    <h1 class="text-white font-weight-light mb-5 text-uppercase font-weight-bold">Car Driving
                        School</h1>
                    <p><a href="{{ route('login') }}" class="btn btn-primary py-3 px-5 text-white">Get Admission</a></p>
                </div>
            </div>
        </div>
    </div>

    <h3 class="bg-dark text-center text-white py-3 my-4">PACKAGES WE OFFER</h3>
    <div class="container">
        <div class="row d-flex justify-content-around">
            @foreach($packages as $package )
                <div class="col-md-5">
                    <div class="card mb-5" >
                        <div class="card-header"><strong> Package Name: </strong> {{ $package->name }}</div>
                        <div class="card-body row">
                            <div class="col-3">
                                <div> <strong>Duration: </strong> </div>
                                <div><strong>Vehicle: </strong> </div>
                                <div><strong>Fee: </strong> </div>
                            </div>
                            <div class="col-9">
                                <div>{{ $package->duration }}</div>
                                <div>{{ $package->vehicle }}</div>
                                <div>{{ $package->fee }}</div>
                            </div>
                        </div>
                        <div class="card-footer text-center"><a href="{{ route('login') }}" class="btn btn-primary">Get Admission</a></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @include('layouts.footer')

@endsection

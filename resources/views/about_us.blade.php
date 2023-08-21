@extends('layouts.app')

@section('content')
    @include('layouts.navbar')

    <div class="site-blocks-cover inner-page-cover overlay"
         style="background-image: url({{ asset('assets/images/hero_bg_1.jpg') }});" data-aos="fade"
         data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                    <h1 class="text-white font-weight-light text-uppercase font-weight-bold">About Us</h1>
                    <p class="breadcrumb-custom"><a href="/">Home</a> <span class="mx-2">&gt;</span>
                        <span>About Us</span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5 ml-auto mb-5 order-md-2" data-aos="fade">
                    <img src="{{ asset('assets/images/img_1.jpg') }}" alt="Image" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-1 text-justify" data-aos="fade">
                    <h2 class="text-primary fw-bold mb-4">Our History</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis deleniti reprehenderit animi
                        est eaque corporis! Nisi, asperiores nam amet doloribus, soluta ut reiciendis. Consequatur modi
                        rem, vero eos ipsam voluptas.</p>
                    <p class="mb-5">Error minus sint nobis dolor laborum architecto, quaerat. Voluptatum porro expedita
                        labore esse velit veniam laborum quo obcaecati similique iusto delectus quasi!</p>
                    <p>sectetur adipisicing elit. Blanditiis deleniti reprehenderit animi est eaque corporis! Nisi,
                        asperiores nam amet doloribus, soluta ut reiciendis. Consequatur modi rem, vero eos ipsam
                        voluptassectetur adipisicing elit. Blanditiis deleniti reprehenderit animi est eaque corporis!
                        Nisi, asperiores nam amet doloribus, soluta ut reiciendis. Consequatur modi rem, vero eos ipsam
                        voluptassectetur adipisicing elit. Blanditiis deleniti reprehenderit animi est eaque corporis!
                        Nisi, asperiores nam amet doloribus, soluta ut reiciendis. Consequatur modi rem, vero eos ipsam
                        voluptassectetur adipisicing elit. Blanditiis deleniti reprehenderit animi est eaque corporis!
                        Nisi, asperiores nam amet doloribus, soluta ut reiciendis. Consequatur modi rem, vero eos ipsam
                        voluptas</p>
                </div>

            </div>
        </div>
    </div>

    <div class="site-section bg-image overlay"
         style="background-image: url({{ asset('assets/images/hero_bg_4.jpg') }});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <h2 class="fw-bold text-primary" data-aos="fade">How It Works</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                    <div class="how-it-work-item">
                        <span class="number">1</span>
                        <div class="how-it-work-body">
                            <h2>Take Admission</h2>
                            <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt
                                praesentium dicta consectetur fuga neque fugit a at. Cum quod vero assumenda iusto.</p>
                            <ul class="ul-check list-unstyled white">
                                <li class="text-white">Error minus sint nobis dolor</li>
                                <li class="text-white">Voluptatum porro expedita labore esse</li>
                                <li class="text-white">Voluptas unde sit pariatur earum</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                    <div class="how-it-work-item">
                        <span class="number">2</span>
                        <div class="how-it-work-body">
                            <h2>Get Training</h2>
                            <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt
                                praesentium dicta consectetur fuga neque fugit a at. Cum quod vero assumenda iusto.</p>
                            <ul class="ul-check list-unstyled white">
                                <li class="text-white">Error minus sint nobis dolor</li>
                                <li class="text-white">Voluptatum porro expedita labore esse</li>
                                <li class="text-white">Voluptas unde sit pariatur earum</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
                    <div class="how-it-work-item">
                        <span class="number">3</span>
                        <div class="how-it-work-body">
                            <h2>Be a Professional Driver</h2>
                            <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt
                                praesentium dicta consectetur fuga neque fugit a at. Cum quod vero assumenda iusto.</p>
                            <ul class="ul-check list-unstyled white">
                                <li class="text-white">Error minus sint nobis dolor</li>
                                <li class="text-white">Voluptatum porro expedita labore esse</li>
                                <li class="text-white">Voluptas unde sit pariatur earum</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('layouts.footer')
@endsection

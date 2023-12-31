@extends('layouts.app')

@section('content')
    @include('layouts.navbar')

    <div class="site-blocks-cover inner-page-cover overlay"
         style="background-image: url({{ asset('assets/images/hero_bg_1.jpg') }});" data-aos="fade"
         data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                    <h1 class="text-white font-weight-light text-uppercase font-weight-bold">Contact Us</h1>
                    <p class="breadcrumb-custom"><a href="/" class="text-decoration-none text-white-50">Home</a> <span
                            class="mx-2">&gt;</span> <span>Contact Us</span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <form action="contact.php" class="p-5 bg-white" method="POST" enctype="multipart/form-data">
                        <div class="row form-group">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label class="text-black" for="fname">First Name</label>
                                <input type="text" id="fname" class="form-control" name="first_name">
                            </div>
                            <div class="col-md-6">
                                <label class="text-black" for="lname">Last Name</label>
                                <input type="text" id="lname" class="form-control" name="last_name">
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="email">Email</label>
                                <input type="email" id="email" class="form-control" name="email">
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="subject">Subject</label>
                                <input type="subject" id="subject" class="form-control" name="subject">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="message">Message</label>
                                <textarea id="message" cols="30" rows="4" class="form-control"
                                          placeholder="Write your notes or questions here..." name="message"></textarea>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary text-white" name="submit"> Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-5">
                    <div class="p-4 mb-3 bg-white">
                        <p class="mb-0 font-weight-bold">Address</p>
                        <p class="mb-4">{{ $info->address }}</p>

                        <p class="mb-0 font-weight-bold">Phone</p>
                        <p class="mb-4"><a href="#">{{ $info->contact }}</a></p>

                        <p class="mb-0 font-weight-bold">Email Address</p>
                        <p class="mb-0"><a href="#">{{ $info->email }}</a></p>

                    </div>

                    <div class="p-4 mb-3 bg-white">
                        <h3 class="h5 text-black mb-3">More Info</h3>
                        <p class="text-justify">Lorem ipsum dolor sit amet, ipsa consectetur? Fugiat quaerat eos qui,
                            libero neque sed nulla ctetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic
                            consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur? Fugiat quaerat eos qui,
                            libero ctetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur.
                            Distinctio nisi perferendis dolore, ipsa consectetur? Fugiat quaerat eos qui, liberoctetur
                            adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
@endsection

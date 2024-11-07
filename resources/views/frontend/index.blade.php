@extends('layouts.frontend')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" style="backdrop-filter: blur(10px)">
                    <video muted autoplay loop style="height: 600px; object-fit: cover;  width: 100%;">
                        <source src="/video/dmo.mp4" type="video/mp4" style="width: 100%">
                    </video>
                    {{-- <video muted autoplay loop style="height: 600px;  ">
                        <source src="/video/dmo.mp4" type="video/mp4">
                    </video> --}}
                </div>


            </div>

        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="/frontend/img/about.jpg" style="object-fit: cover;"
                            data-aos="fade-up">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5" data-aos="fade-down">
                    <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h6>
                        <h1 class="mb-3">Excursion to historical sites of the Republic of Karakalpakstan</h1>
                        <p>There is a lot of history in these places and you can get acquainted with the history of
                            Karakalpakstan</p>
                        <div class="row mb-4">
                            <div class="col-6">
                                <img class="img-fluid" src="/frontend/img/about-1.jpg" alt="">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="/frontend/img/about-2.jpg" alt="">
                            </div>
                        </div>
                        <a href="{{ route('what_to_see') }}" class="btn btn-primary mt-1">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Destination Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3" data-aos="fade-up">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Destination</h6>
                <h1>The best places to visit in Karakalpakstan</h1>
            </div>
            <div class="row">
                @foreach ($what_to_sees as $what_to_see)
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                        <div class="destination-item position-relative overflow-hidden mb-2">
                            <img class="img-fluid" src="/storage/{{ $what_to_see->image }}" alt="{{ $what_to_see->title }}">
                            <a class="destination-overlay text-white text-decoration-none"
                                href="{{ route('what_to_see.show', $what_to_see->id) }}">
                                <h5 class="text-white">{{ $what_to_see->title }}</h5>
                            </a>
                        </div>
                    </div>
                @endforeach

                <div class="col-12 text-center" data-aos="fade-left">
                    <a href="{{ route('what_to_see') }}" class="btn btn-primary py-md-3 px-md-5 mt-2">
                        Load More
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!-- Destination Start -->



    <!-- Packages Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3" data-aos="fade-up">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Packages</h6>
                <h1>Pefect Tour Packages</h1>
            </div>
            <div class="row">
                @foreach ($travelers as $traveler)
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                        <div class="package-item bg-white mb-2">
                            <img class="img-fluid" src="/storage/{{ $traveler->image }}" alt="{{ $traveler->title }}">
                            <div class="p-4">
                                <div class="d-flex justify-content-between mb-3">
                                    <small class="m-0"><i
                                            class="fa fa-map-marker-alt text-primary mr-2"></i>{{ $traveler->country }}</small>
                                </div>
                                <a class="h5 text-decoration-none" href="">{{ $traveler->title }}</a>
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="m-0"></h6>
                                        <h5 class="m-0">{{ $traveler->price }} uzs </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-12 text-center" data-aos="fade-left">
                    <a href="{{ route('travelers') }}" class="btn btn-primary py-md-3 px-md-5 mt-2">
                        Load More
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Packages End -->


    <!-- Registration Start -->
    <div class="container-fluid bg-registration py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Mega Offer</h6>
                        <h1 class="text-white"><span class="text-primary">30% OFF</span> For Honeymoon</h1>
                    </div>
                    <p class="text-white">Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum
                        ut sed eos,
                        ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
                        dolor</p>
                    <ul class="list-inline text-white m-0">
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Labore eos amet dolor amet diam
                        </li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Etsea et sit dolor amet ipsum</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Diam dolor diam elitripsum vero.
                        </li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-primary text-center p-4">
                            <h1 class="text-white m-0">Sign Up Now</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-white p-5">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control p-4" placeholder="Your name"
                                        required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control p-4" placeholder="Your email"
                                        required="required" />
                                </div>
                                <div class="form-group">
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected>Select a destination</option>
                                        <option value="1">destination 1</option>
                                        <option value="2">destination 1</option>
                                        <option value="3">destination 1</option>
                                    </select>
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-block py-3" type="submit">Sign Up Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->



    <!-- Testimonial Start -->
    {{-- <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonial</h6>
                <h1>What Say Our Clients</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="text-center pb-4">
                    <img class="img-fluid mx-auto" src="/frontend/img/testimonial-1.jpg"
                        style="width: 100px; height: 100px;">
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod
                            eos labore diam
                        </p>
                        <h5 class="text-truncate">Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto" src="/frontend/img/testimonial-2.jpg"
                        style="width: 100px; height: 100px;">
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod
                            eos labore diam
                        </p>
                        <h5 class="text-truncate">Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto" src="/frontend/img/testimonial-3.jpg"
                        style="width: 100px; height: 100px;">
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod
                            eos labore diam
                        </p>
                        <h5 class="text-truncate">Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto" src="/frontend/img/testimonial-4.jpg"
                        style="width: 100px; height: 100px;">
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod
                            eos labore diam
                        </p>
                        <h5 class="text-truncate">Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Our Blog</h6>
                <h1>Latest From Our Blog</h1>
            </div>
            <div class="row pb-3">
                @foreach ($posts as $post)
                    <div class="col-lg-4 col-md-6 mb-4 pb-2">
                        <div class="blog-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="/frontend/img/blog-1.jpg" alt="">
                                <div class="blog-date">
                                    <h6 class="font-weight-bold mb-n1">
                                        {{ $post->created_at->format('d') }}
                                    </h6>
                                    <small class="text-white text-uppercase">
                                        {{ $post->created_at->format('M') }}
                                    </small>
                                </div>
                            </div>
                            <div class="bg-white p-4">
                                <a class="h5 m-0 text-decoration-none" href="#">
                                    {{ $post->title }}
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection

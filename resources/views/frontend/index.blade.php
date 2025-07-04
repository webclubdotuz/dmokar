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
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">
                            {{__("About Us")}}
                        </h6>
                        <h1 class="mb-3">
                            {{__("Excursion to historical sites of the Republic of Karakalpakstan")}}
                        </h1>
                        <p>
                            {{__("There is a lot of history in these places and you can get acquainted with the history of Karakalpakstan.")}}
                        </p>
                        <div class="row mb-4">
                            <div class="col-6">
                                <img class="img-fluid" src="/frontend/img/about-1.jpg" alt="">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="/frontend/img/about-2.jpg" alt="">
                            </div>
                        </div>
                        <a href="{{ route('what_to_see') }}" class="btn btn-primary mt-1">
                            {{__("Load More")}}
                        </a>
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
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">{{__("Destination")}}</h6>
                <h1>{{__("The best places to visit in Karakalpakstan region")}}</h1>
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
                        {{__("Load More")}}
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
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">{{__("Packages")}}</h6>
                <h1>{{__("Pefect Tour Packages")}}</h1>
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
                        {{__("Load More")}}
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
                <div class="col-lg-12 mb-5 mb-lg-0 text-center">
                    <img class="img-fluid" src="/frontend/img/dmo-logo-light.png" style="height: 200px;" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->



    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">
                    {{__("Partners")}}
                </h6>
                <h1>
                    {{__("Our Partners")}}
                </h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                @foreach ($partners as $partner)
                <div class="text-center">
                    <img class="img-fluid mx-auto border" src="/storage/{{ $partner->logo }}" style="width: 200px; height: 200px;" alt="{{ $partner->name }}">
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Destination Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3" data-aos="fade-up">
                <h3 class="text-primary text-uppercase" style="letter-spacing: 5px;">{{__("Download our free tourist phrasebook")}}</h3>
                <h6>
                    {{__("Planning a trip to Karakalpakstan? We’ve prepared a brief phrasebook with useful expressions in Karakalpak, Uzbek, Russian, and English. It will help you communicate with locals and feel more confident during your journey.")}}
                </h6>
                <a href="{{ asset('phrasebook.pdf') }}" class="btn btn-primary mt-3" download>
                    <i class="fa fa-download mr-2"></i> {{__("Download the phrasebook (PDF)")}}
                </a>
            </div>
        </div>
    </div>
    <!-- Destination Start -->

    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">
                    {{__("Our Blog")}}
                </h6>
                <h1>
                    {{__("Latest From Our Blog")}}
                </h1>
            </div>
            <div class="row pb-3">
                @foreach ($posts as $post)
                    <div class="col-lg-4 col-md-6 mb-4 pb-2">
                        <div class="blog-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="/storage/{{ $post->image }}" alt="{{ $post->title }}">
                                {{-- <div class="blog-date">
                                    <h6 class="font-weight-bold mb-n1">
                                        {{ $post->created_at->format('d') }}
                                    </h6>
                                    <small class="text-white text-uppercase">
                                        {{ $post->created_at->format('M') }}
                                    </small>
                                </div> --}}
                            </div>
                            <div class="bg-white p-4">
                                <a class="h5 m-0 text-decoration-none" href="{{ route('post.show', $post->id) }}">
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

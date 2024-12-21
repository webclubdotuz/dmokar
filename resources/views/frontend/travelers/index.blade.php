@extends('layouts.frontend')



@section('content')
    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">
                    {{ $page->title }}
                </h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="/">{{ __('Home') }}</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">
                        {{ $page->title }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Packages Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="col-12">
                <div class="">
                    <h1 class="mb-3">
                        {{ $page->title }}
                    </h1>
                    <p>
                        {!! $page->content !!}
                    </p>
                </div>
            </div>
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">{{__("Packages")}}</h6>
                <h1>{{__("Pefect Tour Packages")}}</h1>
            </div>
            <div class="row">
                @foreach ($travelers as $traveler)
                    <div class="col-lg-4 col-md-6 mb-4">
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
            </div>
        </div>
    </div>
    <!-- Packages End -->
@endsection

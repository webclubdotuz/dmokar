@extends('layouts.frontend')

@section('content')
<!-- Header Start -->
<div class="container-fluid page-header">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-4 text-white text-uppercase text-center">
                {{ $page->title }}
            </h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="">{{ __('Home') }}</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">{{ $page->title }}</p>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

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
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">{{__("Destination")}}</h6>
            <h1>{{__("The best places to visit in Karakalpakstan region")}}</h1>
        </div>
        <div class="row">
            @foreach ($what_to_sees as $what_to_sees)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="destination-item position-relative overflow-hidden mb-2">
                    <img class="img-fluid" src="/storage/{{ $what_to_sees->image }}" alt="{{ $what_to_sees->title }}">
                    <a class="destination-overlay text-white text-decoration-none" href="{{ route('what_to_see.show', $what_to_sees->id) }}">
                        <h5 class="text-white">{{ $what_to_sees->title }}</h5>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection

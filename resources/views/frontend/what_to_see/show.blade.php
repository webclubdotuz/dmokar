@extends('layouts.frontend')

@section('content')
<!-- Header Start -->
<div class="container-fluid page-header">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-4 text-white text-uppercase">{{ $what_to_see->title }}</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="/">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase"><a class="text-white" href="{{ route('what_to_see') }}">What to see in Karakalpakstan</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">{{ $what_to_see->title }}</p>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Blog Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12">
                <!-- Blog Detail Start -->
                <div class="pb-3">
                    <div class="blog-item">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="/storage/{{ $what_to_see->image }}" alt="{{ $what_to_see->title }}" style="object-fit: cover; max-height: 400px;">
                            <div class="blog-date">
                                <h6 class="font-weight-bold mb-n1">01</h6>
                                <small class="text-white text-uppercase">Jan</small>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white mb-3" style="padding: 30px;">
                        <div class="d-flex mb-3">
                            <a class="text-primary text-uppercase text-decoration-none" href="">What to see in Karakalpakstan</a>
                        </div>
                        {!! $what_to_see->content !!}
                    </div>
                </div>
                <!-- Blog Detail End -->
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->

@endsection

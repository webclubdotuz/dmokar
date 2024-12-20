@extends('layouts.frontend')

@section('content')
<!-- Header Start -->
<div class="container-fluid page-header">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-4 text-white text-uppercase text-center">
                {{ $post->title }}
            </h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="/">{{ __('Home') }}</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">{{ $post->title }}</p>
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
                            <img class="img-fluid w-100" src="/storage/{{ $post->image }}" alt="{{ $post->title }}" style="object-fit: cover; max-height: 400px;">
                        </div>
                    </div>
                    <div class="bg-white mb-3" style="padding: 30px;">
                        <div class="d-flex mb-3">
                            <a class="text-primary text-uppercase text-decoration-none" href="">
                                {{ $post->title }}
                            </a>
                        </div>
                        {!! $post->content !!}
                    </div>
                </div>
                <!-- Blog Detail End -->
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->

@endsection

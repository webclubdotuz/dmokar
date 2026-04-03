@extends('layouts.frontend')

@section('title', 'Jańalıqlar — DMO Karakalpakstan')
@section('meta_description', 'DMO Karakalpakstan jańalıqlari — turizm, sayyohlik hám Qaraqalpaqstan háqqındaǵı sońǵı xabarlar.')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">
                    {{ __('Our Blog') }}
                </h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="/">{{ __('Home') }}</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">{{ __('Our Blog') }}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">{{ __('Our Blog') }}</h6>
                <h1>{{ __('Latest From Our Blog') }}</h1>
            </div>
            <div class="row pb-3">
                @foreach ($posts as $post)
                    <div class="col-lg-4 col-md-6 mb-4 pb-2 d-flex">
                        <div class="blog-item d-flex flex-column w-100">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="/storage/{{ $post->image }}" alt="{{ $post->title }}" style="height: 250px; object-fit: cover;">
                                <div class="blog-date">
                                    <h6 class="font-weight-bold mb-n1">{{ $post->created_at->format('d') }}</h6>
                                    <small class="text-white text-uppercase">{{ $post->created_at->format('M') }}</small>
                                </div>
                            </div>
                            <div class="bg-white p-4 d-flex flex-column flex-grow-1">
                                <a class="h5 text-decoration-none" href="{{ route('post.show', $post->id) }}">
                                    {{ $post->title }}
                                </a>
                                <p class="text-muted mt-2 mb-3 flex-grow-1">{{ Str::limit(strip_tags($post->content), 100) }}</p>
                                <div>
                                    <a href="{{ route('post.show', $post->id) }}" class="btn btn-sm btn-primary">
                                        {{ __('Read More') }} <i class="fa fa-arrow-right ml-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                {{ $posts->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection

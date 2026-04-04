@extends('layouts.frontend')

@section('title', '404 — DMO Karakalpakstan')

@section('content')
<div class="container-fluid page-header">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="text-white text-uppercase text-center" style="font-size: clamp(1.2rem, 4vw, 2.5rem); font-weight: 600;">
                404
            </h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="/">{{ __('Home') }}</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">404</p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5">
    <div class="container py-5 text-center">
        <h1 class="display-1 text-primary font-weight-bold">404</h1>
        <h2 class="mb-4">{{ __('Page Not Found') }}</h2>
        <p class="mb-4 text-muted">{{ __('The page you are looking for does not exist or has been moved.') }}</p>
        <a href="/" class="btn btn-primary py-3 px-5">{{ __('Home') }}</a>
    </div>
</div>
@endsection

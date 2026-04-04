@extends('layouts.frontend')

@section('title', '500 — DMO Karakalpakstan')

@section('content')
<div class="container-fluid page-header">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="text-white text-uppercase text-center" style="font-size: clamp(1.2rem, 4vw, 2.5rem); font-weight: 600;">
                500
            </h3>
        </div>
    </div>
</div>

<div class="container-fluid py-5">
    <div class="container py-5 text-center">
        <h1 class="display-1 text-primary font-weight-bold">500</h1>
        <h2 class="mb-4">{{ __('Server Error') }}</h2>
        <p class="mb-4 text-muted">{{ __('Something went wrong. Please try again later.') }}</p>
        <a href="/" class="btn btn-primary py-3 px-5">{{ __('Home') }}</a>
    </div>
</div>
@endsection

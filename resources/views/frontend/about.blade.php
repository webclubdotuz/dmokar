@extends('layouts.frontend')


@section('content')
 <!-- Header Start -->
 <div class="container-fluid page-header">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-4 text-white text-uppercase text-center">
                {{ $page?->title }}
            </h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase">
                    <a class="text-white" href="">
                        {{ __('Home') }}
                    </a>
                </p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">
                    {{ $page?->title }}
                </p>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="">
                    <h1 class="mb-3">
                        {{ $page?->title }}
                    </h1>
                    <p>
                        {!! $page?->content !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
@endsection

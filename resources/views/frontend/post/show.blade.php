@extends('layouts.frontend')

@section('title', $post->title . ' — DMO Karakalpakstan')
@section('meta_description', Str::limit(html_entity_decode(strip_tags($post->content)), 160))
@section('og_type', 'article')
@if($post->image)
@section('og_image', asset('storage/' . $post->image))
@endif

@section('content')
<style>
    .post-content img {
        max-width: 100%;
        height: auto !important;
        border-radius: 8px;
        cursor: pointer;
        transition: opacity 0.2s;
    }
    .post-content img:hover {
        opacity: 0.85;
    }
    #galleryModal .modal-dialog {
        max-width: 90vw;
        margin: 1.75rem auto;
    }
    #galleryModal .modal-content {
        background: transparent;
        border: none;
    }
    #galleryModal .modal-body {
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 60vh;
    }
    #galleryModal .modal-body img {
        max-width: 100%;
        max-height: 85vh;
        object-fit: contain;
        border-radius: 8px;
    }
    #galleryModal .close {
        position: absolute;
        top: 10px;
        right: 15px;
        color: #fff;
        font-size: 2rem;
        opacity: 1;
        z-index: 10;
        text-shadow: 0 0 10px rgba(0,0,0,0.8);
    }
    #galleryModal .gallery-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(0,0,0,0.5);
        color: #fff;
        border: none;
        font-size: 2rem;
        padding: 10px 18px;
        cursor: pointer;
        border-radius: 50%;
        z-index: 10;
    }
    #galleryModal .gallery-prev { left: 10px; }
    #galleryModal .gallery-next { right: 10px; }
    #galleryModal .gallery-counter {
        text-align: center;
        color: #fff;
        padding: 10px;
        font-size: 0.9rem;
    }
</style>

<!-- Header Start -->
<div class="container-fluid page-header">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="text-white text-uppercase text-center" style="font-size: clamp(1.2rem, 4vw, 2.5rem); font-weight: 600;">
                {{ $post->title }}
            </h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="/">{{ __('Home') }}</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">{{ __('Posts') }}</p>
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
                        <div class="post-content">
                            {!! $post->content !!}
                        </div>
                    </div>
                </div>
                <!-- Blog Detail End -->
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->

<!-- Gallery Modal -->
<div class="modal fade" id="galleryModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <button type="button" class="gallery-nav gallery-prev" onclick="galleryNav(-1)">&#8249;</button>
            <button type="button" class="gallery-nav gallery-next" onclick="galleryNav(1)">&#8250;</button>
            <div class="modal-body">
                <img id="galleryImage" src="" alt="">
            </div>
            <div class="gallery-counter">
                <span id="galleryCurrent">1</span> / <span id="galleryTotal">1</span>
            </div>
        </div>
    </div>
</div>

<script>
    var galleryImages = [];
    var galleryIndex = 0;

    document.addEventListener('DOMContentLoaded', function () {
        var imgs = document.querySelectorAll('.post-content img');
        imgs.forEach(function (img, i) {
            galleryImages.push(img.src);
            img.addEventListener('click', function () {
                galleryIndex = i;
                showGalleryImage();
                $('#galleryModal').modal('show');
            });
        });
        document.getElementById('galleryTotal').textContent = galleryImages.length;
    });

    function showGalleryImage() {
        document.getElementById('galleryImage').src = galleryImages[galleryIndex];
        document.getElementById('galleryCurrent').textContent = galleryIndex + 1;
    }

    function galleryNav(dir) {
        galleryIndex = (galleryIndex + dir + galleryImages.length) % galleryImages.length;
        showGalleryImage();
    }

    $(document).on('keydown', function (e) {
        if (!$('#galleryModal').hasClass('show')) return;
        if (e.key === 'ArrowLeft') galleryNav(-1);
        if (e.key === 'ArrowRight') galleryNav(1);
        if (e.key === 'Escape') $('#galleryModal').modal('hide');
    });
</script>
@endsection

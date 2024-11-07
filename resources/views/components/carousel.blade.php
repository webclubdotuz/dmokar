<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($what_to_sees->take(3) as $what_to_see)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                <img class="w-100" src="/storage/{{ $what_to_see->image }}" alt="Image" style="height: 600px; object-fit: cover;">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3" data-aos="fade-up">What to see in Karakalpakstan</h4>
                        <h1 class="display-3 text-white mb-md-4" data-aos="fade-up" data-aos-delay="100">{{ $what_to_see->title }}</h1>
                        <a href="{{ route('what_to_see') }}" class="btn btn-primary py-md-3 px-md-5 mt-2" data-aos="fade-up" data-aos-delay="100">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                <span class="carousel-control-prev-icon mb-n2"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                <span class="carousel-control-next-icon mb-n2"></span>
            </div>
        </a>
    </div>
</div>

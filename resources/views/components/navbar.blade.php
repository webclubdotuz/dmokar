<div class="container-fluid position-relative nav-bar p-0">
    <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
        <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
            <a href="/" class="navbar-brand">
                <img class="img-fluid" src="/frontend/img/dmo-logo.png" alt="" style="width: 150px;">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0">
                    <a href="/about" class="nav-item nav-link active" data-aos="fade-right">About Karakalpakstan</a>
                    <a href="{{ route('what_to_see') }}" class="nav-item nav-link" data-aos="fade-right">What to see in Karakalpakstan</a>
                    <a href="/" class="nav-item nav-link" data-aos="fade-right">About us</a>
                    <a href="{{ route('travelers') }}" class="nav-item nav-link" data-aos="fade-right">Info for travelers</a>
                    <div class="nav-item dropdown" data-aos="fade-right">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            Language {{ session('language') }}
                        </a>
                        <div class="dropdown-menu border-0 rounded-0 m-0">
                            <a href="{{ route('switch-language', 'en') }}" class="dropdown-item">
                                English
                            </a>
                            <a href="{{ route('switch-language', 'ru') }}" class="dropdown-item">
                                Русский
                            </a>
                            <a href="{{ route('switch-language', 'kaa') }}" class="dropdown-item">
                                Qaraqalpaqsha
                            </a>
                            <a href="{{ route('switch-language', 'uz') }}" class="dropdown-item">
                                O'zbek
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>

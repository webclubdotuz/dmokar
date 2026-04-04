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
                    <a href="/about" class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : ''}}" data-aos="fade-right">{{__("menu.About Karakalpakstan")}}</a>
                    <a href="{{ route('what_to_see') }}" class="nav-item nav-link {{ request()->routeIs(['what_to_see', 'what_to_see.*']) ? 'active' : ''}}" data-aos="fade-right">{{__("menu.What to do in Karakalpakstan")}}</a>
                    <a href="/about-dmo" class="nav-item nav-link {{ request()->routeIs('about-dmo') ? 'active' : ''}}" data-aos="fade-right">{{__("menu.About DMO")}}</a>
                    <a href="{{ route('travelers') }}" class="nav-item nav-link {{ request()->routeIs('travelers') ? 'active' : ''}}" data-aos="fade-right">{{__("menu.Info for travelers")}}</a>
                    <a href="{{ route('posts.index') }}" class="nav-item nav-link {{ request()->routeIs(['posts.index', 'post.*']) ? 'active' : ''}}" data-aos="fade-right">{{__("menu.Posts")}}</a>
                    <div class="nav-item dropdown" data-aos="fade-right">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            {{__("menu.Language")}}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right border-0 shadow rounded m-0">
                            <a href="{{ route('switch-language', 'en') }}" class="dropdown-item {{ app()->getLocale() == 'en' ? 'active' : '' }}">
                                English
                            </a>
                            <a href="{{ route('switch-language', 'ru') }}" class="dropdown-item {{ app()->getLocale() == 'ru' ? 'active' : '' }}">
                                Русский
                            </a>
                            <a href="{{ route('switch-language', 'kaa') }}" class="dropdown-item {{ app()->getLocale() == 'kaa' ? 'active' : '' }}">
                                Qaraqalpaqsha
                            </a>
                            <a href="{{ route('switch-language', 'uz') }}" class="dropdown-item {{ app()->getLocale() == 'uz' ? 'active' : '' }}">
                                O'zbek
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>

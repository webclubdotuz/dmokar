<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'DMO Karakalpakstan — Qaraqalpaqstan turizm destinatsiyasi')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="@yield('meta_description', 'DMO Karakalpakstan — Qaraqalpaqstanníń turizm imkaniyatlari, sayyohlik marshrutlari, mehmánxanalar hám ko\'rinistarli orınlar háqqında maǵlıwmat.')">
    <meta name="keywords" content="@yield('meta_keywords', 'DMO Karakalpakstan, Qaraqalpaqstan turizm, Aral teńizi, Mo\'ynak, sayyohlik, travel Karakalpakstan')">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph -->
    <meta property="og:title" content="@yield('title', 'DMO Karakalpakstan')">
    <meta property="og:description" content="@yield('meta_description', 'DMO Karakalpakstan — Qaraqalpaqstanníń turizm imkaniyatlari háqqında maǵlıwmat.')">
    <meta property="og:image" content="@yield('og_image', asset('frontend/img/carousel-1.jpg'))">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:locale" content="{{ app()->getLocale() }}">
    <meta property="og:site_name" content="DMO Karakalpakstan">

    <!-- Favicon -->
    <link href="/frontend/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Libraries Stylesheet -->
    <link href="/frontend/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/frontend/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/frontend/css/style.css" rel="stylesheet">

    <!-- Schema.org -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "DMO Karakalpakstan",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('frontend/img/dmo-logo.png') }}",
        "description": "Destination Management Organization of Karakalpakstan",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Sayaxatshilar street, 10/2",
            "addressLocality": "Nukus",
            "addressRegion": "Karakalpakstan",
            "addressCountry": "UZ"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+998913807077",
            "contactType": "customer service"
        },
        "sameAs": [
            "https://t.me/DMO_Karakalpakstan",
            "https://www.instagram.com/dmo_karakalpakstan",
            "https://www.youtube.com/@DMOKarakalpakstan"
        ]
    }
    </script>
</head>

<body>
    <!-- Topbar Start -->
    <x-topbar></x-topbar>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <x-navbar></x-navbar>
    <!-- Navbar End -->


    @yield('content')


    <!-- Footer Start -->
    <x-footer></x-footer>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top" aria-label="Back to top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="/frontend/lib/easing/easing.min.js"></script>
    <script src="/frontend/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/frontend/lib/tempusdominus/js/moment.min.js"></script>
    <script src="/frontend/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="/frontend/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="/frontend/mail/jqBootstrapValidation.min.js"></script>
    <script src="/frontend/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="/frontend/js/main.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                once: true,
                easing: 'ease-out-cubic',
                offset: 80
            });
        });

        // Lazy load hero video
        document.addEventListener('DOMContentLoaded', function () {
            var video = document.getElementById('heroVideo');
            if (video) {
                var source = video.querySelector('source[data-src]');
                if (source) {
                    source.src = source.getAttribute('data-src');
                    source.removeAttribute('data-src');
                    video.load();
                }
            }
        });
    </script>
</body>

</html>

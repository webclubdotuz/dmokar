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
    <meta property="og:image" content="@yield('og_image', asset('frontend/img/favicon.ico'))">
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
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


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
        AOS.init();
    </script>
</body>

</html>

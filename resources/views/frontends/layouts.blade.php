<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    {{-- <title>Ramsnehi Chikitsalya &amp; Anusandhan Kendra</title> --}}
    <title>@yield('title'): रामस्नेही चिकित्सालय एवं अनुसंधान केन्द्र</title>

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="रामस्नेही चिकित्सालय एवं अनुसंधान केन्द्र">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="रामस्नेही चिकित्सालय एवं अनुसंधान केन्द्र">

    <!-- theme meta -->
    <meta name="theme-name" content="रामस्नेही चिकित्सालय एवं अनुसंधान केन्द्र" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png" />

    <!-- ===============  Essential stylesheets ===============-->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/icofont/icofont.min.css">
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">

  </head>

<body id="top">
    <!-- ======= Header ======= -->
    @include('frontends.partials.header')
    <!-- ======= Header ======= -->

    <!-- ======= Content ======= -->
    <main id="main" class="main">
        @yield('content')
    </main>
    <!-- ======= End Content ======= -->

    <!-- ======= Footer ======= -->
    @include('frontends.partials.footer')
    <!-- ======= End Footer ======= -->
    <!-- 
    Essential Scripts
    =====================================-->
    <script src="plugins/jquery/jquery.js"></script>
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="plugins/shuffle/shuffle.min.js"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA"></script>
    <script src="plugins/google-map/gmap.js"></script>

    <script src="js/script.js"></script>

</body>

</html>

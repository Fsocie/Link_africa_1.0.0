<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  {{-- <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.ico')}}"> --}}

  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link href="{{ asset('assets/css/all.css') }}" rel="stylesheet">

  <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
  <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  <title>@yield('title') - Showroomafrica</title>
  <link href="{{ asset('assets/style.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="//cdn.materialdesignicons.com/2.1.99/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.0/css/swiper.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />

  <!--assets4 -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('assets4/fonts/icomoon/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets4/css/owl.carousel.min.css') }}">
  {{-- <link rel="stylesheet" href="{{ asset('assets4/css/bootstrap.min.css') }}"> --}}
  <link rel="stylesheet" href="{{ asset('assets4/css/style.css') }}">
  <!--assets4 FIN-->

  <link rel="stylesheet" href="{{ asset('assets2/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('assets2/vendors/linericon/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets2/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets2/vendors/owl-carousel/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets2/vendors/lightbox/simpleLightbox.css') }}">
  <link rel="stylesheet" href="{{ asset('assets2/vendors/nice-select/css/nice-select.css') }}">
  <link rel="stylesheet" href="{{ asset('assets2/vendors/animate-css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('assets2/vendors/flaticon/flaticon.css') }}">
        <!-- main css -->
  <link rel="stylesheet" href="{{ asset('assets2/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets2/css/responsive.css') }}">

  {{-- <link rel="stylesheet" href="{{ asset('assets3/css/main.css') }}" /> --}}
  <link rel="stylesheet" href="{{ asset('assets3/css/tailwind.css') }}" />

  @yield('linkCss')

  <script type="text/javascript">
    (function () {
        Translator.locale = "fr";
        moment.locale("fr");
    })();
</script>

</head>

<body class="locale_fr ">


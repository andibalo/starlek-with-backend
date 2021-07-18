

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Starlight 2021</title>

    <!-- Icon Starlight -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- ---------- Style ---------- -->

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('css/cms/bootstrap.min.css') }}">
    <!-- Font awesome 5.12.1 -->
    <link rel="stylesheet" href="{{ asset('css/cms/fontawesome-5.12.1/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cms/fontawesome-5.12.1/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cms/fontawesome-5.12.1/font-awesome.min.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/cms/animate.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/cms/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cms/custom_css.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cms/material-design-iconic-font/material-design-iconic-font.min.css') }}">
    <style>
        .landing-background,
        .landing-background-mobile {
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            background-size: cover;
            margin-right: auto;
            margin-left: auto;
            height: 100vh;
        }

        .landing-background-mobile {
            display: none;
        }

        .container {
            margin-right: auto;
            margin-left: auto;
            height: 100vh;
        }

        @media (max-width: 767px) {
            .landing-background {
                display: none;
            }

            .landing-background-mobile {
                display: block;
            }
        }

  
  </style>
	
    @yield('custom_css')
  
</head>
<body style="overflow-x: hidden !important;">
<div class="landing-background" style="background-image: url('{{ asset('images/landing/Webpage.png') }}');"></div>
<div class="landing-background-mobile" style="background-image: url('{{ asset('images/landing/mobile-landing.png') }}');"></div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Starlight 2021 - {{ $title }}</title>

    <!-- Icon Starlight -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- ---------- Style ---------- -->

    <!-- Bootstrap 4 -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <!-- Font awesome 5.12.1 -->
    <link rel="stylesheet" href="{{ asset('css/cms/fontawesome-5.12.1/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cms/fontawesome-5.12.1/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cms/fontawesome-5.12.1/font-awesome.min.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/cms/animate.css') }}">

    <!-- MMENU -->
    <link rel="stylesheet" href="{{asset('js/starlight2021/mmenu-js-master/dist/mmenu.css')}}" />
    <link rel="stylesheet" href="{{asset('js/starlight2021/mburger-css-master/dist/mburger.css')}}" />
    <!-- PRELOADER -->
	<link rel="stylesheet" href="{{asset('css/starlight2021/preloader.css')}}" />
    <!-- Custom CSS -->
    
    @yield('custom_css')
	<link rel="stylesheet" href="{{asset('css/starlight2021/header.css')}}" />
    <link rel="stylesheet" href="{{asset('css/starlight2021/footer.css')}}" />
</head>
<body style="overflow-x: hidden !important;width: 100vw;">
	<div class="preloaderCont" id="preloader">
      <div class="night">
        <div class="shooting_star"></div>
        <div class="shooting_star"></div>
        <div class="shooting_star"></div>
        <div class="shooting_star"></div>
        <div class="shooting_star"></div>
        <div class="shooting_star"></div>
        <div class="shooting_star"></div>
        <div class="shooting_star"></div>
        <div class="shooting_star"></div>
        <div class="shooting_star"></div>
        <div class="shooting_star"></div>
        <div class="shooting_star"></div>
        <div class="shooting_star"></div>
        <div class="shooting_star"></div>
        <div class="shooting_star"></div>
        <div class="shooting_star"></div>
        <div class="shooting_star"></div>
        <div class="shooting_star"></div>
        <div class="shooting_star"></div>
        <div class="shooting_star"></div>
      </div>
      <img src="{{ asset('images/starlight2021/logo.png') }}" class="preloader-logo" />
    </div>
    <div id="page">
        <!-- Header -->
        @include('starlight2021.template.header')  
        
        <!-- Content -->
        @yield('content')

        <!-- Footer -->
        @include('starlight2021.template.footer')  
    </div>

    <!-- ---------- Script ---------- -->

    <!-- jQuery 3.4.1 -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"
    ></script>
   
    <!-- Bootstrap 4 -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
	<!-- WOW JS -->
    <script src="{{asset('js/cms/wow/wow.min.js')}}"></script>
    <!-- MMENU -->
    <script src="{{asset('js/starlight2021/mmenu-js-master/dist/mmenu.js')}}"></script>
	<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/601b55f5c31c9117cb75a141/1etlcfi1h';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    <script>
		
		
		$(window).on("load", function () {
			new WOW().init();
			
        setTimeout(() => {
          $("#preloader").fadeOut("slow");
        }, 2500);
      });
		
		$('#backToTop').click(function(e){
		    console.log('scroll top')
		     $('html,body').animate({
			 
			    scrollTop: 0
			 }, 1000)
		})
		
          document.addEventListener("DOMContentLoaded", () => {
                new Mmenu("#menu", {
                wrappers: ["bootstrap"],
                extensions: ["pagedim-black"],
                navbar: {
                    title: "Starlight 2021",
                },
                });
            });

            window.addEventListener("scroll", function () {
                let header = document.querySelector(".navbar");
                header.classList.toggle("sticky", window.scrollY > 0);
            });

    </script>


	@yield('custom_js')
</body>
</html>
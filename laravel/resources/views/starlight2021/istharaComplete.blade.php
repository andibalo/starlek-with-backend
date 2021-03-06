@extends('starlight2021.template.base')



<!-- Custom CSS -->
@section('custom_css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="{{asset('js/starlight2021/smarttab/dist/css/smart_tab.min.css')}}"  />
    <link rel="stylesheet" href="{{asset('css/starlight2021/pages/istharaWelcome.css')}}" />
  </head>
@endsection

@section('content')
    <div class="main d-flex align-items-center justify-content-center">
        <div class="mainContent px-4">
            <div class="cardContainer p-4 mt-5 mb-3">
                <div class="cardContainerInner d-flex flex-column align-items-center">
                    <img class="cardInnerLogo" src="{{ asset('images/starlight2021/logo.png') }}"  />
                    <h4 class="text-center text-white font-weight-bold title mb-4">Welcome to Starlight 2021, <br>Dear Isthara!</h4>
                    <p class="text-center text-white">Don't forget to always check your social media for future updates!</p>
                    <a class="registerBtn mt-4" href="/">Return Home</a>
                </div>
            </div>
        </div>
       
    </div>
    
    @endsection

@section('custom_js')
        <script src="{{asset('js/starlight2021/smarttab/dist/js/jquery.smartTab.js')}}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
@endsection
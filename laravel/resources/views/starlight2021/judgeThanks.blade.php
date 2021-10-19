@extends('starlight2021.template.base')



<!-- Custom CSS -->
@section('custom_css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{asset('css/starlight2021/pages/judgeThanks.css')}}" />
  </head>
@endsection

@section('content')
<div class="section-1 container py-5">
    <div class="row">
        <div class="col-lg-6 col-12  d-flex justify-content-center position-relative">
            <img src="{{ asset('images/starlight2021/logo.png') }}" alt="" width="50%">
            <div class="blue-box"><img src="{{ asset('images/starlight2021/judge/background1-2.png') }}" alt="" width="100%"></div>
        </div>
        <div class="col-lg-6 col-12  justify-content-center d-flex flex-column text-center">
            <h2 class="pb-2">Thank you for helping us to find our Star of The City!</h1>
            <h4>#RiseUptoInfinity</h4>
        </div>
        
    </div>
</div>
@endsection

@section('custom_js')
        <script src="{{asset('js/starlight2021/smarttab/dist/js/jquery.smartTab.js')}}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
@endsection
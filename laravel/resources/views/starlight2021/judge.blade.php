@extends('starlight2021.template.base')



<!-- Custom CSS -->
@section('custom_css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{asset('css/starlight2021/pages/judge.css')}}" />
  </head>
@endsection

@section('content')
<div class="section-1 container row">
    <div class="col-6">
        <h1>STARBOOK</h1>
        <h2>Rubrik Penilaian Juri Dazzling Stage</h2>
        <input type="text">
    </div>
    <div class="col-6">
        <img src="{{ asset('images/starlight2021/logo.png') }}" alt="">
    </div>
</div>
@endsection

@section('custom_js')
        <script src="{{asset('js/starlight2021/smarttab/dist/js/jquery.smartTab.js')}}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
@endsection
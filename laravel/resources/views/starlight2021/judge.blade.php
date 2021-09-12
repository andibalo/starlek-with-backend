@extends('starlight2021.template.base')



<!-- Custom CSS -->
@section('custom_css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{asset('css/starlight2021/pages/judge.css')}}" />
  </head>
@endsection

@section('content')
<div class="section-1 container">
    <div class="row">
        <div class="col-6 justify-content-center d-flex flex-column">
            <h1 class="pb-2">STARBOOK</h1>
            <h3>Rubrik Penilaian Juri Dazzling Stage</h2>
            <input class="mt-5" type="text" value="ENTER THE CODE">
        </div>
        <div class="col-6 d-flex justify-content-end">
            <img src="{{ asset('images/starlight2021/logo.png') }}" alt="" width="100%">
        </div>
    </div>
    <button>NEXT</button>
</div>
@endsection

@section('custom_js')
        <script src="{{asset('js/starlight2021/smarttab/dist/js/jquery.smartTab.js')}}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
@endsection
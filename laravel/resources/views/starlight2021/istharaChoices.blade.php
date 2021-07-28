@extends('starlight2021.template.base')



<!-- Custom CSS -->
@section('custom_css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="{{asset('js/starlight2021/smarttab/dist/css/smart_tab.min.css')}}"  />
    <link rel="stylesheet" href="{{asset('css/starlight2021/pages/istharaChoices.css')}}" />
  </head>
@endsection

@section('content')
    <div class="section-1 d-flex">
        <div class="row">
            <div class="col-12">
                <h1>Are you entering as:</h1>
            </div>
            <div class="col-6">
                <a href="/contestant/solo">Solo</a>
            </div>
            <div class="col-6">
                <a href="/contestant/group">Group</a>
            </div>
        </div>

    </div>
    
    @endsection

@section('custom_js')
        <script src="{{asset('js/starlight2021/smarttab/dist/js/jquery.smartTab.js')}}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
@endsection
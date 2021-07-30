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
    <div class="section-1 d-flex flex-column">
        <div class="pt-5 my-5">
            <div class="row d-flex justify-content-center pt-3">
                <div class="col-6 p-0 position-relative">
                    <a href="/contestant/solo"><img class="solo-bg" src="../../../images/starlight2021/isthara/solo-bg.png" alt="">
                        <h3 class="choice-text">SOLO</h3>
                    </a>
                </div>
                <div class="col-6 p-0">
                    <a href="/contestant/group"><img class="group-bg" src="../../../images/starlight2021/isthara/group-bg.png" alt="">
                        <h3 class="choice-text">GROUP</h3>
                    </a>
                </div>
            </div>
            <div class="row d-flex justify-content-center p-3">
                <h4 class="terms-text">Emerging Stage's Terms & Regulations</h2>
            </div>
        </div>
       
    </div>
    
    @endsection

@section('custom_js')
        <script src="{{asset('js/starlight2021/smarttab/dist/js/jquery.smartTab.js')}}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
@endsection
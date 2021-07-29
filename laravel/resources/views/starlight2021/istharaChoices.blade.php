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
            <div class="row d-flex justify-content-center pt-5 mt-3">
                <div class="col-6 p-0 position-relative">
                    <h3 class="choice-text">Solo</h3>
                    <a href="/contestant/solo"><img src="https://images.unsplash.com/photo-1615789591457-74a63395c990?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80" alt=""></a>
                </div>
                <div class="col-6 p-0">
                    <h3 class="choice-text">Group</h3>
                    <a href="/contestant/group"><img src="https://images.unsplash.com/photo-1615789591457-74a63395c990?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80" alt=""></a>
                </div>
            </div>
            <div class="row d-flex justify-content-center p-3">
                <h4 class="terms-text">Terms & regulation</h2>
            </div>
        </div>
       
    </div>
    
    @endsection

@section('custom_js')
        <script src="{{asset('js/starlight2021/smarttab/dist/js/jquery.smartTab.js')}}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
@endsection
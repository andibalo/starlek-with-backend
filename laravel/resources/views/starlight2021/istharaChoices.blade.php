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
            <div class="row d-flex justify-content-center pt-3 mt-5">
                <div class="col-6 p-0 position-relative img-contain img-contain-solo">
                    <a href="/contestant/solo"><img class="solo-bg" src="../../../images/starlight2021/isthara/solo-bg.png" alt="" width="400px">
                        <h3 class="choice-text">SOLO</h3>
                    </a>
                </div>
                <div class="col-6 p-0 img-contain img-contain-group">
                    <a href="/contestant/group"><img class="group-bg" src="../../../images/starlight2021/isthara/group-bg.png" alt="" width="400px">
                        <h3 class="choice-text">GROUP</h3>
                    </a>
                </div>
            </div>
            <div class="row d-flex justify-content-center p-3">
                <!-- Button trigger modal -->
                <button type="button" class="regulationBtn" data-toggle="modal" data-target="#istharaModal">
                    Emerging Stage's Terms & Regulations
                </button>
            </div>
        </div>
        
        
        <!-- Modal -->
        <div class="modal fade" id="istharaModal" tabindex="-1" role="dialog" aria-labelledby="istharaModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    {{-- pdf viewer --}}
                    <div id="example1" class="isthara-regulation">
                        
                    </div>
                </div>
            </div>
            </div>
        </div>

        
       
    </div>
    
    @endsection

@section('custom_js')
        <script src="{{asset('js/starlight2021/smarttab/dist/js/jquery.smartTab.js')}}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
@endsection
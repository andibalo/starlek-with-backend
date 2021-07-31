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
        <div class="mainContent">
            <div class="cardContainer p-4 mt-5 mb-3">
                <div class="cardContainerInner d-flex flex-column align-items-center">
                    <img class="cardInnerLogo" src="{{ asset('images/starlight2021/logo.png') }}"  />
                    <h2 class="title mb-4">Welcome Starlighters</h2>
                    <a class="registerBtn" href="/contestant">Register Here</a>
                </div>
            </div>
            <h6 class="text-center text-white">Emerging Stage's Terms & Regulations</h6>
        </div>
       
    </div>

    <!-- Modal -->
    <div class="modal fade" id="istharaModal" tabindex="-1" role="dialog" aria-labelledby="istharaModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            {{-- <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div> --}}
            <div class="modal-body">
                {{-- pdf viewer --}}
                <div id="example1" class="isthara-regulation">
                    
                </div>
            </div>
            <div class="modal-footer">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">I Agree</label>
                </div>
                <button class="btn btn-primary disabledBtn closeBtn" data-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>
    
    @endsection

@section('custom_js')
        <script src="{{asset('js/starlight2021/smarttab/dist/js/jquery.smartTab.js')}}"></script>
        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
        <script>
            $(window).on('load', function() {
                setTimeout(() => {
                    $('#istharaModal').modal('show');
                }, 3000);

                $('#istharaModal').modal({
                    backdrop: 'static',
                    keyboard: false,
                })
            });

            $('#exampleCheck1').change(function(e) {
                if(e.target.checked) {
                    $('.closeBtn').removeClass('disabledBtn');
                } else {
                    $('.closeBtn').addClass('disabledBtn');
                }
            })
        </script>
@endsection
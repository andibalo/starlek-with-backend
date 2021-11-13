@extends('starlight2021.template.base')



<!-- Custom CSS -->
@section('custom_css')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<link rel="stylesheet" href="{{asset('css/starlight2021/pages/judge.css')}}" />
</head>
@endsection

@section('content')
<div class="section-1 container py-5">
    <div class="row">
        <div class="starbook-title col-lg-6 col-12 order-lg-1 order-2 justify-content-center d-flex flex-column">
            <h1 class="pb-2 text-center m-0">STARBOOK</h1>
            <h3 class="text-center">Rubrik penilaian juri Dazzling Stage</h2>
                <form id="judges" class="text-center">
                    <input class="mt-3 w-md-50 w-75" type="text" placeholder="ENTER THE CODE HERE" id="code">
                </form>
        </div>
        <div class="col-lg-6 col-12 order-lg-2 order-1 d-flex justify-content-center position-relative">
            <img src="{{ asset('images/starlight2021/logo.png') }}" alt="" width="50%">
            <div class="blue-box"><img src="{{ asset('images/starlight2021/judge/background1-2.png') }}" alt="" width="100%"></div>
        </div>
    </div>
</div>
@endsection

@section('custom_js')
<script src="{{asset('js/starlight2021/smarttab/dist/js/jquery.smartTab.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    const validToken = [
        'JDZ00',
        'JDZ01',
        'JDZ02',
        'JDZ03',
        'JDZ04',
        'JDZ05'
    ];

    $('#judges').submit(function(e) {
        e.preventDefault();
        var code = $('#code').val().toUpperCase();
        if (code === '') {
            return;
        }

        if (validToken.indexOf(code) >= 0) {
            localStorage.setItem("judgeCode", code);
            window.location.replace("http://127.0.0.1:8000/judge/starbook");
        } else {
            alert("You have entered the wrong token. Please try again!");
        }
    });
</script>

@endsection
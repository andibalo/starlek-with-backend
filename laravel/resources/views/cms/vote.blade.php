@extends('cms.template.base')
@section('custom_css')
<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('css/cms/vote.css') }}">
<link rel="stylesheet" href="{{ asset('css/cms/pages/_counter2.css') }}">

<style>
    .box{
        background: url("{{ asset('images/bg-img/Background_Content.png') }}");
        background-color: #042339;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        background-position-y: 50px;
    }
    .box .card {
        border: none !important;
        background-color: transparent !important;
        border-bottom-left-radius: 1rem !important;
        border-bottom-right-radius: 1rem !important;
        overflow: hidden;
    }
    .box .card .card-body {
        background-color: white !important;
    }
    .hover-effect .normal-image {
        display: block;
    }
    .hover-effect .hover-image {
        display: none;        
    }
    .hover-effect:hover .normal-image {
        display: none;
    }
    .hover-effect:hover .hover-image {
        display: block;
    }
    .hover-effect.grayscale {
        filter: grayscale(100%);
    }
    .hover-effect.grayscale.active {
        transform: scale(1.1);
        filter: grayscale(0%) !important;
    }
    .hover-effect.grayscale .hover-image {
        display: none !important
    }
    .hover-effect.grayscale .normal-image {
        display: block !important
    }
    .hover-effect.grayscale.active .normal-image {
        display: none !important;
    }
    .hover-effect.grayscale.active .hover-image {
        display: block !important;
    }
    @media(max-width:990px){
        .drum{
            display:none;
        }
        .leafleft{
            width: 80%!important;
        }
    }
    @media(max-width:767px){
        .drum{
            display:none;
        }
        .leafleft{
            display:none;
        }
        .box{
            background-image: url("{{ asset('images/bg-img/leaf_left.png') }}")!important;
        }
    }
	
	.clockOthers.color-white span {
        color: white !important;
    }
	
	@media only screen and (max-width: 400px){
		.about-us-countdown-area .countdown-up-area .countdown-timer #clock div span, .about-us-countdown-area .countdown-up-area .countdown-timer .clockOthers div span {
			font-size: 10px;
		}
		.about-us-countdown-area .countdown-up-area .countdown-timer #clock div, .about-us-countdown-area .countdown-up-area .countdown-timer .clockOthers div {
			font-size: 12px!important;
		}
	}
</style>
@endsection
@section('content')
<div class="box pt-5" style="min-height:1000px;position:relative;overflow:hidden;">
    <!-- <img src="{{ asset('images/bg-img/Background_Content.png') }}" alt="" style="position:absolute;"> -->
    <img class="drum" src="{{ asset('images/bg-img/Drum_Leaf.png') }}" alt="" style="position:absolute;bottom:0;width:40%;width: 80%;right: -20%;">
    <!-- <img src="{{ asset('images/bg-img/Leaf_Right.png') }}" alt="" style="position:absolute;bottom:0;"> -->
    <img class="leafleft" src="{{ asset('images/bg-img/Leaf_Left.png') }}" alt="" style="position:absolute;bottom:0;width:40%;left:0;">
    <div class="container mt-100">
        <img class="mt-100 mx-auto d-block" style="width:600px;position: relative;" src="{{asset('images/core-img/Tulisan-Rio.png')}}" alt="">
        <div class="col-sm-8 mx-auto title-container" style="text-align:center;">
            <h1>STELLAR</h1>
            <h5>Crowd Pleaser</h5>
            <p style="color:white;">Stellar is a star that's usually expressed as a preeminent performer. This year, on Planet Starlight, one Vergilia will become a Stellar because of it's ability to amaze everyone on The Trinus of Vergilia. The star showed an outstanding performance of their talent. It shined brightly, the crowed fell in love. Nonetheless, only one can be entitled as the Stellar. The citizens of Planet Starlight have entrusted you to incite the rise of Stellar. Now's the time to cast your votes!</p>
            <!-- <h5>-COUNTDOWN TUTUP VOTING STELLAR (Pk 19.00 WIB - Pk 22.00 WIB)-</h5> -->
            <!-- <h5 class="mt-5">-FOTO&VOTE VERGILIA-</h5> -->
        </div>
        <div class="about-us-countdown-area wow fadeInUp">
            <div class="countdown-up-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-3 text-center mb-3">
                            <!-- Countdown Text -->
                            <div class="countdown-content-text mb-10" data-wow-delay="300ms">
                                <h6 class="countdown-text">Countdown Voting Stellar</h6>
                                <!-- <h4 style="color: #270000">Countdown Voting Stellar</h4> -->
                            </div>
                        </div>

                        <div class="col-12 col-md-9 mb-4">
                            <div class="countdown-timer mb-10" data-wow-delay="300ms">
                                <div class="clockOthers color-white"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="button-announcement" class="text-center d-none py-3">
                <a href="#" class="btn starlight-btn mt-3 mt-lg-0 ml-3 ml-lg-5"> Check the Winners NOW! <i class="fas fa-angle-right"></i> </a>
            </div>
        </div>

        <div class="col-sm-12 mx-auto vote-container mt-5 row justify-content-center pb-5" style="text-align:center;">
        @foreach ($daftar_peserta as $peserta)
            <div id="peserta{{ $peserta->id }}" class="col-lg-3 col-md-4 col-sm-6 hover-effect mb-5" style="display:flex;">
                <div class="card" style="width: 100%;">
                    <img src="{{ asset($peserta->images) }}" class="card-img-top normal-image">
                    <img src="{{ asset($peserta->images_hover) }}" class="card-img-top hover-image">
                    <!-- <div class="card-img-top" style="background-image:url({{ asset('images/gallery/twibbon_mardigras.png') }})"></div> -->
                    <div class="card-body">
                        <div class="card-text">
                        <!-- 4.5 -->
                            <div class="name" style="color:black;line-height:6rem;">
                                <span style="display: inline-block;vertical-align: middle;line-height: normal;letter-spacing:0.5px">
                                    {{Str::limit($peserta->name, 20)}}
                                </span>
                            </div>
                            <button id="{{$peserta->id}}--{{$peserta->name}}" class="btn vote-btn mt-3 voteButton" disabled="" style="width: 80%;"><div class="voteText"> Closed </div></button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection
@section('custom_js')
<script src="{{ asset('js/cms/sweetalert/sweetalert.js') }}"></script>
<script>
    let clientIP = "";
    $(document).ready(function() {		
		let current_date = new Date();

        let stellar_end = new Date(2020, 10, 21, 22, 0, 0) // 21 November 2020
        let stellar_announcement = new Date(2020, 10, 21, 23, 0 ,0) // 21 November 2020

        let use_date;

        if (current_date < stellar_end) {
            use_date = '2020/11/21 22:00:00'; 
            $(".countdown-text").text("Voting Stellar Ends");
        } else if (current_date < stellar_announcement) {
            use_date = '2020/11/21 23:00:00'; 
            $(".countdown-text").text("Announcement of Sirius");
        } else {
            $(".about-us-countdown-area").hide();
        }

        if (current_date < stellar_announcement) {
            $(".clockOthers").countdown(use_date, function (event) {
                $(this).html(event.strftime("<div>%w <span>Weeks</span></div> <div>%d <span>Days</span></div> <div>%H <span>Hours</span></div> <div>%M <span>Minutes</span></div> <div>%S <span>Seconds</span></div>"));
            });
        } else {
            $(".countdown-up-area").addClass("d-none");
            $("#button-announcement").removeClass("d-none");
			
			$(".voteButton").each(function() {
                $(this).removeClass("vote-btnbfr");
                $(this).prop('disabled', true);
                $(this).text("Closed");
            });
        }
    })
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn starlight-btn mt-2 mr-1 wd',
            cancelButton: 'btn starlight-btn mt-2 ml-1 wd'
        },
        buttonsStyling: false
    });
    
</script>
@endsection

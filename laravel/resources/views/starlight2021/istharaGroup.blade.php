@extends('starlight2021.template.base')



<!-- Custom CSS -->
@section('custom_css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="{{asset('js/starlight2021/smarttab/dist/css/smart_tab.min.css')}}"  />
    <link rel="stylesheet" href="{{asset('css/starlight2021/pages/istharaGroup.css')}}" />

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
@endsection

@section('content')
<div class="section-1 d-flex justify-content-center align-items-center flex-column">
    <div class="row">
        <div class="col-12 col-md-offset-3">
            <form id="msform" name="formIsthara" action="" onsubmit="" method="post" enctype="multipart/form-data">
                @csrf
                <!-- progressbar -->
                <ul id="progressbar">
                    <li class="active"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <!-- fieldsets -->
                <fieldset>
                    <div class="row ms-form-wrapper">
                        <div class="col-12 col-md-4 d-flex flex-column justify-content-between">
                            <h2 class="fs-title text-center text-md-left">Welcome Starlighters!</h2>
                            <div class="next-container d-flex justify-content-end flex-column">
                                <h3 class="fs-subtitle">Before you start your journey with us, please do fill out these forms. The city awaits you!</h3>

                                <input type="button" class="action-button-previous d-none d-md-block" value="Previous" onclick="window.open('/contestant', '_self')"/>
                            </div>                   
                        </div>
                        <div class="ms-form-container col-12 col-md-8">
                            <label for="link-video d-flex">Video Link</label>
                            <input type="text" id="link-video" name="link-video" placeholder="https://www.instagram.com/starlightumn/"/>
                            <label for="link-video d-flex">Stage Name</label>
                            <input type="text" id="stage-name" name="stage-name" placeholder="Insert your stage name here"/>
                            <label for="link-video d-flex">Talent Description</label>
                            <input type="text" id="talent" name="talent" placeholder="Describe your talent briefly"/>
                            <div class="next-container d-none d-md-flex justify-content-end nextBtn">
                                <input type="button" name="next" class="next action-button" value="Next"/>
                            </div>
                            
                        </div>
                    </div>                         
                    <div class=" d-flex d-md-none justify-content-between "> 
                            <input type="button" class="action-button-previous" value="Previous" onclick="window.open('/contestant', '_self')"/>
                            <input type="button" name="next" class="next action-button" value="Next"/>
                        </div>
                </fieldset>
                <fieldset>
                    <div class="row ms-form-wrapper">
                        <div class="col-12 col-md-4 d-flex flex-column justify-content-between">
                            <h2 class="fs-title text-center text-md-left">Welcome Starlighters!</h2>
                            <div class="next-container d-none d-md-flexjustify-content-end flex-column">
                                <h3 class="fs-subtitle">Before you start your journey with us, please do fill out these forms. The city awaits you!</h3>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                            </div>
                        </div>
                        <div class="ms-form-container col-12 col-md-8">
                            <label for="link-video d-flex">LINE ID (representative)</label>
                            <input type="text" name="line-id" id="line-id" placeholder="@starlightumn"/>
                            <label for="link-video d-flex">Phone Number (representative)</label>
                            <input type="text" name="phone-number" id="phone-number" placeholder="+6281122334455"/>
                            <label for="link-video d-flex">Instagram Username</label>
                            <input type="text" name="instagram" id="instagram" placeholder="@starlightumn"/>
                            <label for="link-video d-flex">E-mail Address</label>
                            <input type="email" name="e-mail" id="e-mail" placeholder="starlight@umn.ac.id"/>
                            
                            <div class="next-container d-none d-md-flex justify-content-end nextBtn">
                                <input type="button" name="next" class="next action-button" value="Next"/>
                            </div>
                        </div>                         
                    </div>  
                    <div class=" d-flex d-md-none justify-content-between "> 
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                            <input type="button" name="next" class="next action-button" value="Next"/>
                        </div>
                </fieldset>
                <fieldset>
                    <div class="row ms-form-wrapper">
                        <div class="col-12 col-md-4 d-flex flex-column justify-content-between">
                            <h2 class="fs-title text-center text-md-left">Welcome Starlighters!</h2>
                            <div class="next-container d-none d-md-flex justify-content-end flex-column">
                                <h3 class="fs-subtitle">Before you start your journey with us, please do fill out these forms. The city awaits you!</h3>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                            </div>
                        </div>
                        <div class="ms-form-container participant-wrapper col-12 col-md-8">
                            <label for="link-video d-flex">Number of Performers</label>
                            <select class="form-control mb-2" name="num-participant" id="num-participants" onchange="numOfParticipants(this)">
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <hr >
                            <div class="" id="firstParticipant">
                                <label for="full-name">Full name</label>
                                <input type="text" id="full-name" name="full-name" placeholder="Insert your full name here"/>
                                <label for="date-birth">Date of Birth</label>
                                <input type="date" name="date-birth" id="date-birth" placeholder="2021-08-21"/>
                                <label for="address">Address</label>
                                <input type="text" name="address" id="address" placeholder="Insert your address here"/>
                                <label for="education">Educational Institution</label>
                                <input type="text" name="education" id="education" placeholder="Insert your educational institution here"/>
                                <label>Scan Identity Card (KTP/KITAS/Kartu Pelajar/KIA)</label>
                                <input type="file" name="idCard[]" accept="image/png, image/jpeg, image/jpg" id="idCard" placeholder="Universitas Multimedia Nusantara" style="color: white;"/>
                            </div>

                            <div class="mt-5 mb-5" id="secondParticipant">
                                <small>2nd Member</small>
                                <label for="full-name-2">Full name</label>
                                <input type="text" id="full-name-2" name="full-name-2" placeholder="Insert your full name here"/>
                                <label for="date-birth-2">Date of Birth</label>
                                <input type="date" name="date-birth-2" id="date-birth-2" placeholder="2021-08-21"/>
                                <label for="address-2">Address</label>
                                <input type="text" name="address-2" id="address-2" placeholder="Insert your address here"/>
                                <label for="education-2">Educational Institution</label>
                                <input type="text" name="education-2" id="education-2" placeholder="Insert your educational institution here"/>
                                <label>Scan Identity Card (KTP/KITAS/Kartu Pelajar/KIA)</label>
                                <input type="file" name="idCard[]" accept="image/png, image/jpeg, image/jpg" id="idCard" placeholder="Universitas Multimedia Nusantara" style="color: white;"/>
                            </div>

                            <div class="mt-5 mb-5" id="thirdParticipant">
                                <small>3rd Member</small>
                                <label for="full-name-3">Full name</label>
                                <input type="text" id="full-name-3" name="full-name-3" placeholder="Insert your full name here"/>
                                <label for="date-birth-3">Date of Birth</label>
                                <input type="date" name="date-birth-3" id="date-birth-3" placeholder="2021-08-21"/>
                                <label for="address-3">Address</label>
                                <input type="text" name="address-3" id="address-3" placeholder="Insert your address here"/>
                                <label for="education-3">Educational Institution</label>
                                <input type="text" name="education-3" id="education-3" placeholder="Insert your educational institution here"/>
                                <label>Scan Identity Card (KTP/KITAS/Kartu Pelajar/KIA)</label>
                                <input type="file" name="idCard[]" accept="image/png, image/jpeg, image/jpg" id="idCard" placeholder="Universitas Multimedia Nusantara" style="color: white;"/>
                            </div>

                            <div class="mt-5 mb-5" id="fourthParticipant">
                                <small>4th Member</small>
                                <label for="full-name-4">Full name</label>
                                <input type="text" id="full-name-4" name="full-name-4" placeholder="Insert your full name here"/>
                                <label for="date-birth-4">Date of Birth</label>
                                <input type="date" name="date-birth-4" id="date-birth-4" placeholder="2021-08-21"/>
                                <label for="address-4">Address</label>
                                <input type="text" name="address-4" id="address-4" placeholder="Insert your address here"/>
                                <label for="education-4">Educational Institution</label>
                                <input type="text" name="education-4" id="education-4" placeholder="Insert your educational institution here"/>
                                <label>Scan Identity Card (KTP/KITAS/Kartu Pelajar/KIA)</label>
                                <input type="file" name="idCard[]" accept="image/png, image/jpeg, image/jpg" id="idCard" placeholder="Universitas Multimedia Nusantara" style="color: white;"/>
                            </div>

                            <div class="mt-5 mb-5" id="fifthParticipant">
                                <small>5th Member</small>
                                <label for="full-name-5">Full name</label>
                                <input type="text" id="full-name-5" name="full-name-5" placeholder="Insert your full name here"/>
                                <label for="date-birth-5">Date of Birth</label>
                                <input type="date" name="date-birth-5" id="date-birth-5" placeholder="2021-08-21"/>
                                <label for="address-5">Address</label>
                                <input type="text" name="address-5" id="address-5" placeholder="Insert your address here"/>
                                <label for="education-5">Educational Institution</label>
                                <input type="text" name="education-5" id="education-5" placeholder="Insert your educational institution here"/>
                                <label>Scan Identity Card (KTP/KITAS/Kartu Pelajar/KIA)</label>
                                <input type="file" name="idCard[]" accept="image/png, image/jpeg, image/jpg" id="idCard" placeholder="Universitas Multimedia Nusantara" style="color: white;"/>
                            </div>
                            <div class="next-container d-none d-md-flex justify-content-end nextBtn">
                                <input type="button" name="next" class="next action-button" value="Next"/>
                            </div>
                        </div>
                    </div>                  
                    <div class=" d-flex d-md-none justify-content-between "> 
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                            <input type="button" name="next" class="next action-button" value="Next"/>
                        </div>        
                </fieldset>
                <fieldset>

                    {{-- <input type="hidden" class="g-recaptcha" name="recaptcha" id="recaptcha" data-sitekey="6Lcfyc8bAAAAAHT_SmEfgzFbTVV0ZTZJWt_IAhjK"> --}}
                        <div class="row" class="decOfAgreement center" style="color: white">
                            
                        </div>
                        <div class="row ms-form-wrapper">
                            <div class="col-12 col-md-4 d-flex flex-column justify-content-between">
                                <h2 class="fs-title text-center text-md-left">Welcome Starlighters!</h2>
                                <div class="next-container d-none d-md-flex justify-content-end flex-column">
                                    <h3 class="fs-subtitle">Before you start your journey with us, please do fill out these forms. The city awaits you!</h3>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                </div>
                            </div>
                            <div class="ms-form-container col-12 col-md-8 decOfAgree ">
                                <h6>Declaration of Agreement</h6>
                                <p class="text-justify">I hereby agree that I truthfully and accurately complete this registration form and that the answers and information I provide are not misleading in any way. Furthermore, I understand that Starlight has the right at any time in its sole discretion to disqualify me from the audition process if at any stage providing personal data that is untrue, inaccurate or misleading, violates the rules or violates the provisions stated here.
                                </p>
                                <div class="form-check agreeForm ">
                                    <input type="checkbox" id="agree" class="agreeCheckBox">
                                    <p>I Agree</p>
                                </div>

                                <div class="row captcha">
                                    <form action="" method="POST">
                                        <div class="g-recaptcha" data-sitekey="6Lcfyc8bAAAAAHT_SmEfgzFbTVV0ZTZJWt_IAhjK"></div>
                                        <br/>
                                        {{-- <input type="submit" value="Submit"> --}}
                                    </form>
                                </div>
                                <div class="next-container d-none d-md-flex justify-content-end nextBtn">
                                    {{-- <input type="button" name="next" class="action-button disabledBtn closeBtn" value="Submit" onclick="window.open('/contestant/complete', '_self')"/> --}}
                                    <input type="submit" name="next" class="action-button disabledBtn closeBtn" value="Submit"/>
                                </div>
                            </div>
                        </div>     
                        <div class=" d-flex d-md-none justify-content-between "> 
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                    <div class="next-container d-flex justify-content-end nextBtn">
                                    {{-- <input type="button" name="next" class="action-button disabledBtn closeBtn" value="Submit" onclick="window.open('/contestant/complete', '_self')"/> --}}
                                    <input type="submit" name="next" class="action-button disabledBtn closeBtn" value="Submit"/>
                                </div>
                   
                        </div>
                </fieldset>
            </form>
            <!-- link to designify.me code snippets -->
            <!-- /.link to designify.me code snippets -->
        </div>
    </div>
    <div class="row d-flex justify-content-center p-3">
                <!-- Button trigger modal -->
                <button type="button" class="regulationBtn" data-toggle="modal" data-target="#istharaModal">
                    Emerging Stage's Terms & Regulations
                </button>
    </div>
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

<!-- /.MultiStep Form -->
    @endsection

@section('custom_js')
        <script src="{{asset('js/starlight2021/smarttab/dist/js/jquery.smartTab.js')}}"></script>
        {{-- <script src="https://www.google.com/recaptcha/api.js?render=6Lcfyc8bAAAAAHT_SmEfgzFbTVV0ZTZJWt_IAhjK"></script> --}}
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        
        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
        <script>
            const secondParticipant = $("#secondParticipant");
            const thirdParticipant = $("#thirdParticipant");
            const fourthParticipant = $("#fourthParticipant");
            const fifthParticipant = $("#fifthParticipant");
            var current_fs, next_fs, previous_fs; //fieldsets
            var left, opacity, scale; //fieldset properties which we will animate
            var animating; //flag to prevent quick multi-click glitches

            $(document).ready(function() {
                thirdParticipant.hide();
                fourthParticipant.hide();
                fifthParticipant.hide();

                $('#agree').change(function(e) {
                    if(e.target.checked) {
                        $('.closeBtn').removeClass('disabledBtn');
                    } else {
                        $('.closeBtn').addClass('disabledBtn');
                    }
                })
            });

            
            // grecaptcha.ready(function() {
            //         grecaptcha.execute('6Lcfyc8bAAAAAHT_SmEfgzFbTVV0ZTZJWt_IAhjK', {action: 'contact'}).then(function(token) {
            //             if (token) {
            //                 document.getElementById('recaptcha').value = token;
            //             }
            //         });
            //     });

            function numOfParticipants(val) {
                var participant = val.value;

                switch(participant) {
                    case "2":
                        secondParticipant.show();
                        thirdParticipant.hide();
                        fourthParticipant.hide();
                        fifthParticipant.hide();
                        break;

                    case "3":
                        secondParticipant.show();
                        thirdParticipant.show();
                        fourthParticipant.hide();
                        fifthParticipant.hide();
                        break;

                    case "4":
                        secondParticipant.show();
                        thirdParticipant.show();
                        fourthParticipant.show();
                        fifthParticipant.hide();
                        break;

                    case "5":
                        secondParticipant.show();
                        thirdParticipant.show();
                        fourthParticipant.show();
                        fifthParticipant.show();
                        break;
                }
            }

            $(".next").click(function() {
                if (animating) return false;
                animating = true;

                current_fs = $(this).closest("fieldset");
                next_fs = $(this)
                    .closest("fieldset")
                    .next();

                //activate next step on progressbar using the index of next_fs
                $("#progressbar li")
                    .eq($("fieldset").index(next_fs))
                    .addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate(
                    { opacity: 0 },
                    {
                    step: function(now, mx) {
                        //as the opacity of current_fs reduces to 0 - stored in "now"
                        //1. scale current_fs down to 80%
                        scale = 1 - (1 - now) * 0.2;
                        //2. bring next_fs from the right(50%)
                        left = now * 50 + "%";
                        //3. increase opacity of next_fs to 1 as it moves in
                        opacity = 1 - now;
                        current_fs.css({
                            transform: "scale(" + scale + ")",
                            position: "absolute"
                        });
                        next_fs.css({ 
                            // left: left,
                            opacity: opacity 
                        });
                    },
                    duration: 1500,
                    complete: function() {
                        current_fs.hide();
                        animating = false;
                    },
                    //this comes from the custom easing plugin
                    easing: "easeOutBack"
                    }
                );
            });

            $(".previous").click(function() {
            if (animating) return false;
            animating = true;

            current_fs = $(this).closest("fieldset");
            previous_fs = $(this)
                .closest("fieldset")
                .prev();

            //de-activate current step on progressbar
            $("#progressbar li")
                .eq($("fieldset").index(current_fs))
                .removeClass("active");

            //show the previous fieldset
            previous_fs.show();
            //hide the current fieldset with style
            current_fs.animate(
                { opacity: 0 },
                {
                step: function(now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale previous_fs from 80% to 100%
                    scale = 0.8 + (1 - now) * 0.2;
                    //2. take current_fs to the right(50%) - from 0%
                    left = (1 - now) * 50 + "%";
                    //3. increase opacity of previous_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({ 
                        // left: left,
                        display: "none"
                    });
                    previous_fs.css({
                        transform: "scale(" + scale + ")",
                        opacity: opacity,
                        position: "relative",
                    });
                },
                duration: 800,
                complete: function() {
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
                easing: "easeOutBack"
                }
            );
            });
</script>



@endsection
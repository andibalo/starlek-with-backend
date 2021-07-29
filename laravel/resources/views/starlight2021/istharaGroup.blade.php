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
  </head>
@endsection

@section('content')
<div class="section-1 d-flex justify-content-center align-items-center">
    <div class="row">
        <div class="col-12 col-md-offset-3">
            <form id="msform" name="formIsthara" action="" onsubmit="" method="post">
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
                        <div class="col-4">
                            <h2 class="fs-title">Welcome Starlighters</h2>
                            <h3 class="fs-subtitle"></h3>
                        </div>
                        <div class="col-8">
                            <label for="link-video d-flex">Video Link</label>
                            <input type="text" id="link-video" name="link-video" placeholder="https://www.instagram.com/starlightumn/"/>
                            <label for="link-video d-flex">Stage Name</label>
                            <input type="text" id="stage-name" name="stage-name" placeholder="Insert your stage name here"/>
                            <label for="link-video d-flex">Talent Description</label>
                            <input type="text" id="talent" name="talent" placeholder="Describe your talent briefly"/>
                            <div class="next-container d-flex justify-content-end">
                                <input type="button" name="next" class="next action-button" value="Next"/>
                            </div>
                            
                        </div>
                    </div>                         
                    
                </fieldset>
                <fieldset>
                    <div class="row ms-form-wrapper">
                        <div class="col-4 d-flex flex-column justify-content-between">
                            <h2 class="fs-title">Welcome Starlighters</h2>
                            <h3 class="fs-subtitle"></h3>
                            <div class="next-container d-flex justify-content-start">
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                            </div>
                        </div>
                        <div class="col-8">
                            <label for="link-video d-flex">LINE ID (representative)</label>
                            <input type="text" name="line-id" id="line-id" placeholder="@starlightumn"/>
                            <label for="link-video d-flex">Phone Number (representative)</label>
                            <input type="number" name="phone-number" id="phone-number" placeholder="+6281122334455"/>
                            <label for="link-video d-flex">Instagram Username</label>
                            <input type="text" name="instagram" id="instagram" placeholder="@starlightumn"/>
                            <label for="link-video d-flex">E-mail Address</label>
                            <input type="text" name="e-mail" id="e-mail" placeholder="starlight@umn.ac.id"/>
                            <label for="link-video d-flex">Number of Performers</label>
                            <input type="number" name="num-participants" id="num-participants" placeholder="0"/>
                            
                            <div class="next-container d-flex justify-content-end">
                                    <input type="button" name="next" class="next action-button" value="Next"/>
                            </div>
                        </div>
                    </div>
                    
                </fieldset>
                <fieldset>
                    <div class="row ms-form-wrapper">
                        <div class="col-4 d-flex flex-column justify-content-between">
                            <h2 class="fs-title">Welcome Starlighters</h2>
                            <h3 class="fs-subtitle"></h3>
                            <div class="next-container d-flex justify-content-start">
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                            </div>
                        </div>
                        <div class="col-8">
                            <label for="link-video d-flex">Full name</label>
                            <input type="text" id="full-name" name="name" placeholder="Insert your full name here"/>
                            <label for="link-video d-flex">Date of Birth</label>
                            <input type="date" name="date-birth" id="date-birth" placeholder="2021-08-21"/>
                            <label for="link-video d-flex">Address</label>
                            <input type="text" name="address" id="address" placeholder="Jl. Scientia Boulevard, Gading, Kec. Serpong, Tangerang, Banten 15227"/>
                            <label for="link-video d-flex">Educational Institution</label>
                            <input type="text" name="education" id="education" placeholder="Universitas Multimedia Nusantara"/>
                            <label for="link-video d-flex">Scan Identity Card (KTP/KITAS/Kartu Pelajar/KIA)</label>
                            <input type="file" name="education" accept="image/png, image/jpeg, image/jpg" id="education" placeholder="Universitas Multimedia Nusantara"/>
                            <div class="next-container d-flex justify-content-end">
                                <input type="submit" name="submit" id="submitBtn" class="submit" value="Submit"/>
                            </div>
                        </div> 
                    </div>                          
                    
                </fieldset>
            </form>
            <!-- link to designify.me code snippets -->
            <!-- /.link to designify.me code snippets -->
        </div>
    </div>
</div>

<!-- /.MultiStep Form -->
    @endsection

@section('custom_js')
        <script src="{{asset('js/starlight2021/smarttab/dist/js/jquery.smartTab.js')}}"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        
        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
        <script>
            var current_fs, next_fs, previous_fs; //fieldsets
            var left, opacity, scale; //fieldset properties which we will animate
            var animating; //flag to prevent quick multi-click glitches


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
                    duration: 800,
                    complete: function() {
                        current_fs.hide();
                        animating = false;
                    },
                    //this comes from the custom easing plugin
                    easing: "easeInOutBack"
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
                duration: 700,
                complete: function() {
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
                easing: "easeInOutBack"
                }
            );
            });
</script>



@endsection
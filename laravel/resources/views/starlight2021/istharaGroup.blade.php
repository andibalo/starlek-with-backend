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
            <form id="msform">
                <!-- progressbar -->
                <ul id="progressbar">
                    <li class="active"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <!-- fieldsets -->
                <fieldset>
                    <h2 class="fs-title">Lot Details</h2>
                    <h3 class="fs-subtitle"></h3>
                    <input type="number" id="spaces" name="spaces" placeholder="Number of Spaces"/>
                    <input type="number" id="parkingPrice" name="parkingPrice" placeholder="Price of parking"/>
                    <input type="number" id="cashParkers" name="cashPay" placeholder="Avg. number of cash payments"/>
                <input type="number" id="util" name="util" placeholder="Lot utilization"/>
                    <input type="button" name="next" class="next action-button" value="Next"/>
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Event Operations</h2>
                    <h3 class="fs-subtitle"></h3>
                    <input type="number" name="eventCount" id="count" placeholder="Events per year"/>
                    <input type="number" name="eventLabor" id="eventLabor" placeholder="Lot attendants per event"/>
                    <input type="number" name="laborRate" id="laborRate" placeholder="Attendant hourly rate"/>
                    <input type="number" name="eventHours" id="hours" placeholder="Labor hours per event"/>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                    <input type="button" name="next" class="next action-button" value="Next"/>
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Additional Information</h2>
                    <h3 class="fs-subtitle">Fill in your credentials to get your ROI report</h3>
                    <input type="text" id="email" name="email" placeholder="Email"/>
                    <input type="text" id="full_name" name="name" placeholder="Name"/>
                    <input type="text" name="company" id="company" placeholder="Copmany"/>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                    <input type="submit" name="submit" id="submitBtn" class="submit action-button" value="Submit"/>
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

            current_fs = $(this).parent();
            next_fs = $(this)
                .parent()
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

            current_fs = $(this).parent();
            previous_fs = $(this)
                .parent()
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
@extends('starlight2021.template.base')



<!-- Custom CSS -->
@section('custom_css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="{{asset('js/starlight2021/smarttab/dist/css/smart_tab.min.css')}}"  />
    <link rel="stylesheet" href="{{asset('css/starlight2021/pages/isthara.css')}}" />
  </head>
@endsection

    @section('content')
    <div class="section-1 mt-5 d-flex">
        <div class="form-box segment d-flex">
            <div class="welcome-box">
                <h1>Welkam</h1>
            </div>
            <form name="formIsthara" action="" onsubmit="return validateForm()" method="post">
                @csrf
                <div class="row ">
                        <div class="col-12 p-2">
                            <label for="fname">Link Video</label><br>
                            <input type="text" placeholder="https:/." id="link-video" name="link-video" value=""><br>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-6 p-2">
                            <label for="lname">Stage Name</label><br>
                            <input type="text" placeholder="Enter your stage name" id="stage-name" name="stage-name" value=""><br>
                        </div>
                        <div class="col-6 p-2">
                            <label for="lname">Talent</label><br>
                            <input type="text" placeholder="Describe your talent" id="talent" name="talent" value=""><br>
                        </div>                
                    </div>

                    <div class="row ">
                        <div class="col-12 p-2">
                            <label for="lname">Line ID</label><br>
                            <input type="text" placeholder="Enter your representatives LINE ID" id="line-id" name="line-id" value=""><br>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-12 p-2">
                            
                            <label for="lname">Phone Number</label><br>
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping"><img src="{{ asset('images/starlight2021/logo-indo.png') }}" alt=""></span>
                                <input type="text" placeholder="Enter your phone number" id="phone-number" name="phone-number" value="" aria-describedby="addon-wrapping"><br>
                            </div>
                            
                        </div>
                    </div>
                    <input type="submit" value="Submit">
            </form> 
        </div>
    </div>
    
    @endsection

    @section('custom_js')
        <script src="{{asset('js/starlight2021/smarttab/dist/js/jquery.smartTab.js')}}"></script>
        
        <script>
            function validateForm() {
                let x = document.forms["formIsthara"]["link-video"].value;
                if (x == "") {
                    alert("must be filled");
                    return false;
                }
            }
        </script>
        
    @endsection

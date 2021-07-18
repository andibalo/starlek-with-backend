@extends('starlight2021.template.base')



<!-- Custom CSS -->
@section('custom_css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="{{asset('js/starlight2021/smarttab/dist/css/smart_tab.min.css')}}"  />
    <link rel="stylesheet" href="{{asset('css/starlight2021/pages/citymap.css')}}" />
<style>
	.navbar{
	  display:none !important;
	}
	
video {
  position: fixed;
  height: 100vh;
  width: 100vw;
  object-fit: cover;
}

.desktop-screen {
  z-index: 1;
}
	
#page .nav-link.navBtn {
  position: absolute;
  z-index: 2;
  background: var(--color-secondary);
  border-radius: 50px;
  padding-left: 3%;
  padding-right: 3%;
  border: 2px solid var(--color-primary);
  margin-right: 0;
  color: var(--color-primary);
  box-shadow: 0 0 10px rgba(245, 220, 175, 0.7);
  margin-left: 2%;
  top: 30px;
}
	
@media (max-width: 767px) {
  .desktop-screen {
    display: none;
  }
}
</style>
  </head>
@endsection

  @section('content')
  <!-- CONTENT -->
 <div class="button">
        <a class="nav-link navBtn" href="/">Home</a>
      </div>
        <div
        class="main container d-flex justify-content-center align-items-center"
     
      >
       <video
          class="desktop-screen"
          src="{{asset('./images/starlight2021/videos/720p_web optimized.m4v')}}"
          autoplay
          loop
          muted
        ></video>
        <video
          class="mobile-screen"
          src="{{asset('./images/starlight2021/videos/720p_mobile web optimized.m4v')}}"
          autoplay
          loop
          muted
        ></video>
      </div>
    
      @endsection

      @section('custom_js')
  
@endsection

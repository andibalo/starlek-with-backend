@extends('starlight2021.template.base')



<!-- Custom CSS -->
@section('custom_css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{asset('css/starlight2021/pages/pick.css')}}" />
  </head>
@endsection

@section('content')
<div class="section-1 container">
    <h1>Pick The Isthara</h1>
    <div class="row">
        <div class="col-2">
            <img src="https://images.unsplash.com/photo-1597589827317-4c6d6e0a90bd?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="" width="100%">
            <button>NEXT</button>
        </div>
        <div class="col-2">
            <img src="https://images.unsplash.com/photo-1597589827317-4c6d6e0a90bd?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="" width="100%">
            <button>NEXT</button>
        </div>
        <div class="col-2">
            <img src="https://images.unsplash.com/photo-1597589827317-4c6d6e0a90bd?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="" width="100%">
            <button>NEXT</button>
        </div>
        <div class="col-2">
            <img src="https://images.unsplash.com/photo-1597589827317-4c6d6e0a90bd?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="" width="100%">
            <button>NEXT</button>
        </div>
        <div class="col-2">
            <img src="https://images.unsplash.com/photo-1597589827317-4c6d6e0a90bd?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="" width="100%">
            <button>NEXT</button>
        </div>
        <div class="col-2">
            <img src="https://images.unsplash.com/photo-1597589827317-4c6d6e0a90bd?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="" width="100%">
            <button>NEXT</button>
        </div>
        <div class="col-2">
            <img src="https://images.unsplash.com/photo-1597589827317-4c6d6e0a90bd?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="" width="100%">
            <button>NEXT</button>
        </div>
        <div class="col-2">
            <img src="https://images.unsplash.com/photo-1597589827317-4c6d6e0a90bd?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="" width="100%">
            <button>NEXT</button>
        </div>
        <div class="col-2">
            <img src="https://images.unsplash.com/photo-1597589827317-4c6d6e0a90bd?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="" width="100%">
            <button>NEXT</button>
        </div>
    </div>

    <div class="submit-button"><button>Submit All</button></div>
</div>
@endsection

@section('custom_js')
        <script src="{{asset('js/starlight2021/smarttab/dist/js/jquery.smartTab.js')}}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
@endsection
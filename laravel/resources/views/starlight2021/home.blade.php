@extends('starlight2021.template.base')



<!-- Custom CSS -->
@section('custom_css')

    <link rel="stylesheet" href="{{asset('css/starlight2021/pages/home.css')}}" />

@endsection

  @section('content')
  <!-- CONTENT -->
  <div class="background" style="background-image: url('{{ asset('images/starlight2021/bghome.png') }}');">
        <div class="container mainContent">
			<div class="homeSection">
			    <img
					src="{{ asset('images/starlight2021/logo-600.png') }}"
					alt="Logo Starlight"
					class="logo-content-home wow fadeInUp"
					data-wow-delay="3000ms"
				/>
          		<h5 class="present wow fadeInUp" data-wow-delay="3200ms">PRESENTS</h5>
			</div>
      
          <h1 class="city wow fadeInUp">CITY OF STARS</h1>
          <p class="paragraph wow fadeInUp"> 
            Welcome to StarCity, where every day here is full of excitement! But suddenly, the global pandemic struck and the city was no longer the same. The Covid-19 pandemic hits really hard that it disturbs the mental health of the StarCity population. People are anxious, empty, angry, depressed, and even scared to get out. To help the people deal with this fear, the creative team of Starlight 2021 arranges another annual event to lighten back the city by only expressing talents and creativity. So, are you ready to join the fun on the quest from EMERGING, DAZZLING, and to find the next RISING star?

          </p>
          <img  src="{{ asset('images/starlight2021/Infinite.png') }}" alt="Infinite" class="infinite wow fadeInUp" data-wow-iteration="1" />
          <h1 class="tinfinite wow fadeInUp">INFINITE</h1>
          <p class="paragraph wow fadeInUp">
            In 2021, it will be the 8th edition of Starlight UMN. The number 8
            has a special meaning which resembles the symbol of infinity. The
            theme INFINITE was raised to illustrate the ability to explore self
            potential as freely as possible like a star that shines without
            limits.
          </p>
        </div>
      </div>
  @endsection

@section('custom_js')
  
@endsection

@extends('starlight2021.template.base')



<!-- Custom CSS -->
@section('custom_css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{asset('css/starlight2021/pages/about-starbook.css')}}" />
  </head>
@endsection

@section('content')
<div class="section-1 px-3 flex-column">
    <div class="row">
        <div class="col-4 justify-content-center d-flex flex-column">
            <h1 class="pb-2">All About The StarBook</h1>
            <img src="https://images.unsplash.com/photo-1504600770771-fb03a6961d33?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=502&q=80" alt="" width="100%">
        </div>
        <div class="col-7">
            <p><b>Hello Judges! Welcome to Dazzling Stage!</b></p>
            <p>Berikut langkah-langkah juri untuk dapat menilai para Isthara</p>
            <ol>
                <li>Silahkan pilih tombol "Next" untuk dapat menilai para Isthara.</li>
                <li>Silahkan pilih tombol "Next" untuk dapat menilai para Isthara.</li>
                <li>Silahkan pilih tombol "Next" untuk dapat menilai para Isthara.</li>
                <li>Silahkan pilih tombol "Next" untuk dapat menilai para Isthara.</li>
            </ol>
            <p>Berikut langkah-langkah juri untuk dapat menilai para Isthara</p>
            <table>
                <tr>
                    <th>Kriteria</th>
                    <th>%</th>
                    <th>Keterangan</th>
                </tr>
                <tr>
                    <td>Penguasaan Skill</td>
                    <td>40%</td>
                    <td>Isthara dapat menguasai pengetahuan teknis dan memaksimalkan bakat dan keterampilan dengan baik</td>
                </tr>
                <tr>
                    <td>Penguasaan Skill</td>
                    <td>40%</td>
                    <td>Isthara dapat menguasai pengetahuan teknis dan memaksimalkan bakat dan keterampilan dengan baik</td>
                </tr>
                <tr>
                    <td>Penguasaan Skill</td>
                    <td>40%</td>
                    <td>Isthara dapat menguasai pengetahuan teknis dan memaksimalkan bakat dan keterampilan dengan baik</td>
                </tr>
                <tr>
                    <td>Penguasaan Skill</td>
                    <td>40%</td>
                    <td>Isthara dapat menguasai pengetahuan teknis dan memaksimalkan bakat dan keterampilan dengan baik</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="button pt-5">
        <button>NEXT</button>
    </div>
</div>
@endsection

@section('custom_js')
        <script src="{{asset('js/starlight2021/smarttab/dist/js/jquery.smartTab.js')}}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
@endsection
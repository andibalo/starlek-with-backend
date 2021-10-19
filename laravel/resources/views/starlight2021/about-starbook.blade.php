@extends('starlight2021.template.base')



<!-- Custom CSS -->
@section('custom_css')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<link rel="stylesheet" href="{{asset('css/starlight2021/pages/about-starbook.css')}}" />
</head>
@endsection

@section('content')
<div class="section-1 pt-5 mt-5 container flex-column">
    <div class="row">
        <div class="col-lg-4 col-12 justify-content-center d-flex flex-column pb-3 position-relative">
            <h1 class="pb-2 text-uppercase">All About The StarBook</h1>
            <img src="{{ asset('images/starlight2021/judge/background2-2.png') }}" alt="" class="starbook-bg">
        </div>
        <div class="col-lg-7 col-12">
            <p><b>Hello Judges! Welcome to Dazzling Stage!</b></p>
            <p>Berikut langkah-langkah juri untuk dapat menilai para Isthara:</p>
            <ol>
                <li>Berikan penilaian Anda untuk seluruh Isthara, sesuai dengan persentase yang tertera.</li>
                <li>Setelah semua Isthara sudah diberikan nilai, silakan pilih tombol “Submit All”.</li>
            </ol>
            <p>Bobot penilaian: </p>
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
                    <td>Konsep</td>
                    <td>25%</td>
                    <td>Isthara dapat mengemas bakat dan keterampilan mereka sesuai dengan konsep Dazzling Starlight 2021.</td>
                </tr>
                <tr>
                    <td>Kreativitas</td>
                    <td>20%</td>
                    <td>Isthara mampu menampilkan sesuatu yang berbeda dengan ide yang baru. </td>
                </tr>
                <tr>
                    <td>Kostum</td>
                    <td>15%</td>
                    <td>Isthara dapat menyesuaikan kostum atau pakaian yang Isthara gunakan sesuai dengan konsep Dazzling.</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="button py-5">
        <a href="/judge/pick/isthara"><button>NEXT</button></a>
    </div>
</div>
@endsection

@section('custom_js')
<script src="{{asset('js/starlight2021/smarttab/dist/js/jquery.smartTab.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

@endsection
@extends('starlight2021.template.base')



<!-- Custom CSS -->
@section('custom_css')
<link rel="stylesheet" href="{{asset('css/starlight2021/pages/istharaScore.css')}}" />

@endsection

@section('content')
<div class="row">
    <div class="col-4 pick-isthara-section">
        <div class="isthara-section-title text-center">
            <h1>ISTHARA</h1>
        </div>
        <div class="container text-center">
            @foreach($data as $val)
            <div class="box-container p-3">
                <div class="box istharaPic d-flex align-items-center" data-attr="{{$val['peserta']}}">
                    <img src="{{$val[0]}}" alt="" class="img-fluid istharaImg">
                    @if($val['status'] == 'terisi')
                    <div class="isthara-check">
                        <i class="fas fa-check"></i>
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
            <div class="btn-container justify-content-center my-4">
                <button class="submitBtn" id="logoutBtn">Log Out</button>
            </div>
        </div>
    </div>
    <div class="col-8 ">
        <div class="row pt-5 scoring-section">
            <div class="col-2 scoring-text">
                <h4> RISING STAGE </h4>
                <p>TALENT</p>
                <p>SKALA PENILAIAN</p>
                <ul>
                    <li>1 Bintang = Sangat Kurang</li>
                    <li>2 Bintang = Kurang</li>
                    <li>3 Bintang = Cukup</li>
                    <li>4 Bintang = Baik</li>
                    <li>5 Bintang = Sangat Baik</li>
                </ul>
            </div>
            <div class="col-9 d-flex flex-column">
                <form action="/judge/pick/isthara" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" id="judges" name="judge" value="">
                    <input type="hidden" name="namaIsthara" value="{{$data[0]['peserta']}}">
                    <div class="scoring-box w-100 py-2">
                        <p class="criteria-title">Penguasaan Skill</p>
                        <div class="wrapper">
                            <div class="d-flex justify-content-around">
                                <div class="d-flex flex-column">
                                    <label for="skill1">1</label>
                                    <input type="radio" id="skill1" name="penguasaanSkill" value="1" checked class="skill-star test-star">
                                    <img src="" alt="">
                                </div>
                                <div class="d-flex flex-column">
                                    <label for="skill2">2</label>
                                    <input type="radio" id="skill2" name="penguasaanSkill" value="2" class="skill-star">
                                </div>
                                <div class="d-flex flex-column">
                                    <label for="skill3">3</label>
                                    <input type="radio" id="skill3" name="penguasaanSkill" value="3" class="skill-star">
                                </div>
                                <div class="d-flex flex-column">
                                    <label for="skill4">4</label>
                                    <input type="radio" id="skill4" name="penguasaanSkill" value="4" class="skill-star">
                                </div>
                                <div class="d-flex flex-column">
                                    <label for="skill5">5</label>
                                    <input type="radio" id="skill5" name="penguasaanSkill" value="5" class="skill-star">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="scoring-box w-100 py-2">
                        <p class="criteria-title">Konsep</p>
                        <div class="wrapper">
                            <div action="#" class="d-flex justify-content-around">
                                <div class="d-flex flex-column">
                                    <label for="konsep1">1</label>
                                    <input type="radio" id="konsep6" name="konsep" value="1" checked class="konsep-star test-star">
                                </div>
                                <div class="d-flex flex-column">
                                    <label for="konsep2">2</label>
                                    <input type="radio" id="konsep2" name="konsep" value="2" class="konsep-star">
                                </div>
                                <div class="d-flex flex-column">
                                    <label for="konsep3">3</label>
                                    <input type="radio" id="konsep3" name="konsep" value="3" class="konsep-star">
                                </div>
                                <div class="d-flex flex-column">
                                    <label for="konsep4">4</label>
                                    <input type="radio" id="konsep4" name="konsep" value="4" class="konsep-star">
                                </div>
                                <div class="d-flex flex-column">
                                    <label for="konsep5">5</label>
                                    <input type="radio" id="konsep5" name="konsep" value="5" class="konsep-star">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="scoring-box w-100 py-2">
                        <p class="criteria-title">Kreativitas</p>
                        <div class="wrapper">
                            <div action="#" class="d-flex justify-content-around">
                                <div class="d-flex flex-column">
                                    <label for="kreativitas1">1</label>
                                    <input type="radio" id="kreativitas1" name="kreativitas" value="1" checked class="kreativitas-star test-star">
                                </div>
                                <div class="d-flex flex-column">
                                    <label for="kreativitas2">2</label>
                                    <input type="radio" id="kreativitas2" name="kreativitas" value="2" class="kreativitas-star">
                                </div>
                                <div class="d-flex flex-column">
                                    <label for="kreativitas3">3</label>
                                    <input type="radio" id="kreativitas3" name="kreativitas" value="3" class="kreativitas-star">
                                </div>
                                <div class="d-flex flex-column">
                                    <label for="kreativitas4">4</label>
                                    <input type="radio" id="kreativitas4" name="kreativitas" value="4" class="kreativitas-star">
                                </div>
                                <div class="d-flex flex-column">
                                    <label for="kreativitas5">5</label>
                                    <input type="radio" id="kreativitas5" name="kreativitas" value="5" class="kreativitas-star">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="scoring-box w-100 py-2">
                        <p class="criteria-title">Kostum</p>
                        <div class="wrapper">
                            <div action="#" class="d-flex justify-content-around">
                                <div class="d-flex flex-column">
                                    <label for="kostum1">1</label>
                                    <input type="radio" id="kostum1" name="kostum" value="1" checked class="kostum-star test-star">
                                </div>
                                <div class="d-flex flex-column">
                                    <label for="kostum2">2</label>
                                    <input type="radio" id="kostum2" name="kostum" value="2" class="kostum-star">
                                </div>
                                <div class="d-flex flex-column">
                                    <label for="kostum3">3</label>
                                    <input type="radio" id="kostum3" name="kostum" value="3" class="kostum-star">
                                </div>
                                <div class="d-flex flex-column">
                                    <label for="kostum4">4</label>
                                    <input type="radio" id="kostum4" name="kostum" value="4" class="kostum-star">
                                </div>
                                <div class="d-flex flex-column">
                                    <label for="kostum5">5</label>
                                    <input type="radio" id="kostum5" name="kostum" value="5" class="kostum-star">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-container mt-4">
                        <button type="submit" name="submit" class="submitBtn">Save</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

<!-- <div class="section-1 container">


    <div class="container">
        <div class="row pb-2 mb-2 ml-1">
            <button>
                Back
            </button>
        </div>
        <h1 class="pb-2 text-center m-0">TABEL PENILAIAN ISTHARA</h1>
        <form action="" method="post">
            @csrf
            <table>

                <thead>
                    <tr>
                        <th scope="col">Nama Isthara</th>
                        <th scope="col">Penguasaan Skill</th>
                        <th scope="col">Konsep</th>
                        <th scope="col">Kreativitas</th>
                        <th scope="col">Kostum</th>
                    </tr>
                </thead>
                <tbody>
                    <input type="hidden" id="judges" name="judge" value="">
                    @foreach($data as $data)
                    <tr>
                        <input type="hidden" name="namaIsthara[]" value="{{$data[0]}}" />
                        <td data-label="nama-isthara" name="nama-isthara">{{$data[0]}}</td>

                        <td data-label="penguasaan-skill">
                            <input type="number" name="penguasaanSkill[]" min="1" max="5" value="1">
                        </td>
                        <td data-label="konsep">
                            <input type="number" name="konsep[]" min="1" max="5" value="1" value="1">
                        </td>
                        <td data-label="kreativitas">
                            <input type="number" name="kreativitas[]" min="1" max="5" value="1" value="1">
                        </td>
                        <td data-label="kostum">
                            <input type="number" name="kostum[]" min="1" max="5" value="1" value="1">
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row p-2 my-3 mr-1 justify-content-end">
                <button type="submit" name="submit">
                    Submit All
                </button>
            </div>
        </form>
    </div>

    <div class="d-none row justify-content-between pt-2">
        <div class="col-md-3 col-12 isthara-profile d-flex flex-column text-left align-items-md-start align-items-center">
            <div class="profile-picture">
                <img src="{{ asset('images/starlight2021/logo.png') }}" />
            </div>
            <h3 class="pt-5">Isthara Name</h1>
                <p class="pb-4">Talent</p>
                <h5>Skala Penilaian</h5>
                <h6>1 = Sangat Kurang</h6>
                <h6>2 = Kurang</h6>
                <h6>3 = Baik</h6>
                <h6>4 = Sangat Baik</h6>

        </div>
        <div class="col-md-8 col-12 d-flex flex-column">
            <h3>CRITERIA</h3>
            <form action="">
                <div class="scoring-box py-4">
                    <div class="wrapper ">
                        <p>Penguasaan Skill</p>
                        <div action="#" class="d-flex justify-content-around p-3">
                            <div class="d-flex flex-column">
                                <label for="test1">1</label>
                                <input type="radio" id="test1" name="radio-group" value="1">
                            </div>
                            <div class="d-flex flex-column">
                                <label for="test2">2</label>
                                <input type="radio" id="test2" name="radio-group" value="2">
                            </div>
                            <div class="d-flex flex-column">
                                <label for="test3">3</label>
                                <input type="radio" id="test3" name="radio-group" value="3">
                            </div>
                            <div class="d-flex flex-column">
                                <label for="test3">4</label>
                                <input type="radio" id="test3" name="radio-group" value="4">
                            </div>
                            <div class="d-flex flex-column">
                                <label for="test3">5</label>
                                <input type="radio" id="test3" name="radio-group" value="5">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="scoring-box py-4">
                    <div class="wrapper ">
                        <p>Penguasaan Skill</p>
                        <div action="#" class="d-flex justify-content-around p-3">
                            <div class="d-flex flex-column">
                                <label for="test1">1</label>
                                <input type="radio" id="test1" name="radio-group" value="1">
                            </div>
                            <div class="d-flex flex-column">
                                <label for="test2">2</label>
                                <input type="radio" id="test2" name="radio-group" value="2">
                            </div>
                            <div class="d-flex flex-column">
                                <label for="test3">3</label>
                                <input type="radio" id="test3" name="radio-group" value="3">
                            </div>
                            <div class="d-flex flex-column">
                                <label for="test3">4</label>
                                <input type="radio" id="test3" name="radio-group" value="4">
                            </div>
                            <div class="d-flex flex-column">
                                <label for="test3">5</label>
                                <input type="radio" id="test3" name="radio-group" value="5">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="scoring-box py-4">
                    <div class="wrapper ">
                        <p>Penguasaan Skill</p>
                        <div action="#" class="d-flex justify-content-around p-3">
                            <div class="d-flex flex-column">
                                <label for="test1">1</label>
                                <input type="radio" id="test1" name="radio-group" value="1">
                            </div>
                            <div class="d-flex flex-column">
                                <label for="test2">2</label>
                                <input type="radio" id="test2" name="radio-group" value="2">
                            </div>
                            <div class="d-flex flex-column">
                                <label for="test3">3</label>
                                <input type="radio" id="test3" name="radio-group" value="3">
                            </div>
                            <div class="d-flex flex-column">
                                <label for="test3">4</label>
                                <input type="radio" id="test3" name="radio-group" value="4">
                            </div>
                            <div class="d-flex flex-column">
                                <label for="test3">5</label>
                                <input type="radio" id="test3" name="radio-group" value="5">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="scoring-box py-4">
                    <div class="wrapper ">
                        <p>Penguasaan Skill</p>
                        <div action="#" class="d-flex justify-content-around p-3">
                            <div class="d-flex flex-column">
                                <label for="test1">1</label>
                                <input type="radio" id="test1" name="radio-group" value="1">
                            </div>
                            <div class="d-flex flex-column">
                                <label for="test2">2</label>
                                <input type="radio" id="test2" name="radio-group" value="2">
                            </div>
                            <div class="d-flex flex-column">
                                <label for="test3">3</label>
                                <input type="radio" id="test3" name="radio-group" value="3">
                            </div>
                            <div class="d-flex flex-column">
                                <label for="test3">4</label>
                                <input type="radio" id="test3" name="radio-group" value="4">
                            </div>
                            <div class="d-flex flex-column">
                                <label for="test3">5</label>
                                <input type="radio" id="test3" name="radio-group" value="5">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> -->
@endsection

@section('custom_js')
<script>
    var code = localStorage.getItem("judgeCode");
    $('#judges').val(code);
    console.log($('#judges').val());

    $(document).ready(function() {
        //console.log($('input[name="namaIsthara"]').val())
        $('.istharaPic').first().addClass("isActive");
        $('.istharaPic').on("click", function() {
            $('.istharaPic').removeClass("isActive");
            $(this).addClass("isActive");
            $('input[name="namaIsthara"]').val($(this).attr("data-attr"));
            // console.log($('input[name="namaIsthara"]').val())
            // console.log($(this).attr("data-attr"));
        })
    })

    $('input[type="radio"]').on("click", function(event) {
        var cat = event.target.classList[0];
        $("." + cat).removeClass('test-star');
        $(this).addClass('test-star');
    })

    $('#logoutBtn').on("click", function(e) {
        e.preventDefault();
        localStorage.removeItem('judgeCode');
        window.location.replace('/judge/thanks');
        console.log("Bye bye!");
    })
</script>

@endsection
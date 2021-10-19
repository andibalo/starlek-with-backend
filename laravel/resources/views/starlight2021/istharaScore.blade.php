@extends('starlight2021.template.base')



<!-- Custom CSS -->
@section('custom_css')
    <link rel="stylesheet" href="{{asset('css/starlight2021/pages/istharaScore.css')}}" />

@endsection

@section('content')
<div class="section-1 container">
    <div class="row pb-2">
        <button>
            Back
        </button>
    </div>
    <div class="row justify-content-between pt-2">
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
            <div class="scoring-box py-4">
                <div class="wrapper ">
                    <p>Penguasaan Skill</p>
                    <form action="#" class="d-flex justify-content-around p-3">
                        <div class="d-flex flex-column">
                            <label for="test1">1</label>
                            <input type="radio" id="test1" name="radio-group" value="1" checked>
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
                    </form>
                </div>
            </div>
            <div class="scoring-box py-4">
                <div class="wrapper ">
                    <p>Penguasaan Skill</p>
                    <form action="#" class="d-flex justify-content-around p-3">
                        <div class="d-flex flex-column">
                            <label for="test1">1</label>
                            <input type="radio" id="test1" name="radio-group" value="1" checked>
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
                    </form>
                </div>
            </div>
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
</div>
@endsection

@section('custom_js')
    
@endsection
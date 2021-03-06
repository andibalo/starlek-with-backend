@extends('starlight2021.template.base')



<!-- Custom CSS -->
@section('custom_css')
<link rel="stylesheet" href="{{asset('css/starlight2021/pages/voting.css')}}" />
@endsection

@section('content')
<div class="vote-bg">

    <div class="section-voting" id="voteChoices">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center pt-5">
                <h1>VOTE YOUR ISTHARA</h1>
            </div>
            <div class="row pt-2">
                @foreach($data as $val)
                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                    <div class="box-container">
                        <div class="box">
                            <img src="{{$val[0]}}" alt="" class="w-100">
                        </div>
                        <p>{{$val['dname']}}</p>
                        <div class="vote-button">
                            <button id="voted" data-name="{{$val['peserta']}}" data-dname="{{$val['dname']}}" data-totalvote="{{$val['totalVote']}}">VOTE</button>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                    <div class="box-container">
                        <div class="box">
                            <img src="{{ asset('images/starlight2021/voting/muka/Archieta.jpg') }}" alt="" class="w-100">

                        </div>
                        <p>Archieta Aditya</p>
                        <div class="vote-button">
                            <button id="voted">VOTE</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                    <div class="box-container">
                        <div class="box">
                            <img src="{{ asset('images/starlight2021/voting/muka/Aurellia.jpg') }}" alt="" class="w-100">

                        </div>
                        <p>Aurellia Gracia Lusi</p>
                        <div class="vote-button">
                            <button id="voted">VOTE</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                    <div class="box-container">
                        <div class="box">
                            <img src="{{ asset('images/starlight2021/voting/muka/Bryan.jpg') }}" alt="" class="w-100">

                        </div>
                        <p>Bryan Zen</p>
                        <div class="vote-button">
                            <button id="voted">VOTE</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                    <div class="box-container">
                        <div class="box">
                            <img src="{{ asset('images/starlight2021/voting/muka/Chika.png') }}" alt="" class="w-100">

                        </div>
                        <p>Chika Megan</p>
                        <div class="vote-button">
                            <button id="voted">VOTE</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                    <div class="box-container">
                        <div class="box">
                            <img src="{{ asset('images/starlight2021/voting/muka/Fadly.jpg') }}" alt="" class="w-100">

                        </div>
                        <p>Fadly Ali</p>
                        <div class="vote-button">
                            <button id="voted">VOTE</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                    <div class="box-container">
                        <div class="box">
                            <img src="{{ asset('images/starlight2021/voting/muka/Graciella.png') }}" alt="" class="w-100">

                        </div>
                        <p>Graciella Olivia</p>
                        <div class="vote-button">
                            <button id="voted">VOTE</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                    <div class="box-container">
                        <div class="box">
                            <img src="{{ asset('images/starlight2021/voting/muka/Robert.jpg') }}" alt="" class="w-100">

                        </div>
                        <p>ROBERT TAN</p>
                        <div class="vote-button">
                            <button id="voted">VOTE</button>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>


    <div class="login-vote justify-content-center align-items-center p-2" id="voteForm">
        <form action="" class="form-vote">
            @csrf
            <div class="input-container d-flex flex-column py-2">
                <label for="Name">Name</label>
                <input type="text" name="Name" id="">
            </div>
            <div class="input-container d-flex flex-column py-2">
                <label for="Email">Email</label>
                <input type="text" name="Email" id="">
            </div>
            <div class="submit-container d-flex justify-content-center pt-4">
                <input type="button" value="SUBMIT" class="voteBtn">
            </div>
        </form>
    </div>

</div>
@endsection

@section('custom_js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    var name;
    var email;

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".vote-button button").on("click",
        function() {
            // get isthara name
            let istharaName = $(this).data('name');
            let istharaDName = $(this).data('dname');
            let totalVote = $(this).data('totalvote');
            // console.log(istharaName);
            console.log(totalVote);

            Swal.fire({
                title: 'SUBMIT VOTE?',
                showCancelButton: true,
                confirmButtonText: 'YES',
                cancelButtonText: "cancel",
                customClass: {
                    container: 'sweet-alert-container',
                    popup: 'sweet-alert-popup',
                    actions: 'sweet-alert-actions',
                    title: 'sweet-alert-title',
                    confirmButton: 'sweet-alert-button',
                    cancelButton: 'sweet-alert-cancel',
                },
                isConfirmed: function() {
                    console.log("hlelel");
                }
            }).then(function(ctx) {
                if (ctx.isConfirmed) {
                    // ajax send req
                    $.ajax({
                        type: 'POST',
                        url: "/voting",
                        data: {
                            email,
                            istharaName,
                            totalVote: Number(totalVote)
                        },
                        success: function(hasVoted) {
                            Swal.fire({
                                title: 'You voted ' + istharaDName + ' Thank you for the support.',
                                text: 'Stay tuned for the announcement of "Isthara Favorite" on 20.40 WIB.',
                                footer: 'click anywhere to close',
                                showConfirmButton: false,
                                customClass: {
                                    container: 'sweet-alert-container',
                                    popup: 'sweet-alert-popup2',
                                    title: 'sweet-alert-title2',
                                    htmlContainer: 'sweet-alert-text2',
                                    footer: 'sweet-alert-footer2'
                                },
                            }).then(function() {
                                window.location.replace('/');
                            })
                        }
                    });
                }
            }).then(function(ctx) {
                if (ctx.isDismissed) {
                    window.location.replace('/');
                }
            })


        });


    // input nama dan email voters
    $("#voteForm input[type=button]").on("click",
        function(e) {
            e.preventDefault();

            name = $("input[name=Name]").val();
            email = $("input[name=Email]").val();

            $.ajax({
                type: 'POST',
                url: "/voting/voters",
                data: {
                    name: name,
                    email: email
                },
                success: function(hasVoted) {
                    if (hasVoted) {
                        alert("You have already voted. Please wait for the announcement!");
                    } else {
                        $("#voteForm").fadeOut("slow", function() {
                            $("#voteChoices").fadeIn("slow");
                            $("html").css("overflow", "visible");
                        });
                    }
                }
            });

        }
    )
</script>
@endsection
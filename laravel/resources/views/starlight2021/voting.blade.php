@extends('starlight2021.template.base')



<!-- Custom CSS -->
@section('custom_css')
    <link rel="stylesheet" href="{{asset('css/starlight2021/pages/voting.css')}}" />
@endsection

@section('content')
<div class="section-voting">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="box-container">
                    <div class="box">

                    </div>
                    <p>Isthara</p>
                    <div class="vote-button">
                        <button id="voted">Vote</button>
                    </div>
                </div>
           </div>
            <div class="col-3">
                <div class="box-container">
                    <div class="box">

                    </div>
                    <p>Isthara</p>
                    <div class="vote-button">
                        <button>Vote</button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="box-container">
                    <div class="box">

                    </div>
                    <p>Isthara</p>
                    <div class="vote-button">
                        <button>Vote</button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="box-container">
                    <div class="box">

                    </div>
                    <p>Isthara</p>
                    <div class="vote-button">
                        <button>Vote</button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="box-container">
                    <div class="box">

                    </div>
                    <p>Isthara</p>
                    <div class="vote-button">
                        <button>Vote</button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="box-container">
                    <div class="box">

                    </div>
                    <p>Isthara</p>
                    <div class="vote-button">
                        <button>Vote</button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="box-container">
                    <div class="box">

                    </div>
                    <p>Isthara</p>
                    <div class="vote-button">
                        <button>Vote</button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="box-container">
                    <div class="box">

                    </div>
                    <p>Isthara</p>
                    <div class="vote-button">
                        <button>Vote</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
    
@endsection

@section('custom_js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $("#voted").on( "click", 
        function() {
            Swal.fire({
                title: 'Submit Vote',
                showCancelButton: true,
                confirmButtonText: 'YES',
                customClass: {
                    popup: 'sweet-alert-container',       
                    }
            })
                
    });
</script>
@endsection
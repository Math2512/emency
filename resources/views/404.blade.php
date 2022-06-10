@extends('layouts.base') 

@section('meta-page') - 404 @endsection
@section('content')

<div class="pr-3 pl-3 pb-3 mb-2">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12 text-center mt-5 pt-5">
                <h1 class="font-weight-bold display-3">404<span id="colour-js-errors" class="display-3">.<span></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-center">
                    <img style="width:60%" class="img-responsive" loading="lazy" src="{{ asset('storage/404.gif') }}" alt="Erreur 404">
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a class="btn btn-primary font-weight-bold" href="{{ route('app.index') }}">HOME</a>
        </div>
    </div>
</div>
@endsection

@section('errors-scripts')
<script>
    let colors = ['#5361F0','#F398CD','#FDE24B','#57E8B5'];
    var z = document.getElementById("colour-js-errors");
    let i= 0;
    
    function changeColor(){
        c = Math.floor(Math.random() * colors.length);
        z.style.color = colors[c];
    }
    
    window.setInterval(changeColor,1000 );
</script>
@endsection
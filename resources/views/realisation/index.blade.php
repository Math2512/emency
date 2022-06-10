@extends('layouts.base') 
@section('meta-page')Réalisations @endsection
@section('meta-realisation-index')
    <meta name="description" content="Découvrez les projets digitaux réalisés par l'agence emency."> 
@endsection
 
@section('content')

<div class="pr-3 pl-3 pb-3 mb-2">
    <div class="container">
        <div class="row mb-3 pb-1">
            <div class="col-md-12 text-center">
                <h1 class="font-weight-bold display-5">Réalisations<span id="colour-js-realisation" class="display-3">.<span></h1>
            </div>
        </div>
        <div class="row">
            @foreach ($realisations as $realisation)
                <div class="col-md-4">
                    <a href="{{ route('realisation.show', $realisation->slug) }}">
                        <div class="profile-card-2 shadow"><img class="img-responsive" src="{{ Voyager::image( $realisation->image ) }}">
                            <div class="profile-name">{{ $realisation->client }}</div>
                            <div class="profile-username">{{ $realisation->subtitle }}</div>
                        </div>
                    </a>    
                </div>
            @endforeach
        </div>
    </div>
</div>
<style>

.img-responsive {
    display: block;
    width: 350px !important;
    height: 400px;
}
.profile-card-2 {
    background-color: #FFF;
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
    background-position: center;
    overflow: hidden;
    position: relative;
    margin: 10px auto;
    cursor: pointer;
    border-radius: 10px;
}

.profile-card-2 img {
    transition: all linear 0.25s;
}

.profile-card-2 .profile-name {
    position: absolute;
    left: 30px;
    bottom: 70px;
    font-size: 30px;
    color: #FFF;
    text-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
    font-weight: bold;
    transition: all linear 0.25s;
}

.profile-card-2 .profile-username {
    position: absolute;
    bottom: 50px;
    left: 30px;
    color: #FFF;
    font-size: 13px;
    transition: all linear 0.25s;
}

.profile-card-2:hover img {
    filter: grayscale(100%);
}

.profile-card-2:hover .profile-name {
    bottom: 80px;
}

.profile-card-2:hover .profile-username {
    bottom: 60px;
}
</style>
@endsection

@section('realisation-scripts')
<script>
    let colors = ['#5361F0','#F398CD','#FDE24B','#57E8B5'];
    var z = document.getElementById("colour-js-realisation");
    let i= 0;
    
    function changeColor(){
        c = Math.floor(Math.random() * colors.length);
        z.style.color = colors[c];
    }
    
    window.setInterval(changeColor,1000 );
</script>
@endsection
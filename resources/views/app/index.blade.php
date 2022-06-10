@extends('layouts.base') 
@section('meta-page')Accueil @endsection
@section('meta-home')
    <meta name="description" content="Vous souhaitez lancer votre petite entreprise à l'assaut du digital ? Confiez nous vos projets, nous sommes la pour vous accompagner !"> 
@endsection

@section('content')

@include('partials.app.header')

@include('partials.app.value')

@include('partials.app.prestations')


<div class="p-3 mt-5">
    <div class="row mb-5">
        <div class="col-md-12 text-center">
            <h1 class="font-weight-bold display-5">Derniers Posts Insta<span id="colour-js-insta" class="display-3">.<span></h1>
        </div>
    </div>
    <div id="feed">
        <div class="loader d-flex justify-content-center">
            <div class="spinner-grow text-warning m-2" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            <div class="spinner-grow text-secondary m-2" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            <div class="spinner-grow text-primary m-2" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            <div class="spinner-grow text-info m-2" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>
</div>

@endsection


@section('homepage-scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
		var userAgent = navigator.userAgent.toLowerCase();
		jQuery.browser = {
			safari: /webkit/.test( userAgent ) && !/chrome/.test( userAgent ),
		};

		$.each($.browser, function(i, val) {
            if(val == true){
                document.getElementById("trafic-class").removeAttribute('data-aos');
                document.getElementById("social-class").removeAttribute('data-aos');
                document.getElementById("identite-class").removeAttribute('data-aos');
                document.getElementById("web-class").removeAttribute('data-aos');
            }
		});

        axios.get('/feeds', {
        }).then(function (response) {
            console.log(response)
            $('#feed').html(response.data)
        })
        
    })
    let colors = ['#5361F0','#F398CD','#FDE24B','#57E8B5'];
    var x = document.getElementById("colour-js");
    var y = document.getElementById("colour-js-value");
    var z = document.getElementById("colour-js-presta");
    var w = document.getElementById("colour-js-contact");
    var insta = document.getElementById("colour-js-insta");
    
    function changeColor(){
        
        col = Math.floor(Math.random() * colors.length);
        insta.style.color = colors[col];
        
        a = Math.floor(Math.random() * colors.length);
        x.style.color = colors[a]

        b = Math.floor(Math.random() * colors.length);
        y.style.color = colors[b];
        
        c = Math.floor(Math.random() * colors.length);
        z.style.color = colors[c];

        d = Math.floor(Math.random() * colors.length);
        w.style.color = colors[d];
        
        
    }
    
    window.setInterval(changeColor,1000 );

    let words = [ "définir une identité visuelle", "concevoir un site web", "acquérir du trafic", "développer leurs réseaux sociaux", "rédiger du contenu pertinent"]  
    let text_colors = ['#000','#5361F0','#F398CD','#FDE24B','#57E8B5'];
    let i= 0;
    var wording_home = document.getElementById("wording-home");
    
    function changeWording() {
        wording_home.innerHTML = words[i]
        wording_home.style.color = text_colors[i]
        i++;
        if (i >= colors.length) {
            i = 0
        }
    }
    window.setInterval(changeWording,1500 );

</script>
@endsection
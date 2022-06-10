@extends('layouts.base') 
@section('meta-page')Identitée visuelle @endsection
@section('meta-identite')
    <meta name="description" content="Confiez-nous la création de votre identité visuelle, du logo à la typographie en passant par les palettes de couleurs,formalisé dans une charte graphique."> 
@endsection

@section('content')
<div class="pr-3 pl-3 mb-5 bg-primary">
    <div class="row p-4">
        <div class="col-md-6 col-sm-12 bg-fixed bg-no-repeat items-center justify-center">
            <div class="d-flex justify-content-center" data-aos="zoom-out-down" data-aos-duration="2000">
                <img src="{{ asset('storage/redactionweb.svg') }}" alt="Identitée visuelle" width="90%" style="height: 465px !important">
            </div>
        </div>
        <div class="col-md-6 col-sm-12 d-flex align-items-center justify-center p-3 text-center" >
            <div data-aos="zoom-in-left" data-aos-duration="2000" class="d-flex flex-column align-items-center">
                <h1 class="font-weight-bold display-5">Identité visuelle<span id="colour-js" class="display-5">.<span></h1>
                <p class="font-weight-bold mt-2 h5">Une identité visuelle à pour objectif de représenter de façon constante et sans équivoque l’image de marque de votre entreprise !</p>
                <form action="{{ route('contact') }}" method="POST">
                    @csrf
                    <input type="hidden" name="color" value="primary">
                    <button  class="btn btn-lg text-white btn-info mt-4">On en discute ?</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="pr-3 pl-3">
    <div class="row">
        <div class="col-md-12 bandeau">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="d-flex justify-content-center align-items-center"  >
                        <img 
                            data-aos="fade-right"
                            data-aos-offset="300"
                            data-aos-easing="ease-in-sine" src="{{ asset('storage/icons/identite/logo.gif') }}" style="width: 70%" alt="image-communauté">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 d-flex align-items-center">
                    <div class="circle-bubble-left bg-warning"></div>
                    <div class="circle-bubble-right bg-info"></div>
                    <div class="circle-bubble-bottom-2 bg-secondary"></div>
                    <p class="h5 font-weight-bold p-3"
                        data-aos="fade-up"
                        data-aos-duration="3000">
                       <span class="h4 font-weight-bolder mb-2">Optez pour un logo qui vous correspond !</span>
                       <br>
                       <br>
                       Le logotype est l’élément graphique incontournable de l’identité visuelle, il doit impérativement être en adéquation avec votre image de marque et votre secteur d’activité. Nous concevons votre logo unique qui vous permettra d’être reconnu instantanément par vos clients et prospects ainsi que de vous démarquer de vos concurrents. 
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 bandeau-rl bg-primary">
            <div class="row">
                <div class="col-md-6 col-sm-12 d-flex align-items-center">
                    <p class="h5 font-weight-bold pl-2 pr-2 pt-5 pb-5 text-right"
                        data-aos="fade-up"
                        data-aos-duration="3000">
                        <span class="h4 font-weight-bolder mb-2">La typo, un élément à ne pas prendre à la légère  !</span>
                        <br>
                        <br>
                        Vous avez accès à une multitude de possibilités lorsqu’il s’agit de choisir des polices de caractères sur internet.<br/>Il est important de savoir que la plupart d’entre elles sont connotées. Elles peuvent renvoyer à une période de l’histoire, à un secteur d’activité, à une image premium ou plutôt bas de gamme…
                        <br>
                        Nous choisissons avec soin la typographie à utiliser, afin que les polices de caractères sélectionnées soient en adéquation avec l’image de marque de votre entreprise.</p>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="d-flex justify-content-center align-items-center">
                        <img 
                            data-aos="fade-left"
                            data-aos-offset="300"
                            data-aos-easing="ease-in-sine" src="{{ asset('storage/icons/identite/typo.gif') }}" style="width: 65%" alt="image-e-reputation">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 bandeau">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="d-flex justify-content-center align-items-center"  >
                        <img 
                            data-aos="fade-right"
                            data-aos-offset="300"
                            data-aos-easing="ease-in-sine" src="{{ asset('storage/icons/identite/colors.gif') }}" style="width: 70%" alt="image-communauté">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12  d-flex align-items-center">
                    <div class="circle-bubble-top bg-secondary"></div>
                    <div class="circle-bubble-middle bg-warning"></div>
                    <div class="circle-bubble-bottom bg-info"></div>
                    <p class="h5 font-weight-bold p-3"
                        data-aos="fade-up"
                        data-aos-duration="3000">
                        <span class="h4 font-weight-bolder mb-2">Mettez de la couleur dans vos contenus !</span>
                        <br>
                        <br>
                        Pour une cohérence sur vos supports de communication web et print, il est primordial de définir une palette de couleurs toujours adaptée à votre image de marque. Nous composons des combinaisons de plusieurs teintes en adéquation avec vos valeurs  et vous recommandons des contextes d’utilisation pour chaque teinte dans la charte graphique. 
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 bandeau-lr bg-primary">
            <div class="row">
                <div class="col-md-6 col-sm-12 d-flex align-items-center">
                    <p class="h5 font-weight-bold pl-2 pr-2 pt-4 pb-4 text-right"
                        data-aos="fade-up"
                        data-aos-duration="3000">
                        <span class="h4 font-weight-bolder mb-2">Concevez un support unique clair et concis !</span>
                        <br>
                        <br>
                        Une charte graphique à pour but de compiler tous les éléments définis précédemment dans un seul document. Lorsque vous aurez validé les propositions de logo, typographies et palettes de couleurs, nous pourrons passer à l’étape de la création de cette charte qui comportera en plus des éléments graphiques, des exemples clairs quant à l’utilisation de chaque composant.
                    </p>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="d-flex justify-content-center align-items-center">
                        <img 
                            data-aos="fade-left"
                            data-aos-offset="300"
                            data-aos-easing="ease-in-sine" src="{{ asset('storage/icons/identite/chartegraphique.gif') }}" style="width: 65%" alt="image-e-reputation">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 bandeau">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="d-flex justify-content-center align-items-center"  >
                        <img 
                            data-aos="fade-right"
                            data-aos-offset="300"
                            data-aos-easing="ease-in-sine" src="{{ asset('storage/icons/identite/identity.gif') }}" style="width: 70%" alt="image-communauté">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12  d-flex align-items-center">
                    <div class="circle-bubble-top bg-secondary"></div>
                    <div class="circle-bubble-middle bg-warning"></div>
                    <div class="circle-bubble-bottom bg-info"></div>
                    <p class="h5 font-weight-bold p-3"
                        data-aos="fade-up"
                        data-aos-duration="3000">
                        <span class="h4 font-weight-bolder mb-2">3,2,1… Votre charte est complète, prête à être mise en application !</span>
                        <br>
                        <br>
                        Nous nous chargeons de la diffuser à vos équipes, à vos partenaires et de s’assurer que cette nouvelle identité visuelle soit bien respectée. Nous pouvons également officialiser votre nouvelle identité visuelle via une newsletter, un communiqué de presse …
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials.contact_typing', ['color'=> 'primary'])

@endsection


@section('homepage-scripts')
<script>
    let colors = ['#5361F0','#FFF','#FDE24B','#57E8B5'];
    var x = document.getElementById("colour-js");
    var y = document.getElementById("colour-js-value");
    var z = document.getElementById("colour-js-presta");
    let i= 0;
    
    function changeColor(){
        a = Math.floor(Math.random() * colors.length);
        x.style.color = colors[a]

        b = Math.floor(Math.random() * colors.length);
        y.style.color = colors[b];
        
        c = Math.floor(Math.random() * colors.length);
        z.style.color = colors[c];
    }
    
    window.setInterval(changeColor,1000 );
</script>
@endsection
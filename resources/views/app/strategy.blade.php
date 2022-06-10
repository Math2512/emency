@extends('layouts.base') 
@section('meta-page')Acquisition de trafic @endsection
@section('meta-strategy')
    <meta name="description" content="Votre site web est en ligne mais les visiteurs ne sont pas au rendez-vous ? Optimisons votre référencement et votre stratégie digitale !"> 
@endsection

@section('content')
<div class="pr-3 pl-3 mb-5 bg-warning">
    <div class="row p-4">
        <div class="col-md-6 col-sm-12 bg-fixed bg-no-repeat items-center justify-center">
            <div class="d-flex justify-content-center" data-aos="zoom-out-down" data-aos-duration="2000">
                <img src="{{ asset('storage/stratdigitale.svg') }}" alt="Acquisition de trafic" width="90%" style="height: 465px !important">
            </div>
        </div>
        <div class="col-md-6 col-sm-12 d-flex align-items-center justify-center text-center p-3" >
            <div data-aos="zoom-in-left" data-aos-duration="2000" class="d-flex flex-column align-items-center">
                <h1 class="font-weight-bold display-5">Acquisition de trafic<span id="colour-js" class="display-5">.<span></h1>
                <p class="font-weight-bold mt-2 h5">Rendre votre site web visible et mettre à votre disposition tous les outils performants pour augmenter vos conversions, c'est notre mission !</p>
                <form action="{{ route('contact') }}" method="POST">
                    @csrf
                    <input type="hidden" name="color" value="warning">
                    <button class="btn btn-lg text-white btn-info mt-4">On en discute ?</button>
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
                            data-aos-easing="ease-in-sine" src="{{ asset('storage/icons/strategy/optimisation.gif') }}" style="width: 65%" alt="image-communauté">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 d-flex align-items-center">
                    <div class="circle-bubble-left-2 bg-secondary"></div>
                    <div class="circle-bubble-right-2 bg-info"></div>
                    <div class="circle-bubble-bottom-2 bg-primary"></div>
                    <p class="h5 font-weight-bold p-3"
                        data-aos="fade-up"
                        data-aos-duration="3000">
                       <span class="h4 font-weight-bolder mb-2">Créer un site web c’est bien, l’optimiser pour acquérir du trafic dessus c’est mieux !</span>
                       <br>
                       <br>
                       Avec 81.6% des utilisateurs d’Internet qui déclarent avoir fait des recherches en ligne en vue d’acheter un produit ou un service, il est impératif d’optimiser votre présence en ligne.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 bandeau-rl bg-warning">
            <div class="row">
                <div class="col-md-6 col-sm-12 d-flex align-items-center">
                    <p class="h5 font-weight-bold p-2 text-right"
                        data-aos="fade-up"
                        data-aos-duration="3000">
                        <span class="h4 font-weight-bolder mb-2">Vous armer au mieux pour affronter la jungle du digital !</span>
                        <br>
                        <br>
                        Pour éviter de vous lancer à l’aveugle lors de votre création d’entreprise ou votre refonte digitale, comptez sur nous pour établir une stratégie digitale complète comprenant un audit de l’existant, une analyse de votre concurrence, des préconisations d’optimisation pour votre site web et vos réseaux sociaux.</p>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="d-flex justify-content-center align-items-center">
                        <img 
                            data-aos="fade-left"
                            data-aos-offset="300"
                            data-aos-easing="ease-in-sine" src="{{ asset('storage/icons/strategy/strategie.gif') }}" style="width: 65%" alt="image-e-reputation">
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
                            data-aos-easing="ease-in-sine" src="{{ asset('storage/icons/strategy/seo.gif') }}" style="width: 70%" alt="image-communauté">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12  d-flex align-items-center">
                    <div class="circle-bubble-top bg-secondary"></div>
                    <div class="circle-bubble-middle bg-warning"></div>
                    <div class="circle-bubble-bottom bg-info"></div>
                    <p class="h5 font-weight-bold p-3"
                        data-aos="fade-up"
                        data-aos-duration="3000">
                        <span class="h4 font-weight-bolder mb-2">Vous méritez d'apparaître en première page Google !</span>
                        <br>
                        <br>
                        Le SEO ou référencement naturel est un travail méticuleux de longue haleine à optimiser tout au long de la vie de votre site web ! Nous réalisons un audit de l’existant, identifions les mots clés pertinents, mettons en place les outils Google nécessaires au suivi des KPI, rédigeons le contenu SEO ( méta-titres, méta-descriptions ... ).
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 bandeau-lr bg-warning">
            <div class="row">
                <div class="col-md-6 col-sm-12 d-flex align-items-center">
                    <p class="h5 font-weight-bold pl-2 pr-2 pt-5 pb-5 text-right"
                        data-aos="fade-up"
                        data-aos-duration="3000">
                        <span class="h4 font-weight-bolder mb-2">Obtenez une visibilité immédiate pour vos campagnes !</span>
                        <br>
                        <br>
                        Le SEA ou référencement payant est particulièrement efficace pour vos campagnes et offres temporaires, puisqu’il vous permet de bénéficier d’une visibilité quasi immédiate à moindre coût. Nous identifions les mots clés pertinents, réalisons des campagnes complètes et les optimisons au long cours afin que vos campagnes soient les plus performantes possibles.
                    </p>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="d-flex justify-content-center align-items-center">
                        <img 
                            data-aos="fade-left"
                            data-aos-offset="300"
                            data-aos-easing="ease-in-sine" src="{{ asset('storage/icons/strategy/sea.gif') }}" style="width: 65%" alt="image-e-reputation">
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
                            data-aos-easing="ease-in-sine" src="{{ asset('storage/icons/strategy/newsletter.gif') }}" style="width: 65%" alt="image-communauté">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 d-flex align-items-center">
                    <div class="circle-bubble-bottom-2 bg-info"></div>
                    <div class="circle-bubble-left bg-primary"></div>
                    <div class="circle-bubble-top bg-warning"></div>
                    <p class="h5 font-weight-bold p-3"
                        data-aos="fade-up"
                        data-aos-duration="3000">
                        <span class="h4 font-weight-bolder mb-2">Communiquez sur vos actualités via une newsletter régulière !</span>
                        <br>
                        <br>
                        La newsletter est un outil de communication digital puissant, particulièrement efficace pour informer votre communauté de vos nouveautés, vos actualités, votre participation à des événements… Nous nous chargeons d’en concevoir le graphisme, de rédiger son contenu, de la diffuser et d’en analyser les performances.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 bandeau-rl bg-warning">
            <div class="row">
                <div class="col-md-6 col-sm-12 d-flex align-items-center">
                    <p class="h5 font-weight-bold p-2 text-right"
                        data-aos="fade-up"
                        data-aos-duration="3000">
                        <span class="h4 font-weight-bolder mb-2">Positionnez-vous en tant qu’expert <br/>de votre domaine !</span>
                        <br>
                        <br>
                        Le blog est l’outil le plus puissant lorsqu’il s’agit d’appuyer votre crédibilité dans votre secteur d’activité. Dans une démarche d’inbound marketing ( faire venir le client vers vous naturellement ) nous rédigeons pour votre blog du contenu utile et intéressant pour votre communauté.
                    </p>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="d-flex justify-content-center align-items-center">
                        <img 
                            data-aos="fade-left"
                            data-aos-offset="300"
                            data-aos-easing="ease-in-sine" src="{{ asset('storage/icons/strategy/redacblog.gif') }}" style="width: 65%" alt="image-e-reputation">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials.contact_typing', ['color'=> 'warning'])

@endsection


@section('homepage-scripts')
<script>
    let colors = ['#5361F0','#F398CD','#FFF','#57E8B5'];
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
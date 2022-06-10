@extends('layouts.base') 
@section('meta-page')Social media @endsection
@section('meta-social')
    <meta name="description" content="Bénéficiez du pouvoir des réseaux sociaux pour accroitre votre visibilité, créer une communauté autour de votre marque en concevant du contenu pertinent !"> 
@endsection

@section('content')
<div class="pr-3 pl-3 mb-1 bg-secondary">
    <div class="row p-4">
        <div class="col-md-6 col-sm-12 bg-fixed bg-no-repeat items-center justify-center">
            <div class="d-flex justify-content-center" data-aos="zoom-out-down" data-aos-duration="2000">
                <img src="{{ asset('storage/social.svg') }}" alt="Réseaux sociaux" width="90%" style="height: 465px !important">
            </div>
        </div>
        <div class="col-md-6 col-sm-12 d-flex align-items-center justify-center p-3 text-center" >
            <div data-aos="zoom-in-left" data-aos-duration="2000" class="d-flex flex-column align-items-center">
                <h1 class="font-weight-bold display-5">Réseaux Sociaux<span id="colour-js" class="display-5">.<span></h1>
                <p class="font-weight-bold mt-2 h5">Avec plus de 3 français sur 4 présents sur les réseaux sociaux en 2021, ce serait dommage de ne pas en profiter pour développer votre business !</p>
                <form action="{{ route('contact') }}" method="POST">
                    @csrf
                    <input type="hidden" name="color" value="secondary">
                    <button class="btn btn-primary btn-lg text-white btn-warning mt-4">On en discute ?</button>
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
                            data-aos-easing="ease-in-sine" src="{{ asset('storage/icons/communaute.gif') }}" style="width: 70%" alt="image-communauté">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 d-flex align-items-center">
                    <div class="circle-bubble-left-2 bg-primary"></div>
                    <div class="circle-bubble-right-2 bg-info"></div>
                    <div class="circle-bubble-bottom-2 bg-warning"></div>
                    <p class="h5 font-weight-bold p-3"
                        data-aos="fade-up"
                        data-aos-duration="3000">
                       <span class="h4 font-weight-bolder mb-2">Transformez les membres de votre communauté en ambassadeurs !</span>
                       <br>
                       <br>
                       Nous créons une communauté autour de votre marque, en apprenant à connaître les personnalités qui la compose et nous interagissons avec 
                       elle au quotidien dans le but de fédérer et de transformer en ambassadeurs les membres les plus actifs.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 bandeau-lr bg-secondary">
            <div class="row">
                <div class="col-md-6 col-sm-12 d-flex align-items-center">
                    <p class="h5 font-weight-bold p-2 text-right"
                        data-aos="fade-up"
                        data-aos-duration="3000">
                        <span class="h4 font-weight-bolder mb-2">Gardez le contrôle de votre image de marque ! </span>
                        <br>
                        <br>
                        Nous consacrons du temps quotidiennement à la modération de vos réseaux sociaux. 
                        <br>
                        Votre communauté étant libre de s’exprimer à tout moment à propos de votre entreprise, il est important de rester en veille !
                     </p>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="d-flex justify-content-center align-items-center">
                        <img 
                            data-aos="fade-left"
                            data-aos-offset="300"
                            data-aos-easing="ease-in-sine" src="{{ asset('storage/icons/ereputation.gif') }}" style="width: 65%" alt="image-e-reputation">
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
                            data-aos-easing="ease-in-sine" src="{{ asset('storage/icons/medias.gif') }}" style="width: 70%" alt="image-communauté">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12  d-flex align-items-center">
                    <div class="circle-bubble-top bg-primary"></div>
                    <div class="circle-bubble-middle bg-warning"></div>
                    <div class="circle-bubble-bottom bg-info"></div>
                    <p class="h5 font-weight-bold p-3"
                        data-aos="fade-up"
                        data-aos-duration="3000">
                        <span class="h4 font-weight-bolder mb-2">Concentrez-vous sur les bons<br/>médias sociaux !</span>
                        <br>
                        <br>
                        Pour optimiser votre temps et ne pas vous éparpiller, nous vous préconisons des réseaux sociaux adaptés à votre 
                        activité et à votre cible, ainsi que le type de contenu à privilégier pour chaque application. 
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 bandeau-rl bg-secondary">
            <div class="row">
                <div class="col-md-6 col-sm-12 d-flex align-items-center">
                    <p class="h5 font-weight-bold p-2 text-right"
                        data-aos="fade-up"
                        data-aos-duration="3000">
                        <span class="h4 font-weight-bolder mb-2">Créez du contenu impactant et engageant en mixant les formats !</span>
                        <br>
                        <br>
                        Nous vous proposons des contenus originaux en fonction de vos objectifs : conversions, notoriété, engagement... 
                        et en utilisant les différents formats photos, vidéos, illustrations tout en respectant votre charte graphique.
                    </p>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="d-flex justify-content-center align-items-center">
                        <img 
                            data-aos="fade-left"
                            data-aos-offset="300"
                            data-aos-easing="ease-in-sine" src="{{ asset('storage/icons/contenu.gif') }}" style="width: 65%" alt="image-e-reputation">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 bandeau">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="d-flex justify-content-center align-items-center">
                        <img 
                            data-aos="fade-right"
                            data-aos-offset="300"
                            data-aos-easing="ease-in-sine" src="{{ asset('storage/icons/organisation.gif') }}" style="width: 100%" alt="image-communauté">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 d-flex align-items-center">
                    <div class="circle-bubble-right-2 bg-primary"></div>
                    <div class="circle-bubble-left-2 bg-info"></div>
                    <div class="circle-bubble-bottom bg-warning"></div>
                    <p class="h5 font-weight-bold p-3"
                        data-aos="fade-up"
                        data-aos-duration="3000">
                        <span class="h4 font-weight-bolder mb-2">Gagnez en efficacité en programmant vos contenus à l’avance !</span>
                        <br>
                        <br>
                        La clé étant la régularité, nous vous préparons un calendrier éditorial mensuel, trimestriel, semestriel ou annuel. Il vous 
                        permettra de n'oublier aucun évènement important sur lequel communiquer, libérer votre charge mentale 
                        et ne pas vous laisser submerger par les aléas de l’entrepreunariat.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 bandeau-lr bg-secondary">
            <div class="row">
                <div class="col-md-6 col-sm-12 d-flex align-items-center">
                    <p class="h5 font-weight-bold p-2 text-right"
                        data-aos="fade-up"
                        data-aos-duration="3000">
                        <span class="h4 font-weight-bolder mb-2">Soyez reconnu en un coup d'œil par votre communauté !</span>
                        <br>
                        <br>
                        Nous vous accompagnons pour employer le ton qui raisonne juste auprès de votre communauté, créer des visuels 
                        propres à votre marque, vos abonnés ne passeront plus à côté d’une seule publication vous concernant.
                    </p>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="d-flex justify-content-center align-items-center">
                        <img 
                            data-aos="fade-left"
                            data-aos-offset="300"
                            data-aos-easing="ease-in-sine" src="{{ asset('storage/icons/dna.gif') }}" style="width: 40%" alt="image-e-reputation">
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
                            data-aos-easing="ease-in-sine" src="{{ asset('storage/icons/formation.gif') }}" style="width: 100%" alt="image-communauté">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 d-flex align-items-center">
                    <div class="circle-bubble-bottom-2 bg-info"></div>
                    <div class="circle-bubble-left bg-primary"></div>
                    <div class="circle-bubble-top bg-warning"></div>
                    <p class="h5 font-weight-bold p-3"
                        data-aos="fade-up"
                        data-aos-duration="3000">
                        <span class="h4 font-weight-bolder mb-2">Devenez autonome et habile sur les réseaux sociaux !</span>
                        <br>
                        <br>
                        Nous organisons avec vous des sessions de formation aux réseaux sociaux utiles pour votre entreprise. 
                        Nous vous formons également aux outils complémentaires de programmation, de création de visuels 
                        et de montage vidéo.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials.contact_typing', ['color'=> 'secondary'])

@endsection


@section('homepage-scripts')
<script>
    let colors = ['#5361F0','#F398CD','#FDE24B','#FFF'];
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
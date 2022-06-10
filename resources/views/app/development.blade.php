@extends('layouts.base') 
@section('meta-page')Site web @endsection
@section('meta-developpement')
    <meta name="description" content="Vous souhaitez être visible sur le web ou développer un nouveau canal de vente ? Développons ensemble votre site vitrine ou votre site e-commerce !"> 
@endsection

@section('content')
<div class="pr-3 pl-3 mb-5 bg-info">
    <div class="row p-4">
        <div class="col-md-6 col-sm-12 bg-fixed bg-no-repeat items-center justify-center">
            <div class="d-flex justify-content-center" data-aos="zoom-out-down" data-aos-duration="2000">
                <img src="{{ asset('storage/coding.svg') }}" alt="Développement Web" width="90%" style="height: 465px !important">
            </div>
        </div>
        
        <div class="col-md-6 col-sm-12 d-flex align-items-center justify-center text-center p-3" >
            <div data-aos="zoom-in-left" data-aos-duration="2000" class="d-flex flex-column align-items-center">
                <h1 class="font-weight-bold display-5">Site Web<span id="colour-js" class="display-5">.<span></h1>
                <p class="font-weight-bold mt-2 h5">Le site web est devenu l'outil incontournable pour être présent en ligne. Il est important de le mettre au coeur de votre stratégie digitale et de l'adapter à votre activité !</p>
                <form action="{{ route('contact') }}" method="POST">
                    @csrf
                    <input type="hidden" name="color" value="info">
                    <button  class="btn btn-lg text-white btn-primary mt-4">On en discute ?</button>
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
                            data-aos-easing="ease-in-sine" src="{{ asset('storage/icons/sitevitrine.gif') }}" style="width: 70%" alt="image-communauté">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 d-flex align-items-center">
                    <div class="circle-bubble-left bg-warning"></div>
                    <div class="circle-bubble-right bg-secondary"></div>
                    <div class="circle-bubble-bottom-2 bg-primary"></div>
                    <p class="h5 font-weight-bold p-3"
                        data-aos="fade-up"
                        data-aos-duration="3000">
                       <span class="h4 font-weight-bolder mb-2">Développez votre vitrine en ligne !</span>
                       <br>
                       <br>
                       Un site vitrine est particulièrement intéressant pour présenter votre organisation, vos réalisations, vos services. Nous assurons un développement via le CMS Wordpress ou sur mesure.   
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 bandeau-lr bg-info">
            <div class="row">
                <div class="col-md-6 col-sm-12 d-flex align-items-center">
                    <p class="h5 font-weight-bold p-2 text-right"
                        data-aos="fade-up"
                        data-aos-duration="3000">
                        <span class="h4 font-weight-bolder mb-2">Lancez vous à l’assaut du e-commerce !</span>
                        <br>
                        <br>
                        Un site e-commerce est un shot de visibilité qui permet de booster vos ventes, de toucher une cible plus large, de commercialiser vos produits à grande échelle !
                        <br>
                        Nous développons votre site e-commerce via le CMS Wordpress avec le plugin Woocommerce, via Shopify ou totalement personnalisé.
                     </p>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="d-flex justify-content-center align-items-center">
                        <img 
                            data-aos="fade-left"
                            data-aos-offset="300"
                            data-aos-easing="ease-in-sine" src="{{ asset('storage/icons/ecommerce.gif') }}" style="width: 65%" alt="image-e-reputation">
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
                            data-aos-easing="ease-in-sine" src="{{ asset('storage/icons/surmesure.gif') }}" style="width: 70%" alt="image-communauté">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12  d-flex align-items-center">
                    <div class="circle-bubble-top bg-primary"></div>
                    <div class="circle-bubble-middle bg-warning"></div>
                    <div class="circle-bubble-bottom bg-secondary"></div>
                    <p class="h5 font-weight-bold p-3"
                        data-aos="fade-up"
                        data-aos-duration="3000">
                        <span class="h4 font-weight-bolder mb-2">Optez pour un site sur mesure, personnalisable et unique !</span>
                        <br>
                        <br>
                        La limite des CMS étant la personnalisation, vous pouvez avoir besoin d’un site web ou d’une application conçue pour vous, adaptée à votre activité et aux besoins de votre équipe comprenant des fonctionnalités métiers particulières. Dans ce cas, nous vous proposons un site web unique et sur mesure, nos langages de prédilection sont le PHP et Javascript combinés. 
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 bandeau-rl bg-info">
            <div class="row">
                <div class="col-md-6 col-sm-12 d-flex align-items-center">
                    <p class="h5 font-weight-bold p-2 text-right"
                        data-aos="fade-up"
                        data-aos-duration="3000">
                        <span class="h4 font-weight-bolder mb-2">Un site adapté à tous les supports !</span>
                        <br>
                        <br>
                        Avec 60% des recherches Google provenant d’appareils mobiles, il est désormais incontournable de concevoir un site responsive. Tous nos sites web sont donc adaptables aux formats desktop, tablette ou mobile.
                    </p>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="d-flex justify-content-center align-items-center">
                        <img 
                            data-aos="fade-left"
                            data-aos-offset="300"
                            data-aos-easing="ease-in-sine" src="{{ asset('storage/icons/responsive.gif') }}" style="width: 65%" alt="image-e-reputation">
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
                            data-aos-easing="ease-in-sine" src="{{ asset('storage/icons/hebergement.gif') }}" style="width: 100%" alt="image-communauté">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 d-flex align-items-center">
                    <div class="circle-bubble-right-2 bg-primary"></div>
                    <div class="circle-bubble-left-2 bg-secondary"></div>
                    <div class="circle-bubble-bottom bg-warning"></div>
                    <p class="h5 font-weight-bold p-3"
                        data-aos="fade-up"
                        data-aos-duration="3000">
                        <span class="h4 font-weight-bolder mb-2">Le site est prêt,<br/>et nous sommes encore là !</span>
                        <br>
                        <br>
                        Votre site est prêt, tout beau, tout neuf, il faut désormais penser à le déployer ! Nous vous préconisons différents hébergements adaptés à vos besoins et à votre budget. Nous privilégions des hébergeurs français disposant de serveurs localisés en France, appliquant les législations en vigueur dans un souci de protection de vos données et de celle de vos clients.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 bandeau-lr bg-info">
            <div class="row">
                <div class="col-md-6 col-sm-12 d-flex align-items-center">
                    <p class="h5 font-weight-bold p-2 text-right"
                        data-aos="fade-up"
                        data-aos-duration="3000">
                        <span class="h4 font-weight-bolder mb-2">Soyez serein, confiez nous la maintenance du site web !</span>
                        <br>
                        <br>
                        Un site n’ayant pas vocation à rester figé dans le temps, nous interviendrons pour la résolution de bugs, l’amélioration du référencement de patch de failles de sécurité pouvant arriver au cours de la vie de votre site web. Bien sûr nous restons à votre disposition pour discuter de vos projets de développement de nouvelles fonctionnalités.
                    </p>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="d-flex justify-content-center align-items-center">
                        <img 
                            data-aos="fade-left"
                            data-aos-offset="300"
                            data-aos-easing="ease-in-sine" src="{{ asset('storage/icons/maintenance.gif') }}" style="width: 50%" alt="image-e-reputation">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials.contact_typing', ['color'=> 'info'])

@endsection


@section('homepage-scripts')
<script>
    let colors = ['#FFF','#F398CD','#FDE24B','#57E8B5'];
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
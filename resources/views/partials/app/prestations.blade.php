
<div class="p-3 mt-5">
    
    <div class="row mb-5">
        <div class="col-md-12 text-center">
            <h1 class="font-weight-bold display-5">Nos Prestations<span id="colour-js-presta" class="display-3">.<span></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-sm-12 text-center">
            @include('partials.app.card', [
                'color' => 'warning', 
                'title' => 'Acquisition de trafic',
                'image' => asset('storage/stratdigitale.svg'),
                'route' => route('app.strategy'),
                'text'  => 'Nous mettons en place une stratégie pour développer le trafic sur votre site web',
                'myId'  => 'trafic-class'
                ])
        </div>
        <div class="col-md-3 col-sm-12 text-center">
            @include('partials.app.card', [
                'color' => 'secondary', 
                'title' => 'Social Media',
                'image' => asset('storage/social.svg'),
                'route' => route('app.social'),
                'text'  => 'Nous vous accompagnons dans l\'univers du community management',
                'myId'  => 'social-class'
                ])
        </div>
        <div class="col-md-3 col-sm-12 text-center">
            @include('partials.app.card', [
                'color' => 'primary', 
                'title' => 'Identité Visuelle',
                'image' => asset('storage/redactionweb.svg'),
                'route' => route('app.identite'),
                'text'  => 'Nous concevons une identité visuelle en adéquation avec vos valeurs',
                'myId'  => 'identite-class'
                ])
        </div>
        <div class="col-md-3 col-sm-12 text-center">
            @include('partials.app.card', [
                'color' => 'info', 
                'title' => 'Site Web',
                'image' => asset('storage/coding.svg'),
                'route' => route('app.development'),
                'text'  => 'Nous développons votre site internet en fonction de votre activité',
                'myId'  => 'web-class'
                ])
        </div>
    </div>
</div>
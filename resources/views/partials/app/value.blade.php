
<div class="pr-3 pl-3 mt-5">
    <div class="row mb-5">
        <div class="col-md-12 text-center">
            <h1 class="font-weight-bold display-5">Nos Valeurs<span id="colour-js-value" class="display-3">.<span></h1>
        </div>
    </div>
    <div class="row">
        
        @include('partials.app.value_icons', [
            'color'     => 'secondary', 
            'title'     => 'Conseil',
            'image'     => asset('storage/icons/advice.gif'),
            'content'   => "Ensemble définissons, construisons et atteignons vos objectifs !"
        ])

        @include('partials.app.value_icons', [
            'color'     => 'primary', 
            'title'     => 'Créativité',
            'image'     => asset('storage/icons/creativity.gif'),
            'content'   => "Miser sur l’innovation et l’originalité pour vous aider à vous démarquer !"
        ])

        @include('partials.app.value_icons', [
            'color'     => 'info', 
            'title'     => 'Réactivité',
            'image'     => asset('storage/icons/reactivity.gif'),
            'content'   => "Une gestion de projet bien ficelée pour une réactivité maximum !"
        ])

        @include('partials.app.value_icons', [
            'color'     => 'warning', 
            'title'     => 'Proximité',
            'image'     => asset('storage/icons/proximity.gif'),
            'content'   => "Mettre en lumière les avantages de la proximité et convaincre les réticents !"
        ])
        
    </div>
</div>
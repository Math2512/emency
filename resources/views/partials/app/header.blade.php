<div class="pr-3 pl-3 mt-5 mb-5">
    <div class="row p-4">
        <div class="col-md-6 col-sm-12 bg-fixed bg-no-repeat items-center justify-center">
            <div class="d-flex justify-content-center" data-aos="zoom-out-down" data-aos-duration="2000">
                <img src="{{ asset('storage/homepage.svg') }}" alt="Chargée de marketing digital" width="90%" style="height: 465px !important">
            </div>
        </div>
        <div class="col-md-6 col-sm-12 d-flex align-items-center p-3" >
            <div data-aos="zoom-in-left" data-aos-duration="2000" class="">
                <h1 class="font-weight-bold display-5">Boostez votre visibilité<span id="colour-js" class="display-5">.<span></h1>
                <br/>
                <h4 class="font-weight-bolder mt-2">Notre mission ?</h4> 
                <p class="font-weight-bold">Aider les petites entreprises à s’accomplir dans l’univers du digital !</p>
                
                <h4 class="font-weight-bolder">Comment ?</h4> 
                <p class="font-weight-bold">En les accompagnant pour <span class="h5 font-weight-bolder" id="wording-home"></span>.</p>
                <form action="{{ route('contact') }}" method="POST">
                    @csrf
                    <input type="hidden" name="color" value="white">
                    <button class="btn btn-lg text-white btn-secondary mt-2">On commence quand ?</button>
                </form>
            </div>
        </div>
    </div>
</div>

    
<div class="stick-bubble row">
    <div class="bubbles">
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
    </div>
</div>

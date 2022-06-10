@extends('layouts.base') 
@section('meta-page') - Nous contacter @endsection
@section('content')

<div class="pr-3 pl-3 pb-2 mb-1" id="contactForm">
  <div class="container">
    <div class="row mb-5 pt-5">
        <div class="col-md-12 text-center">
            <h1 class="font-weight-bold display-5">Contactez-nous<span id="colour-js-contact" class="display-5">.<span></h1>
        </div>
    </div>
    
    <div class="row">
      <div class="col-md-6 col-sm-12">
        <form method="POST" action="{{ route('contact.send') }}">
          @csrf
          <div class="mb-2">
            <label class="form-label font-weight-bold" for="name">Votre Nom :</label>
            <input class="form-control" name="name" value="{{ old('name') }}" id="name" type="text" placeholder="Votre Nom" data-sb-validations="required" />
            @if ($errors->has('name'))
              <span class="text-danger">Votre nom est obligatoire</span>
            @endif
          </div>
    
          <div class="mb-2">
            <label class="form-label font-weight-bold" for="emailAddress">Votre Email :</label>
            <input class="form-control" value="{{ old('email') }}" name="email" id="emailAddress" type="Email" placeholder="Votre Email" data-sb-validations="required, email" />
            <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
            <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
            @if ($errors->has('email'))
              <span class="text-danger">L'email est obligatoire</span>
            @endif
          </div>
    
          <div class="mb-2">
            <label class="form-label font-weight-bold" for="message">Message :</label>
            <textarea class="form-control" name="message" id="message" type="text" placeholder="Votre Message" style="height: 10rem;" data-sb-validations="required">{{ old('message') }}</textarea>
            @if ($errors->has('message'))
              <span class="text-danger">Le message est obligatoire</span>
            @endif
          </div>
          <div class="mb-2">
            <div class="captcha">
                <span>{!! captcha_img() !!}</span>
                <button type="button" class="btn btn-info" class="reload" id="reload">
                    &#x21bb;
                </button>
            </div>
          </div>
          <div class="form-group mb-2">
            <input id="captcha" type="text" class="form-control" placeholder="Entrer le Captcha" name="captcha">
            @if ($errors->has('captcha'))
              <span class="text-danger">Captcha invalide</span>
            @endif
          </div>
    
          <div class="d-grid mb-1">
            <button class="btn btn-lg btn-{{ $color != 'white' ? $color : 'dark' }} text-white" id="submitButton" type="submit">Envoyer</button>
          </div>
    
        </form>
      </div>

      <div class="col-md-6 col-sm-12">
        <div class="bg-{{ $color }} p-5 shadow-lg rounded contact-infos">
          <div class="row d-flex justify-content-center pt-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-geo-alt-fill contact-icon" viewBox="0 0 16 16">
              <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
            </svg>
          </div>
          <div class="row mt-3 d-flex justify-content-center font-weight-bold">
            <h5>Caen, 14000. FRANCE</h5>
          </div>
          <div class="row d-flex mt-5 justify-content-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-envelope contact-icon" viewBox="0 0 16 16">
              <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
            </svg>
          </div>
          <div class="row mt-3 d-flex justify-content-center font-weight-bold mb-5">
            <h5><a href="mailto:contact@emency.fr" class="text-dark h-2"><u>contact@emency.fr</u></a></h5>
          </div>
        </div>
      </div>

    </div>
  </div>

</div>
<style>

</style>
@endsection

@section('contact-scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
<script>
    let colors = ['#5361F0','#F398CD','#FDE24B','#57E8B5'];
    var z = document.getElementById("colour-js-contact");
    let i= 0;
    
    function changeColor(){
        c = Math.floor(Math.random() * colors.length);
        z.style.color = colors[c];
    }
    
    window.setInterval(changeColor,1000 );

    $('#reload').click(function () {
        $.ajax({
            type: 'GET',
            url: 'reload-captcha',
            success: function (data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });
</script>
@endsection
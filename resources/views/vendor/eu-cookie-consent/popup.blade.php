<style>
    .eu-popup{
        position:absolute;
        display: flex;
        justify-content: center;
        align-items: center;
        align-content: center;
        padding: 20px;
        z-index: 4242;
        flex-wrap: wrap;
        background-color: white;
        box-shadow: 2px 2px 2px 2px rgba(0,0,0,0.75);
        margin-right: 20%;
        margin-left: 20%;
        margin-top: 20px;
        margin-bottom: 20px;
        border-radius: 20px;
        position: fixed;
    }
    .eu-popup-button {
        background-color: white;
        padding: 10px;
        padding-left: 20px;
        padding-right: 20px;
        border: 1px lightgray solid;
        border-radius: 10px;
    }

    .eu-popup-button:hover {
        background-color: lightgray;
        cursor: pointer;
    }
</style>
<script>
    function euCookieConsentSetCheckboxesByClassName(classname) {
        checkboxes = document.getElementsByClassName('eu-cookie-consent-cookie');
        for (i = 0; i < checkboxes.length; i++) {
            checkboxes[i].setAttribute('checked', 'checked');
            checkboxes[i].checked = true;
        }
    }
</script>
{{-- Popup Container --}}
<div style="{{ config('eu-cookie-consent.popup_style') }}" class="{{ config('eu-cookie-consent.popup_classes') }}">
    {{-- Popup Title gets displayed if its set in the config --}}
    @if(isset($config['title']))
    
        <div class="d-flex justify-content-center">
            <img src="{{ asset('storage/icons/cookies.gif') }}" alt="cookies" style="height: 120px !important">
        </div>
       
    @endif
    {{-- Popup Description --}}
    @if(isset($config['description']))
        <div class="col-md-10">
            <b>
                {{-- Popup MultiLanguageSupport defines if the Text is written from the lang file or directly form the Config. --}}
                @if($multiLanguageSupport)
                    {{ __('eu-cookie-consent::cookies.'.$config['title']) }}
                @else
                    {{ $config['title'] }}
                @endif
            </b>
            <br/>
            @if($multiLanguageSupport)
                {{ __('eu-cookie-consent::cookies.'.$config['description']) }}
            @else
                {{ $config['description'] }}
            @endif
        </div>
    @endif

    {{-- Popup Form which renders the Cateries and inside of them the single Cookies --}}
    <form action="{{ config('eu-cookie-consent.route') }}" method="POST" class="col-md-12 text-center">
        <div >

            @foreach($config['categories'] as $categoryName => $category)
                @include('eu-cookie-consent::category')
            @endforeach
        </div>
        <div style="margin-top: 20px;">
            <button id="saveButton" type="submit" class="btn btn-primary text-white">
                @if($multiLanguageSupport)
                    {{__('eu-cookie-consent::cookies.save')}}
                @else
                    {{ $config['saveButton'] }}
                @endif
            </button>
        </div>
    </form>
</div>

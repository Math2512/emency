<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
    <a class="navbar-brand font-weight-bold" href="{{ route('app.index') }}">
      <img src="{{ asset('storage/logos/white.svg') }}" class="mr-2" width="90" height="90" alt="Emency logo white">
      Emency
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item font-weight-bold strat {{ Route::is('app.strategy') ? 'border-bottom border-2 border-warning' : '' }}">
          <a class="nav-link text-dark" href="{{ route('app.strategy') }}">Acquisition de trafic</a>
        </li>
        <li class="nav-item font-weight-bold social {{ Route::is('app.social') ? 'border-bottom border-2 border-secondary' : '' }}">
          <a class="nav-link text-dark" href="{{ route('app.social') }}">Social Media</a>
        </li>
        <li class="nav-item font-weight-bold redaction {{ Route::is('app.identite') ? 'border-bottom border-2 border-primary' : '' }}">
          <a class="nav-link text-dark" href="{{ route('app.identite') }}">Identité visuelle</a>
        </li>
        <li class="nav-item font-weight-bold dev {{ Route::is('app.development') ? 'border-bottom border-2 border-info' : '' }}">
            <a class="nav-link text-dark" href="{{ route('app.development') }}">Site web</a>
        </li>
        <li class="nav-item font-weight-bold real {{ Route::is('realisation.index') || Route::is('realisation.show') ? 'border-bottom border-2 border-dark' : '' }}">
            <a class="nav-link text-dark" href="{{ route('realisation.index') }}">Réalisations</a>
        </li>
        <li class="nav-item font-weight-bold blog {{ Route::is('blog.index') || Route::is('blog.show') ? 'border-bottom border-2 border-dark' : '' }}">
            <a class="nav-link text-dark" href="{{ route('blog.index') }}">Blog</a>
        </li>
      </ul>
    </div>
</nav>
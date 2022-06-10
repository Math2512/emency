<div id="{{ $myId }}" data-aos="flip-left" data-aos-duration="1500">
  <div class="card bg-{{ $color }} shadow mb-2">
    <img class="card-img-top pr-5 pl-5 pt-5" src="{{ $image }}" alt="Card image cap" style="height: 185px; width:auto">
    <div class="card-body text-white">
      <h5 class="card-title">{{ $title }}</h5>
      <p class="card-text">{{ $text }}</p>
      <a href="{{ $route }}" class="btn btn-dark text-white">Allons-y</a>
    </div>
  </div>
</div>

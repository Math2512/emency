@extends('layouts.base') 

@section('meta-page')Blog @endsection

@section('meta-blog-index')
    <meta name="description" content="Retrouvez les actualités et les conseils de l'agence pour booster votre visibilité sur le web et acquérir de nouveaux clients."> 
@endsection

@section('content')

<div class="pr-3 pl-3 pb-3 mb-2">
    <div class="container">
        <div class="row mb-5 pb-5">
            <div class="col-md-12 text-center">
                <h1 class="font-weight-bold display-5">Blog<span id="colour-js-blog" class="display-3">.<span></h1>
            </div>
        </div>
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-md-4">
                    <a href="{{ route('blog.show', $article->slug) }}">
                    <div class="card-b card-blog border-left-5 border-{{ $article->category->color }}">
                        <div class="card-image shadow d-flex justify-content-center">
                            <img class="img" src="{{ Voyager::image( $article->image ) }}" style="width: 294px; height:196px">
                        </div>
                        <div class="table pr-4 pl-4 pt-4">
                            <h6 class="text-{{ $article->category->color }} font-weight-bold">
                                {!! $article->category->getIcon($article->category->color) !!} {{ $article->category->title }}
                            </h6>
                            <h5 class="card-caption">
                                {{ $article->title }}
                            </h5>
                            <p>{{ $article->subtitle }}</p>
                            <div class="d-flex justify-content-between">
                                <div class="text-muted">
                                    {{ $article->getDateForHuman() }}
                                </div>
                                <div>
                                    <div class="stats"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 20">
                                        <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
                                        <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
                                        <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                                    </svg> <span class="mt-1">{{ $article->reading_time }} min</span> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('blog-scripts')
<script>
    let colors = ['#5361F0','#F398CD','#FDE24B','#57E8B5'];
    var z = document.getElementById("colour-js-blog");
    let i= 0;
    
    function changeColor(){
        c = Math.floor(Math.random() * colors.length);
        z.style.color = colors[c];
    }
    
    window.setInterval(changeColor,1000 );
</script>
@endsection
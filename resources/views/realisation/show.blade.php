@extends('layouts.base') 

@section('meta-page')Réalisation {{ $realisation->client }} @endsection
@section('meta-realisation')
    <meta name="description" content="{{ $realisation->meta_description }}"> 
@endsection


@section('content')


<div class="pb-3 mb-2">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h2 class="h1 font-weight-bold text-center">{{ $realisation->client }}</h2>
                <h4 class="font-weight-bold text-center text-muted">{{ $realisation->subtitle }}</h4>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <img class="img" src="{{ Voyager::image( $realisation->image ) }}" style="width: 350px !important;
            height: 400px;">
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="circle-bubble-top-bg bg-secondary"></div>
                <div class="circle-bubble-left-bg bg-primary"></div>
                <div class="circle-bubble-right-bg bg-info"></div>
                <div class="circle-bubble-bottom-bg bg-secondary"></div>
                <div class="circle-bubble-bottom-bg-3 bg-warning"></div>
                {!! $realisation->content !!}
            </div>
        </div>
</div>
@endsection


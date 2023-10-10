@extends('site.layouts.app', ['page' => 'page', 'module' => "Pages"])
@section('content')
<div class="uk-height-large uk-margin-large-bottom uk-flex uk-flex-middle uk-background-cover uk-default home-section-one" data-src="{{ asset('assets/site/img/bg2.png')}}" uk-img="loading: eager">
    <div class="uk-margin-left">
    <h2>
        Launch Your Product In India?
    </h2>
    <p>Get your Product Approval to Sell it in India Fast & Economical way</p>
    </div>
</div>
<div class="uk-section uk-section-default uk-padding uk-background-primary"><h3 class="uk-text-center">Our Services</h3></div>
<div class="uk-section uk-background-primary">
<div class="uk-margin-small-left uk-child-width-1-4@m" uk-grid uk-height-match="target: > div >.uk-card-default">
    @if($lservices)
    @foreach($lservices as $ls)
    <div class="uk-padding-small">
    <div class="uk-card-default uk-padding-small">
        <div class="uk-card">
            <div class="uk-card-media-top">
                <img src="images/light.jpg" alt="{{$ls->service}}">
            </div>
            <div class="uk-card-body">
                <p class="uk-card-title" style="font-size:22px;">{{$ls->service}}</p>
            </div>
        </div>
    </div>
    </div>
    @endforeach
    @endif
</div>
</div>
<div>
    
</div>
@endsection
@section('styles')
@endsection
@section('scripts')
@endsection
@section('seo')
@endsection
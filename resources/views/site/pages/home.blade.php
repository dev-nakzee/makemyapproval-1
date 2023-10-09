@extends('site.layouts.app', ['page' => 'page', 'module' => "Pages"])
@section('content')
<div class="uk-height-large uk-flex uk-flex-middle uk-background-cover uk-default home-section-one" data-src="{{ asset('assets/site/img/bg2.png')}}" uk-img="loading: eager">
    <div class="uk-margin-left">
    <h2>
        Launch Your Product In India?
    </h2>
    <p>Get your Product Approval to Sell it in India Fast & Economical way</p>
    </div>
</div>
<div class="uk-child-width-1-4@m" uk-grid>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top">
                <img src="images/light.jpg" width="1800" height="1200" alt="">
            </div>
            <div class="uk-card-body">
                <h3 class="uk-card-title">Media Top</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
        </div>
    </div>
</div>
@endsection
@section('styles')
@endsection
@section('scripts')
@endsection
@section('seo')
@endsection
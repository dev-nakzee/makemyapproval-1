<!DOCTYPE html>
<html>
    <head>
        <title>Title</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('seo')
        <link rel="stylesheet" href="{{ asset('assets/site/css/uikit.min.css')}}" />
        @yield('styles')
        <link rel="stylesheet" href="{{ asset('assets/site/css/style.min.css') }}" />
    </head>
    <body>
        <div class="uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle uk-position-z-index" id="loading_indicator">
            <span uk-spinner="ratio: 4.5"></span>
        </div>
        <div class="uk-section uk-padding-small uk-padding-remove-vertical uk-background-secondary uk-text-small uk-link-muted" uk-grid>
            <div class="uk-width-1-2@m">
                <a href="">For global enquiry</a>
            </div>
            <div class="uk-width-1-2@m uk-text-right">
                <a href="">email@email.com</a>
                <a href="">+919876543210</a>
            </div>
        </div>
        <nav class="uk-navbar-container uk-visible@m" uk-navbar="mode: click">
            <div class="uk-navbar-left">
                
            </div>
            <div class="uk-navbar-right header-image">
                <img src="{{asset('assets/site/img/aajadi.jpg')}}">
                <div class="header-poweredby">
                    <h6 style="font-size: 12px; font-weight: bold;">Powered By</h6>
                    <img src="{{asset('assets/site/img/raclogo1.png')}}">
                </div>
            </div>
        </nav>
        <nav class="uk-navbar-container" uk-navbar="mode: click" uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
            <div class="uk-navbar-left header-image uk-visible@m">
                <img class="logo" src="{{asset('assets/site/img/logomma.png')}}">
            </div>
            <div class="uk-navbar-left header-image-mobile uk-hidden@s">
                <img class="logo" src="{{asset('assets/site/img/logomma.png')}}">
            </div>
            <div class="uk-navbar-right uk-hidden@s uk-margin-right">
                <button class="uk-navbar-toggle" uk-navbar-toggle-icon uk-toggle="target: #offcanvas-nav-primary"></button>
            </div>
            <div id="offcanvas-nav-primary" uk-offcanvas="overlay: true">
                <div class="uk-offcanvas-bar uk-flex uk-flex-column">
                    <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li class="uk-parent">
                            <a href="#">Services</a>
                            <ul class="uk-nav-sub">
                                @if($services)
                                @foreach ($services as $s)
                                <li><a href="{{ url('services').$s->slug}}">{{ $s->service }}</a></li>
                                @endforeach
                                @endif
                            </ul>
                        </li>
                    </ul>
            
                </div>
            </div>
            <div class="uk-navbar-right uk-margin-right navbar-main uk-visible@m">
                <ul class="uk-navbar-nav">
                    <li><a href="{{ route('site.home') }}">Home</a></li>
                    <li><a href="{{ route('site.about') }}">About</a></li>
                    <li>
                        <a href>Services</a>
                        <div class="uk-navbar-dropdown" uk-drop="boundary: !.uk-navbar; stretch: x; flip: false">
                            <div class="uk-nav uk-navbar-dropdown-nav">
                                @if($services)
                                @foreach ($services as $s)
                                    <a href="{{url('services/').$s->slug}}" class="uk-card">
                                        {{ $s->service }}
                                    </a>
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </li>
                    <li><a href="{{ route('site.about') }}">Products</a></li>
                    <li><a href="{{ route('site.about') }}">Notices</a></li>
                    <li><a href="{{ route('site.about') }}">Resources</a></li>
                    <li><a href="{{ route('site.about') }}">Contact</a></li>
                    <li>
                        <a href="#"><span class="uk-button uk-button-secondary uk-button-small">Register<span></a>
                        <div class="uk-navbar-dropdown uk-navbar-dropdown-width-2">
                            <div class="uk-nav uk-navbar-dropdown-nav">
                                <h3>Register</h3>
                                <form class="uk-form-stacked">
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-text">Name</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" id="form-stacked-text" type="text" placeholder="Email/Mobile">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-text">Email</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" id="form-stacked-text" type="text" placeholder="Email/Mobile">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-text">Mobile</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" id="form-stacked-text" type="text" placeholder="Email/Mobile">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-text">Password</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" id="form-stacked-text" type="text" placeholder="Email/Mobile">
                                        </div>
                                    </div>
                                    <div class="uk-text-center">
                                        <button class="uk-button uk-button-small uk-button-primary">Register</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#"><span class="uk-button uk-button-secondary uk-button-small">Login<span></a>
                        <div class="uk-navbar-dropdown uk-navbar-dropdown-width-2">
                            <div class="uk-nav uk-navbar-dropdown-nav">
                                <h3>Login</h3>
                                <form class="uk-form-stacked">
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-text">Email / Mobile</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" id="form-stacked-text" type="text" placeholder="Email/Mobile">
                                        </div>
                                    </div>
                                    <div class="uk-text-center">
                                        <button class="uk-button uk-button-small uk-button-primary">Login With OTP</button>
                                        <button class="uk-button uk-button-small uk-button-primary uk-margin-top">Login With Password</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        @yield('content')
    </body>
    <script src="{{ asset('assets/site/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/site/js/uikit.min.js')}}"></script>
    <script src="{{ asset('assets/site/js/uikit-icons.min.js')}}"></script>
    <script src="{{ asset('assets/site/js/custom.min.js')}}"></script>
    @yield('scripts')
</html>


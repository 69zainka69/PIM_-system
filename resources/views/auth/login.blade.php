<html><head>
    <title>AtroPIM</title>
    <script type="text/javascript" src="client/app.min.js?r=1663251581" data-base-path=""></script>
    <link href="client/modules/treo-core/css/treo/treo-light-theme.css?r=1663251581" rel="stylesheet" id="main-stylesheet">
    <link href="client/css/file-icon-classic.css" rel="stylesheet">
    <link href="client/css/file-icon-vivid.css" rel="stylesheet">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="AtroPIM is a single page application (SPA) with an API-centric architecture and flexible data model based on entities, entity attributes and relations of all kinds among them.">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="icon" href="client/modules/treo-core/img/favicon.svg" type="image/svg+xml">
    <link rel="icon" href="client/modules/treo-core/img/favicon.ico" sizes="16x16" type="image/x-icon">
    <link rel="icon" href="client/modules/treo-core/img/favicon_32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="client/modules/treo-core/img/favicon_48.png" sizes="48x48" type="image/png">
    <link rel="icon" href="client/modules/treo-core/img/favicon_96.png" sizes="96x96" type="image/png">
    <link rel="icon" href="client/modules/treo-core/img/favicon_144.png" sizes="144x144" type="image/png">

</head>
<body style="background-image: url(https://vm.ua/public/images/slide-02.jpg);background-size: cover;background-repeat: no-repeat;background-position: center;height: 100vh"><div class="container content" style="height: calc(100% - 28px);">
<div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2">
    <div id="login" class="panel panel-default">
        <div class="panel-heading">
            <div class="logo-container">
                <img src="https://vm.ua/public/images/logo-vm-1.png" class="logo">
            </div>
        </div>
        <div class="panel-body">
            <div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required >

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<footer class="container"><p class="credit small" style="width: 100%"><a target="_blank" href="https://github.com/atrocore/atrocore/issues/new">Report a Bug</a><span>  |  </span><a target="_blank" href="https://github.com/atrocore/atrocore/discussions">Community</a><span>  |  </span><a target="_blank" href="https://help.atrocore.com">Help Center</a><span>  |  </span><a target="_blank" href="https://my.atrocore.com/customerportal">Support</a><span>  |  </span><a target="_blank" href="https://atrocore.com/contact">Сontact Us</a><span style="float: right" class="copyright">© <a href="https://atrocore.com" title="AtroCore is based on EspoCRM" target="_blank">AtroCore is based on EspoCRM</a> | <span>AtroСore: 1.4.94</span></span></p>
<button class="scroll-top hidden"><span class="fas fa-chevron-up"></span></button>
</footer>
<span class="photo-link">Photo by <a href="https://www.pexels.com/@rachel-claire" target="_blank">Rachel Claire</a></span></body></html>









































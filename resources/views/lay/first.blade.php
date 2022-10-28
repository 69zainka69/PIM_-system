<html><head>
    <script src="https://cdn.tiny.cloud/1/bfr93pekxrwztnw15luq7902jvyax1aqpv75n72jlqz6qct1/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <title>@yield('title')</title>
    <link href="/client/modules/treo-core/css/treo/treo-classic-theme.css?r=1663146785" rel="stylesheet" id="main-stylesheet">
    <link href="/client/css/file-icon-classic.css" rel="stylesheet">
    <link href="/client/css/file-icon-vivid.css" rel="stylesheet">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="utf-8" http-equiv="encoding">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="AtroPIM is a single page application (SPA) with an API-centric architecture and flexible data model based on entities, entity attributes and relations of all kinds among them.">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="icon" href="/client/modules/treo-core/img/favicon.svg" type="image/svg+xml">
    <link rel="icon" href="/client/modules/treo-core/img/favicon.ico" sizes="16x16" type="image/x-icon">
    <link rel="icon" href="/client/modules/treo-core/img/favicon_32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/client/modules/treo-core/img/favicon_48.png" sizes="48x48" type="image/png">
    <link rel="icon" href="/client/modules/treo-core/img/favicon_96.png" sizes="96x96" type="image/png">
    <link rel="icon" href="/client/modules/treo-core/img/favicon_144.png" sizes="144x144" type="image/png">
    <script src="/js/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
<style type="text/css" data-gs-style-id="gridstack-style-88104"></style>
<style>
body{
font-family: Tahoma !important;
}
h1, h2, h3, h4, h5, h6{
font-family: Tahoma !important;
}
p, th, td, tr, li, ul, ol, a, select, option, input,div{
font-size: 14px;
font-weight: 300;
font-family: Tahoma !important;
}
button, span{
font-family: Tahoma;
font-size:14px;
font-weight:300;
}





</style>
</head>
<body style="min-height: 530px;"><header id="header"><div id="navbar"><div class="navbar navbar-inverse" role="navigation">
<div class="navbar-header">
    <button type="button" class="navbar-toggle">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand nav-link" href="/"><img src="https://vm.ua/public/images/logo-vm-1.png" class="logo"><span class="home-icon fas fa-th-large" title="Home"></span></a>
    <div class="navbar-header-inner pull-right">
            <button type="button" class="search-toggle pull-left visible-xs">
                <span class="fa fa-search"></span>
            </button>
        <ul class="visible-xs header-right pull-left">
            <li class="last-viewed-badge-container">
                <a href="javascript:" class="notifications-button" data-action="showLastViewed">
<span class="fas fa-history"></span>
</a>
<div class="last-viewed-panel-container"></div>

            </li>
            <li class="dropdown queue-badge-container"><a href="javascript:" class="notifications-button" data-action="showQueue">
<span class="fas fa-tasks"></span>
</a>
<div class="queue-panel-container"></div>
</li><li class="notifications-badge-container ">
                <a href="javascript:" class="notifications-button" data-action="showNotifications">
<span class="fas fa-bell icon bell"></span>
<span class="badge number-badge hidden"></span>
</a>
<div class="notifications-panel-container"></div>

            </li>
        </ul>
        <div class="dropdown menu-container visible-xs pull-left">
            <a id="nav-menu-dropdown" class="dropdown-toggle" data-toggle="dropdown" href="#" title="Menu"><span class="fas fa-bars"></span></a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="nav-menu-dropdown">
                <li><a href="#User/view/1" class="nav-link"><img class="avatar avatar-link" width="16" src="?entryPoint=avatar&amp;size=small&amp;id=1"> Admin</a></li>
                <li class="divider"></li>
                <li><a href="#Admin" class="nav-link">управління</a></li>
                <li><a href="#Preferences" class="nav-link">Персональні Налаштування</a></li>
                <li class="divider"></li>
                <li class=""><a href="javascript:" class="nav-link action" data-action="composerUpdate">Оновити <span id="composer-update" class="fas fa-arrow-alt-circle-down"></span></a></li>
                <li class="divider"></li>
                <li><a href="#clearCache" class="nav-link">Clear Local Cache</a></li>
                <li class="divider"></li>
                <li><a href="#logout" class="nav-link">Log Out</a></li>
            </ul>
        </div>

    </div>
</div>

<div class="menu">
    <ul class="nav navbar-nav tabs" style="height: 904px;">
        @if(isset($menus))
        @foreach($menus as $val)
        <li data-name="AssociatedProduct" class="not-in-more tab">
            <a href="/{{$val['link']}}" class="nav-link">
                <span class="full-label"> {{$val['name']}}</span>
                <span class="short-label" title="Асоційовані продукти">
                    <span class=" {{$val['favicon']}}"></span>
                </span>
            </a>
        </li>
        @endforeach
       @endif

    </ul>
    <footer><ul class="footer-links hidden">

<li style="padding-top: 10px">
    <span>©<span class="year"></span> <a href="https://atrocore.com" title="AtroCore / EspoCRM" target="_blank">AtroCore is based on EspoCRM</a></span>
</li>
</ul>
<div class="copyright">
<span>AtroСore: 1.4.82</span>
<span class="toggle-icon-up fas fa-angle-up"></span>
<span class="toggle-icon-down fas fa-angle-down hidden"></span>
</div>
</footer>
</div>

<div class="collapse navbar-collapse navbar-body">

    <ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown hidden-xs last-viewed-badge-container">
            <a onclick="update()" href="#" class="notifications-button" data-action="showLastViewed">
<span class="fas fa-history"></span>
</a>
<div class="last-viewed-panel-container"></div>

        </li>
      
      <li>
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                           Вихід
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
            </li>

        <li class="nav navbar-nav navbar-form global-search-container">
<div class="global-search-panel-container"></div>

        </li>
    </ul>
</div>
</div>
</div>
</header>
<div id="content" class="container content">
<div id="main">
 

    @yield('content')


</div>
</body></html>


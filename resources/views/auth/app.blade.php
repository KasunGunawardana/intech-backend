<!DOCTYPE html>
<html>
    <head>
        <title>{{ $companyDetails->company_name }} Admin panel</title>

        <meta charset="UTF-8">
        <meta name="description" content="{{ $companyDetails->company_name }} | Discover the World With Study">
        <meta name="keywords" content="Admin,Panel,{{ $companyDetails->company_name }}">
        <meta name="author" content="Kasun Gunawardana">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="{{ asset('css/uikit.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/notyf.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/uikit-rtl.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="{{ asset('js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('js/uikit.min.js') }}" defer></script>
    <script src="{{ asset('js/uikit-icons.min.js') }}" defer></script>
    </head>
    <body>
        <div uk-sticky="media: 960" class="uk-navbar-container tm-navbar-container uk-sticky uk-active" style="position: fixed; top: 0px; width: 1903px;">
            <div class="uk-container uk-container-expand">
                <nav uk-navbar>
                    <div class="uk-navbar-left">
                        <a href="" class="uk-navbar-item uk-logo">
                            Admin - {{ $companyDetails->company_name }}
                        </a>
                    </div>
                </nav>
            </div>
        </div>
        @yield('content')
        
        <script src="{{ asset('js/script.js') }}" defer></script>
</body>
</html>
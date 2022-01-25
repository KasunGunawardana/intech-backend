<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Intech Dashboard | Reinvent Your Future</title>
    <meta name="keywords" content="Graphic, multimedia 3D, multimedia, multimedia Video, Graphic Design, ICT, 3D Animation, AutoCAD, Photography, Video Production, Video Editing, 2D Animation, Computer Science, Web Designing, English, VFX" >
<meta name="description" content="INTECH(Indeepa college of technology) has been founded with the Nobel vision of creating innovative multitalented professionals in the area of IT/ Business/Engineering and Biomedical sciences while enabling them to develop core competencies & skills towards the highly sophisticated professional carrier." >	

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/uikit.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/notyf.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/uikit-rtl.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('css')

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="{{ asset('js/uikit.min.js') }}" defer></script>
    <script src="{{ asset('js/uikit-icons.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.transit.min.js') }}" defer></script>
    <script src="{{ asset('js/notyf.min.js') }}" defer></script>
    <script src="{{ asset('js/granim.min.js') }}" defer></script>

    <link href="{{ asset('images/favicon.ico') }}" rel="shortcut icon" type="image/vnd.microsoft.icon" />
</head>
<body>
    <div id="app">
        <div data-uk-sticky class="uk-navbar-container tm-navbar-container uk-active sticky-nav-bar">
            <div class="uk-container uk-container-expand">
                <nav data-uk-navbar class="uk-flex-between">
                    <div class="uk-navbar-left">
                        <a id="sidebar_toggle" class="uk-navbar-toggle" data-uk-navbar-toggle-icon ></a>
                        <a href="#" class="uk-navbar-item uk-logo">
                            intech.edu.lk
                        </a>
                        <!-- <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a> -->
                    </div>
                    <div class="uk-navbar-right uk-light">
                        <ul class="uk-navbar-nav">
                        @guest
                            @if (Route::has('login'))
                                <li>
                                    <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            <!-- <div>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            </div> -->
                        @else
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                            </li>
                        @endguest
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div id="sidebar" class="tm-sidebar-left uk-background-default">
            <div class="uk-flex-center">
                <div class="user uk-text-center">
                    <img id="avatar" class="uk-preserve-width uk-border-circle" src="{{ Avatar::create(auth()->user()->email)->toBase64() }}" alt="{{ auth()->user()->name }}">
                    <div class="uk-margin-top"></div>
                    <div id="name" class="uk-text-truncate">{{ auth()->user()->name }}</div>
                    <div class="uk-margin-small small-note"><span class="uk-badge">{{ auth()->user()->role }}</span></div>
                    <div id="email" class="uk-text-truncate">{{ auth()->user()->email }}</div>
                    <span id="status" data-enabled="true" data-online-text="Online" data-away-text="Away" data-interval="10000" class="uk-margin-top uk-label uk-label-success"></span>
                </div>
                <br />
            </div>
            <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
                <li><a href="{{ route('home') }}">Dashboard</a></li>
                <li class="uk-parent">
                    <a href="#">Content</a>
                    <ul class="uk-nav-sub">
                        {{-- <li><a href="#">General</a></li> --}}
                        <li><a href="{{ route('pages.index') }}">Pages</a></li>
                        <li><a href="{{ route('pages.nav-list') }}">Page Navigation</a></li>
                        <li><a href="{{ route('blocks.index') }}">Blocks</a></li>
                    </ul>
                </li>
                <li class="uk-parent">
                    <a href="#">Courses</a>
                    <ul class="uk-nav-sub">
                        {{-- <li><a href="#">General</a></li> --}}
                        <li><a href="{{ route('courses.index') }}">Courses</a></li>
                        <li><a href="{{ route('course-types.index') }}">Course Type</a></li>
                        <li><a href="{{ route('courses.list') }}">Courses Order</a></li>
                        <li><a href="{{ route('trashed-courses.index') }}">Trashed Courses</a></li>
                    </ul>
                </li>
                <li class="uk-parent">
                    <a href="#">Instructors</a>
                    <ul class="uk-nav-sub">
                        <li><a href="{{ route('instructors.index') }}">Instructors</a></li>
                        <li><a href="{{ route('instructors.list') }}">Instructors Order</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('announcements.index') }}">Announcements</a></li>
                <li class="uk-parent">
                    <a href="#">Blog</a>
                    <ul class="uk-nav-sub">
                        <li><a href="{{ route('blog.create') }}">General</a></li>
                        <li><a href="{{ route('posts.index') }}">Posts</a></li>
                        <li><a href="{{ route('categories.index') }}">Categories</a></li>
                    </ul>
                </li>
                <li class="uk-parent">
                    <a href="#">Gallery</a>
                    <ul class="uk-nav-sub">
                        <li><a href="{{ route('gallery.general') }}">General</a></li>
                        <li><a href="{{ route('gallery.index') }}">Galleries</a></li>
                        <li><a href="{{ route('gallery.list') }}">Galleries Order</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('logo-slider.index') }}">Logo Slider</a>
                </li>
                <li>
                    <a href="{{ route('effects.index') }}">Effects</a>
                </li>
                <li onclick="clearNotifications()">
                    <a href="{{ route('enquiries.index') }}">Enquiries <span class="uk-badge email_notifications">
                        @if ($email_notifications->count() > 0)
                        {{ $email_notifications->count() }}
                        @endif
                        </span></a>
                </li>
                @if (auth()->user()->isAdmin())
                    <li><a href="{{ route('users.index') }}">Users</a></li>
                @endif
                <li><a href="{{ route('company.index') }}">Company Details</a></li>
            </ul>
        </div>

        <div class="content-padder content-background">
            @yield('content')
        </div>
    </div>
    <script src="{{ asset('js/script.js') }}" defer></script>
    @yield('scripts')
    <script>
        $('ul.uk-nav-default').find('a[href^="{{ url()->current(); }}"]').addClass('uk-active');
    </script>

<script>
    function clearNotifications() {
        // setTimeout(() => {
        //     document.querySelector(".email_notifications").style.display = 'none';
        // }, 1000);
    }
</script>
</body>
</html>

<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @wp_head
</head>
<body>
<!--[if lt IE 8]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<header>
    <div id="bookstore-logo">
        <a href="{{ home_url() }}">
            <img src="{{ themosis_theme_assets() }}/images/logo.png" alt="Bookstore" width="154" height="40">
        </a>
    </div>
    <div id="bookstore-navigation">
        @php(wp_nav_menu([
            'theme_location' => 'header-nav',
            'container' => false
        ]))
    </div>
    <div id="bookstore-search">
        <div id="search-button"></div>
        <div id="search--form">
            <div id="search--form__icon"></div>
            <div id="search--form__form">
                {!! Form::open(home_url(), 'get', false, ['class' => 'searchform', 'role' => 'search']) !!}
                {!! Form::text('s', '', ['id' => 's', 'placeholder' => __("Search a book...", THEME_TEXTDOMAIN), 'autocomplete' => 'off']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</header>

@yield('main')

<footer>
    <div class="wrapper">
        <div class="footer--copyright">
            <p>&copy; {{ sprintf('%s %d', __("Copyright Bookstore", THEME_TEXTDOMAIN), date('Y')) }}</p>
        </div>
        <div class="footer--navigation">
            @php(wp_nav_menu([
                'theme_location' => 'footer-nav',
                'container' => false
            ]))
        </div>
    </div>
</footer>
@wp_footer
</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- /Meta -->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @if(isset($actualite))
        <meta property='og:title' content='{{ $actualite->title }}'/>
        @if(!$actualite->media->isEmpty())
        <meta property='og:image' content='{{ secure_asset($actualite->getFirstMedia('main')->getUrl()) }}'/>
        @endif
        <meta property='og:description' content='{{ strip_tags(\Str::limit($actualite->content, 200,'')) }}'/>
        <meta property='og:url' content='{{ secure_url('blog/'.$actualite->id) }}'/>
        <meta name="author" content="{{ $actualite->author }}">
    @endif

    <title>{{ config('app.name', 'Site') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ secure_asset('favicon.png') }}">
    <!-- /Favicon -->

    <!-- Fontawesome 5 -->
    <link rel="stylesheet" href="{{ secure_asset('css/all.css') }}" />

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pace-js@latest/pace-theme-default.min.css">
    <link rel="stylesheet" href="{{ secure_asset('css/reset.css') }}" />
    <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}?{{ rand(1234,23456765) }}" />
    <link rel="stylesheet" href="{{ secure_asset('css/skin.css') }}?{{ rand(1234,23456765) }}" />
    <link rel="stylesheet" href="{{ secure_asset('css/bxslider.css') }}?{{ rand(1234,23456765) }}" />
    <link rel="stylesheet" href="{{ secure_asset('css/loader.css') }}" />
    <link rel="stylesheet" href="{{ secure_asset('css/icons.css') }}" />
    <link rel="stylesheet" href="{{ secure_asset('css/shortcodes.css') }}?{{ rand(1234,23456765) }}" />
    <link rel="stylesheet" href="{{ secure_asset('css/ultimate.min.css') }}" />
    <link rel="stylesheet" href="{{ secure_asset('css/js_composer.min.css') }}" />
    <link rel="stylesheet" href="{{ secure_asset('css/responsive.css') }}?{{ rand(1234,23456765) }}" />
    <!-- /Styles -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

    <script type='text/javascript' id='jquery-core-js-extra'>
        /* <![CDATA[ */
        var dttheme_urls = {"theme_base_url":"https:\/\/amtgroup.test","framework_base_url":"https:\/\/amtgroup.test","url":"https:\/\/amtgroup.test","stickynav":"enable","stickyele":".main-header-wrapper","isRTL":"","loadingbar":"enable","nicescroll":"disable"};
        /* ]]> */
    </script>

</head>
<body class="home-page home page-template-default page theme-finance layout-wide fullwidth-header transparent-header sticky-header header-on-slider page-with-slider no-js">

    @include('partials.loader')

    <!-- **Wrapper** -->
    <div class="wrapper">
        <div class="inner-wrapper">
            @include('partials.header')

            <!-- **Main** -->
            <div id="main">
                <div class="container">
                    @yield('content')
                </div>
            </div>

            @include('partials.footer')
        </div>
    </div>


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
<script src="{{ secure_asset('js/debouncedresize.js') }}"></script>
<script src="{{ secure_asset('js/jquery.ui.totop.min.js') }}"></script>
<script src="{{ secure_asset('js/jquery.nicescroll.min.js') }}"></script>
<script src="{{ secure_asset('js/jquery.visualNav.min.js') }}"></script>
<script src="{{ secure_asset('js/jquery.sticky.js') }}"></script>
<script src="{{ secure_asset('js/jquery.classie.js') }}"></script>
<script src="{{ secure_asset('js/content-box.min.js') }}"></script>
<script src="{{ secure_asset('js/info-box.min.js') }}"></script>
<script src="{{ secure_asset('js/jquery.caroufredsel.js') }}"></script>
<script src="{{ secure_asset('js/slick.min.js') }}"></script>
<script src="{{ secure_asset('js/custom.js') }}"></script>

{{--<script src="{{ secure_asset('js/general.js?v=1.1.1') }}"></script>--}}
<script src="{{ secure_asset('js/app.js') }}?{{ rand(1222,87654) }}" defer></script>
<!-- /Scripts -->

</body>
</html>

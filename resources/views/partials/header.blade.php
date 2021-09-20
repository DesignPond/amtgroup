<!-- **Header Wrapper** -->
<div id="header-wrapper" class="dt-sc-dark-bg">
    <!-- **Header** -->
    <header id="header">
        <!-- **Main Header Wrapper** -->
        <div id="main-header-wrapper" class="main-header-wrapper">
            <div class="container">
                <!-- **Main Header** -->
                <div class="main-header">
                    <div id="logo">
                        <a href="{{ secure_url('/') }}" title="{{ config('app.name') }}">
                            <img class="normal_logo" src="{{ secure_asset('images/logo.svg') }}" alt="{{ config('app.name') }}" title="{{ config('app.name') }}" />
                            <img class="retina_logo" src="{{ secure_asset('images/logo.svg') }}" alt="{{ config('app.name') }}" title="{{ config('app.name') }}" />
                        </a>
                    </div>
                    @include('partials.navigation')
                </div>
            </div>
        </div>
        <!-- **Main Header** -->

        <div id="slider">
            <div class="slider">
                <div><img src="{{ secure_asset('images/header/header01.jpg') }}"></div>
                <div><img src="{{ secure_asset('images/header/header02.jpg') }}"></div>
            </div>
        </div>
    </header><!-- **Header - End** -->
</div><!-- **Header Wrapper - End** -->


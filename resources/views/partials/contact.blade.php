<!-- Section: Contact -->
<section id="{{ $page->translate(session()->get('locale'))->menu }}" class="section section-left section-contact">
    <div class="container">
        <!-- Section Muted Title -->
        <div class="section-muted-title" data-stellar-ratio=".9">
            <span>{{ ucfirst($page->translate(session()->get('locale'))->title) }}</span>
        </div>
        <!-- /Section Muted Title -->
        <!-- Section Header Row -->
        <div class="row">
            <div class="col-12">
                <header class="section-header">
                    <div class="section-navigation">
                        <a href="#{{ $page->menu }}" class="smooth-scroll"><i class="fal fa-envelope"></i></a>
                    </div>
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h2 class="section-title">{{ ucfirst($page->translate(session()->get('locale'))->title) }}</h2>
                        <div class="section-subtitle">{!! $page->translate(session()->get('locale'))->extract !!}</div>
                    </div>
                    <!-- /Section Heading -->
                </header>
            </div>
        </div>
        <!-- /Section Header Row -->
        <!-- Section Content Row -->
        <div class="row section-content section-contact-wrapper">
            <div class="col-sm-1 col-lg-3 col-md-3"></div>
            <!-- Column -->
            <div class="col-sm-12 col-lg-3 col-md-3">
                <!-- Icon Box Alt -->
                <div class="media contact-box icon-box-alt">
                    <i class="fal fa-envelope"></i>
                    <div class="media-body">
                        <h6 class="mb-0">Email</h6>
                        <span class="text-muted">{{ $page->contact['email'] }}</span>
                    </div>
                </div>
                <!-- /Icon Box Alt -->
            </div>
            <!-- Column -->
            <div class="col-sm-12 col-lg-3 col-md-3">
                <!-- Icon Box Alt -->
                <div class="media contact-box icon-box-alt">
                    <i class="fal fa-map-pin"></i>
                    <div class="media-body">
                        <h6 class="mb-0">@lang('team.adresse')</h6>
                        <span class="text-muted">{!! translate($page->contact['adresse']) !!}</span>
                    </div>
                </div>
                <!-- Icon/Box Alt -->
            </div>
            <!-- Column -->
            <div class="col-sm-12 col-lg-3 col-md-3">
                <!-- Icon Box Alt -->
                <div class="media contact-box icon-box-alt">
                    <i class="fal fa-phone-alt"></i>
                    <div class="media-body">
                        <h6 class="mb-0">@lang('team.phone')</h6>
                        <span class="text-muted">{!! $page->contact['phone'] !!}</span>
                    </div>
                </div>
                <!-- /Icon Box Alt -->
            </div>
        </div>
        <!-- /Section Content Row -->
    </div>
</section>
<!-- /Section: Contact -->

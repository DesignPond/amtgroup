<section id="{{ $page->translate(session()->get('locale'))->menu }}" class="section section-about">
    <div class="container position-relative">

        <!-- Section Muted Title -->
        <div class="section-muted-title" data-stellar-ratio=".9" style="top: 135.3px;">
            <span>{{ ucfirst($page->translate(session()->get('locale'))->title) }}</span>
        </div>
        <!-- /Section Muted Title -->

        <!-- Section Header Row -->
        <div class="row">
            <div class="col-12">
                <header class="section-header">

                    <!-- Section Navigation -->
                    <div class="section-navigation">
                        <a id="#{{ $page->menu }}" class="smooth-scroll"><i class="fal fa-gavel"></i></a>
                    </div>
                    <!-- /Section Navigation -->

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
        <div class="row section-content">
            <div class="col-12 col-lg-10">

                @if($page->services && !empty($page->services))
                    <?php $rows = $page->services->chunk(3); ?>
                    @foreach($rows as $i => $services)
                        <div class="row {{ $i == 0 ? 'service-wrapper' : '' }}">
                            @foreach($services as $service)
                                <div class="col-12 col-lg-4">
                                    <div class="service-item">
                                        <i class="fal fa-{{ $service->icon }}"></i>
                                        <h4>{{ $service->translate(session()->get('locale'))->title }}</h4>
                                        <div class="mb-2 service-content">
                                            {!! $service->translate(session()->get('locale'))->content !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- /Column -->
                            @endforeach
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
        <!-- /Section Content Row -->

    </div>
</section>

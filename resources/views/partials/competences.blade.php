<section id="{{ $page->translate(session()->get('locale'))->menu }}" class="section section-right section-testimonials">
    <div class="container">

        <!-- Section Muted Title -->
        <div class="section-muted-title" data-stellar-ratio=".9" style="top: 129.227px;">
            <span>{{ ucfirst($page->translate(session()->get('locale'))->title) }}</span>
        </div>
        <!-- /Section Muted Title -->

        <!-- Section Header Row -->
        <div class="row">
            <div class="col-12">
                <header class="section-header">

                    <!-- Section Navigation -->
                    <div class="section-navigation">
                        <a href="#{{ $page->menu }}" class="smooth-scroll"><i class="fal fa-pen-fancy"></i></a>
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
        <div class="row">
            <div class="col-12 col-lg-10">
                <div class="row">

                    @if(isset($page->competences) && !empty($page->competences))
                        @foreach($page->competences as $competence)

                            <!-- Column -->
                            <div class="col-12 col-lg-12">
                                <div class="media testimonial-item-2 competence-item-body">
                                    <!-- Content -->
                                    <div class="media-body testimonial-item-body">
                                        <i class="icon {{ $competence->icon }} we-offer-icon"></i>
                                        <div class="testimonial-item-title">{{ $competence->translate(session()->get('locale'))->title }}</div>

                                        <a class="text-muted" href="#" data-toggle="collapse" data-target="#collapse{{ $competence->id }}" aria-expanded="false" aria-controls="collapse{{ $competence->id }}">
                                            <i class="fal fa-plus"></i> &nbsp;@lang('team.details')
                                        </a>
                                        <div class="collapse competence" id="collapse{{ $competence->id }}">
                                            <div class="testimonial-item-text">{!! $competence->translate(session()->get('locale'))->content !!}</div>
                                        </div>

                                    </div>
                                    <!-- /Content -->
                                </div>
                            </div>
                            <!-- /Column -->
                        @endforeach
                    @endif

                </div>
            </div>
        </div>
        <!-- /Section Content Row -->

    </div>
</section>

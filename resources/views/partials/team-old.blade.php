<!-- Section: team -->
<section id="{{ $page->translate(session()->get('locale'))->menu }}" class="section section-right section-testimonials">
    <div class="container">

        <!-- Section Muted Title -->
        <div class="section-muted-title" data-stellar-ratio=".9">
            <span>
                {{ isset($page->translate(session()->get('locale'))->title) ? ucfirst($page->translate(session()->get('locale'))->title) : '' }}
            </span>
        </div>
        <!-- /Section Muted Title -->

        <!-- Section Header Row -->
        <div class="row">
            <div class="col-12">
                <header class="section-header">

                    <!-- Section Navigation -->
                    <div class="section-navigation">
                        <a href="#{{ $page->menu }}" class="smooth-scroll"><i class="fal fa-user-friends"></i></a>
                    </div>
                    <!-- /Section Navigation -->

                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h2 class="section-title">{{ isset($page->translate(session()->get('locale'))->title) ? ucfirst($page->translate(session()->get('locale'))->title) : '' }}</h2>
                        <div class="section-subtitle">{!! $page->translate(session()->get('locale'))->extract ?? '' !!}</div>
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

                    @if(isset($page->teams) && !$page->teams->isEmpty())
                        @foreach($page->teams as $team)

                            <!-- Column -->
                            <div class="col-12 col-lg-12 team-item">

                                <div class="media testimonial-item-2">
                                    <!-- Avatar -->
                                    <div class="avatar">
                                        <img src="{{ secure_asset($team->getFirstMedia('main')->getUrl(),config('app.secure_asset')) }}" alt="{{ $team->name }}" title="" class="img-fluid">
                                    </div>
                                    <!-- /Avatar -->
                                    <!-- Content -->
                                    <div class="media-body testimonial-item-body">
                                        <!-- Author -->
                                        <div class="testimonial-item-author">{{ $team->name }}</div>
                                        <div class="testimonial-item-company">{{ $team->translate(session()->get('locale'))->position ?? '' }}</div>
                                        <!-- /Author -->
                                        <!-- Text -->
                                        <div class="testimonial-item-text">

                                            {!! $team->translate(session()->get('locale'))->biography  ?? ''!!}
                                        </div>

                                        @include('partials.accordion',['team' => $team])

                                        @if(!empty($team->email))
                                            <div class="testimonial-item-email"><i class="fal fa-envelope"></i> &nbsp;{{ $team->email }}</div>
                                        @endif

                                        <!-- /Text -->
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


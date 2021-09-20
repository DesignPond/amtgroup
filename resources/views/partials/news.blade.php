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
                    </div>
                    <!-- /Section Heading -->
                </header>
            </div>
        </div>
        <!-- /Section Header Row -->

        <!-- Section Content Row -->
        <div class="row section-content">
            <div class="col-12 col-lg-10">

                @if(!$actualites->isEmpty())
                    <?php $rows = $actualites->chunk(2); ?>
                    @foreach($rows as $i => $news)
                        <div class="row">
                            @foreach($news as $actualite)
                                <div class="col-12 col-lg-6 col-md-6">
                                   @include('partials.post',['actualite' => $actualite])
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
        <!-- /Section Content Row -->

    </div>
</section>

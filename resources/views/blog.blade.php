@extends('layouts.master')
@section('content')

    <div class="maincontent data-affix-top">

        <section id="News" class="section section-about">
            <div class="container position-relative">

                <!-- Section Muted Title -->
                <div class="section-muted-title" data-stellar-ratio=".9" style="top: 135.3px;">
                    <span>News</span>
                </div>
                <!-- /Section Muted Title -->

                <!-- Section Header Row -->
                <div class="row">
                    <div class="col-12">
                        <header class="section-header">

                            <!-- Section Navigation -->
                            <div class="section-navigation">
                                <a id="#News" class="smooth-scroll"><i class="fal fa-newspaper"></i></a>
                            </div>
                            <!-- /Section Navigation -->

                            <!-- Section Heading -->
                            <div class="section-heading">
                                <h2 class="section-title">News</h2>
                            </div>
                            <!-- /Section Heading -->

                        </header>
                    </div>
                </div>
                <!-- /Section Header Row -->

                <!-- Section Content Row -->
                <div class="row section-content">
                    <div class="col-12 col-lg-10">
                        <article class="blog-post">


                            <div class="row">
                                <div class="col-4">
                                    <!-- Header -->
                                    <header class="blog-post-header">
                                        <!-- Media -->
                                        <div class="blog-post-media blog-post-media-blog">
                                            <div class="small">
                                                <img src="{{ secure_asset($actualite->getFirstMedia('main')->getUrl()) }}" alt="{{ $actualite->title }}" class="img-fluid">
                                            </div>
                                        </div>
                                        <!-- /Media -->
                                    </header>
                                    <!-- /Header -->
                                </div>
                                <div class="col-8">
                                    <!-- Body -->
                                    <div class="blog-post-body">
                                        <!-- Title -->
                                        <a href="#" class="blog-post-title">{{ $actualite->title }}</a>
                                        <!-- /Title -->
                                        <!-- Meta Information -->
                                        <div class="blog-post-meta mb-4">
                                            <a href="#" class="link">{{ $actualite->created_at->format('d/m/Y') }}</a>
                                            <span class="separator ml-2 mr-2"></span>
                                            <a href="#" class="link">{{ $actualite->author }}</a>
                                        </div>
                                        <!-- /Meta Information -->
                                        {!! $actualite->content !!}
                                    </div>
                                    <!-- /Body -->
                                </div>
                            </div>

                        </article>
                    </div>
                </div>

            </div>
        </section>

    </div>

@endsection

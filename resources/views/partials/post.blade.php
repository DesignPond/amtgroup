<article class="blog-post">
    <!-- Header -->
    <header class="blog-post-header">
        <!-- Media -->
        <div class="blog-post-media">
            <div>
                <img src="{{ secure_asset($actualite->getFirstMedia('main')->getUrl()) }}" alt="{{ $actualite->title }}" class="img-fluid">
            </div>
        </div>
        <!-- /Media -->
        <!-- Title -->
        <a href="#" class="blog-post-title">{{ $actualite->title }}</a>
        <!-- /Title -->
        <!-- Meta Information -->
        <div class="blog-post-meta">
            <a href="#" class="link">{{ $actualite->created_at->format('d/m/Y') }}</a>
            <span class="separator ml-2 mr-2"></span>
            <a href="#" class="link">{{ $actualite->author }}</a>
        </div>
        <!-- /Meta Information -->
    </header>
    <!-- /Header -->
    <!-- Body -->
    <div class="blog-post-body">
        {!! Str::limit($actualite->content, 180, '&nbsp;(...)'); !!}

        <p><a data-fancybox="" data-src="#trueModal_{{ $actualite->id }}" data-modal="true" href="javascript:;" class="btn btn-primary">Voir plus</a></p>

        @auth()
            <p><a class="link" href="{{ secure_asset('blog/'.$actualite->id) }}">Lien vers la news</a></p>
        @endauth

    </div>
    <!-- /Body -->

    <div id="trueModal_{{ $actualite->id }}" class="p-5" style="display: none; max-width: 600px;">
        <img src="{{ secure_asset($actualite->getFirstMedia('main')->getUrl()) }}" alt="{{ $actualite->title }}" class="img-fluid">

        <h2 class="mt-4">{{ $actualite->title }}</h2>
        {!! $actualite->content !!}
        <p><button data-fancybox-close="" class="btn btn-primary">Fermer</button></p>
    </div>

</article>

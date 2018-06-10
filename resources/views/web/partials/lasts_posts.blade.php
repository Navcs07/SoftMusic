<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading mt20">Ultimas Publicaciones</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
        </div>
        <div class="row">

            @foreach($posts as $post)

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="{{ route('app', [$post->slug]) }}" class="portfolio-link">
                        <img src="{{ asset('landing/img/portfolio/roundicons.png') }}" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <a href="{{ route('app', [$post->slug]) }}">
                            <h4><strong>{{ $post->title }}</strong></h4>
                        </a>
                        <p class="text-muted">{{ $post->category->name }}</p>
                        <p class="text-muted"><strong>Fecha: {{ $post->updated_at->diffForHumans() }}</strong></p>
                    </div>
                </div>

            @endforeach

        </div>
    </div>
</section>
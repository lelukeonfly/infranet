<section class="row align-items-center home m-0">
    <div class="m-auto rounded p-4">
        <h1 class="text-uppercase mb-5 text-center">
            {{ __('container5.title') }}</h1>

        <div class="row g-md-3 g-0 my-lg-3 my-md-2 my-1">

            @forelse ($news as $article)
                <div class="col-md-6 col-xl-4">
                    <a href="#"
                       class="text-decoration-none">
                        <div
                             class="clearfix bg-light d-flex align-items-center justify-content-between h-100 rounded p-3">
                            <img src="/storage/{{ $article->banner }}"
                                 class="col-3 float-md-start m-3"
                                 alt="...">
                            <div class="flex-column news">
                                <h4>{{ $article->{'title_' . app()->getLocale()} }}
                                </h4>
                                <p class="lh-lg">
                                    {{ $article->{'content_' . app()->getLocale()} }}
                                </p>
                                <div
                                     class="d-flex justify-content-between align-items-center">
                                    <div>
                                        {{ $article->created_at->format('d.m.Y H:i') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            @empty
                {{ __('container5.no articles') }}
            @endforelse

        </div>
        <div class="text-center">
            <a href="{{ app()->getLocale() }}news"
               role="button"
               class="btn btn-outline-primary col-4 text-uppercase p-2">{{ __('container5.button') }}</a>
        </div>
    </div>
</section>

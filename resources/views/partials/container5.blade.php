<section class="row align-items-center m-0 home">
    <div class="p-4 rounded m-auto">
        <h1 class="text-uppercase text-center mb-5">{{ __('container5.title') }}</h1>
        {{-- <div class="row row-cols-xl-3 row-cols-md-2 row-cols-1 g-5 mb-5">

            @forelse ($news as $article)
                <div class="col">
                    <a href="#" class="text-decoration-none">
                        <div class="clearfix bg-light rounded p-3 d-flex align-items-center justify-content-between">
                            <img src="/storage/{{ $article->banner }}" class="col-3 float-md-start m-3" alt="...">
                            <div class="flex-column news">
                                <h4>{{ $article->{'title_' . app()->getLocale()} }}</h4>
                                <p class="lh-lg">{{ $article->{'content_' . app()->getLocale()} }}</p>
                                <div class="d-flex justify-content-between align-items-center">
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

        </div> --}}

        <div class="row g-md-3 g-0 my-lg-3 my-md-2 my-1">

            @forelse ($news as $article)
                <div class="col-md-6 col-xl-4">
                    <a href="#" class="text-decoration-none">
                        <div class="clearfix bg-light rounded p-3 d-flex align-items-center justify-content-between h-100">
                            <img src="/storage/{{ $article->banner }}" class="col-3 float-md-start m-3" alt="...">
                            <div class="flex-column news">
                                <h4>{{ $article->{'title_' . app()->getLocale()} }}</h4>
                                <p class="lh-lg">{{ $article->{'content_' . app()->getLocale()} }}</p>
                                <div class="d-flex justify-content-between align-items-center">
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
            <a href="{{ app()->getLocale() }}news" role="button"
                class="btn btn-outline-primary col-4 text-uppercase p-2">{{ __('container5.button') }}</a>
        </div>
    </div>
</section>

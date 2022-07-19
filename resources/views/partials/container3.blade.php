<section class="row align-items-center home m-0">
    <div class="col-xl-6 m-auto rounded p-4">
        <h1 class="text-uppercase mb-5 text-center">
            {{ __('container3.title') }}</h1>
        <div class="mb-5 text-center">
            <button type="button"
                    class="btn btn-outline-primary col-4 p-2"><span
                      class="text-uppercase">{!! __('container3.button') !!}</span></button>
        </div>
        <div class="accordion accordion-flush"
             id="accordionexample">
            <div class="accordion-item">
                <h2 class="accordion-header"
                    id="heading">
                    <button class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapse"
                            aria-expanded="false"
                            aria-controls="collapse">{!! __('container3.dropdown.title') !!}</button>
                </h2>
                <div id="collapse"
                     class="accordion-collapse collapse"
                     aria-labelledby="heading"
                     data-bs-parent="#accordionexample">
                    <div class="accordion-body text-light">
                        <p class="lh-lg mb-3">{!! __('container3.dropdown.body') !!}</p>

                        <div
                             class="d-flex justify-content-between flex-wrap gap-3">

                            @forelse ($providers as $provider)
                                <a href="{{ $provider->url }}"
                                   class="rounded bg-white">
                                    <div
                                         class="d-flex align-items-center unternehmen">
                                        <img src="/storage/{{ $provider->img }}"
                                             alt="problems occured while loading the image"
                                             class="img-fluid m-auto"
                                             loading="lazy">
                                    </div>
                                </a>
                            @empty
                                {{ __('container3.no providers found') }}
                            @endforelse

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

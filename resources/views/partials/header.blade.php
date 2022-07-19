<nav class="navbar navbar-expand-lg bg-white align-items-center" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="/storage/img/logos/infranet.png" alt="Infranet Logo" height="50rem">
            <!-- <img src="img/logos/infranet.png" alt="Infranet Logo" class="img-fluid col-1"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mx-5 mb-xl-0 mb-3" id="navbarText">
            <ul class="navbar-nav mb-2 me-auto mb-lg-0 gap-xl-5">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">{{ __('company') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ __('nav.projects') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ __('nav.who are we') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ __('nav.career') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ __('nav.contact') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ __('nav.lang') }}</a>
                </li>
            </ul>
            <div class="nav-item d-flex float-end align-items-center">
                @auth
                    {{-- when logged in as any --}}
                    <a href="/dashboard" class="nav-link">{{ __('nav.dashboard') }}</a>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="btn btn-primary">logout</button>
                    </form>
                @else
                    {{-- when not logged in --}}
                    <a href="/login" class="nav-link">{{ __('nav.login') }}</a>
                    <a href="/register" class="nav-link">{{ __('nav.register') }}</a>
                @endauth
            </div>
        </div>
    </div>
</nav>

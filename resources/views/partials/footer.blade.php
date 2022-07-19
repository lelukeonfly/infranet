<section class="row align-items-stretch m-0">
    <div class="container">
        <div class="row row-cols-5 border-top my-5 py-5">
            <div class="col">
                <a href="/"
                   class="d-flex align-items-center link-dark text-decoration-none mb-3">
                    <svg class="bi me-2"
                         width="40"
                         height="32">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                    <img src="/storage/img/logos/infranet.png"
                         alt=""
                         class="img-fluid">
                </a>
                <p class="text-secondary">©
                    <?= date('Y') ?>
                </p>
            </div>

            <div class="col">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#"
                           class="nav-link p-0">Home</a></li>
                    <li class="nav-item mb-2"><a href="#"
                           class="nav-link p-0">Features</a></li>
                    <li class="nav-item mb-2"><a href="#"
                           class="nav-link p-0">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#"
                           class="nav-link p-0">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#"
                           class="nav-link p-0">About</a></li>
                </ul>
            </div>

            <div class="col">
                <h5>Menu</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a class="nav-link p-0"
                           href="#">{{ __('company') }}</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link p-0"
                           href="#">{{ __('nav.projects') }}</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link p-0"
                           href="#">{{ __('nav.who are we') }}</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link p-0"
                           href="#">{{ __('nav.career') }}</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link p-0"
                           href="#">{{ __('nav.contact') }}</a>
                    </li>
                    {{-- <li class="nav-item mb-2">
                        <a class="nav-link p-0" href="#">{{ __('nav.lang') }}</a>
                    </li> --}}
                    <li class="nav-item mb-2">
                        <a class="nav-link p-0"
                           href="#">{{ __('nav.clients') }}</a>
                    </li>
                </ul>
            </div>

            <div class="col">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#"
                           class="nav-link link-light p-0">Home</a></li>
                    <li class="nav-item mb-2"><a href="#"
                           class="nav-link link-light p-0">Features</a></li>
                    <li class="nav-item mb-2"><a href="#"
                           class="nav-link link-light p-0">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#"
                           class="nav-link link-light p-0">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#"
                           class="nav-link link-light p-0">About</a></li>
                </ul>
            </div>

            <div class="col">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#"
                           class="nav-link link-info p-0">Home</a></li>
                    <li class="nav-item mb-2"><a href="#"
                           class="nav-link link-info p-0">Features</a></li>
                    <li class="nav-item mb-2"><a href="#"
                           class="nav-link link-info p-0">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#"
                           class="nav-link link-info p-0">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#"
                           class="nav-link link-info p-0">About</a></li>
                </ul>
            </div>

            <div class="col">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#"
                           class="nav-link text-secondary p-0">Home</a></li>
                    <li class="nav-item mb-2"><a href="#"
                           class="nav-link text-secondary p-0">Features</a></li>
                    <li class="nav-item mb-2"><a href="#"
                           class="nav-link text-secondary p-0">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#"
                           class="nav-link text-secondary p-0">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#"
                           class="nav-link text-secondary p-0">About</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
{{-- <script src="js/bootstrap/bootstrap.js"></script> --}}
<script>
    //header autohide:
    let prevScrollpos = window.pageYOffset
    window.onscroll = function() {
        let currentScrollPos = window.pageYOffset
        let navbar = document.getElementById('navbar')
        if (prevScrollpos >= currentScrollPos) {
            document.getElementById("navbar").style.top = 0
        } else {
            navbar.style.top = (-1 * navbar.offsetHeight) + "px"
        }
        prevScrollpos = currentScrollPos
    }
</script>
</body>

</html>

<section class="row align-items-center home m-0">
    <div class="col-xl-6 m-auto rounded p-4">
        <h1 class="text-uppercase mb-5 text-center">
            {{ __('container2.title') }}</h1>
        <p class="lh-lg mb-5 text-center">{{ __('container2.body') }}</p>
        <form action="#"
              method="post">
            <div class="d-flex justify-content-around gap-3">
                <div class="form-group w-100">
                    <label for="gemeinde"
                           class="mb-3">{{ __('container2.municip') }}</label>
                    <select class="form-select"
                            id="gemeinde">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group w-100">
                    <label for="fraktion"
                           class="mb-3">{{ __('container2.frac') }}</label>
                    <select class="form-select"
                            id="fraktion">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>
        </form>
    </div>
</section>

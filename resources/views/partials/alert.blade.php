@if (session('success'))
    <div class="fixed-bottom">
        <div class="float-end">
            <div class="alert alert-success alert-dismissible fade show m-3"
                 role="alert">
                {!! session('success') !!}
                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"
                        aria-label="Close"></button>
            </div>
        </div>
    </div>
@endif

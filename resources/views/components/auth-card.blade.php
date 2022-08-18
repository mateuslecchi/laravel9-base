<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-sm-12 col-md-10 col-lg-8 my-5">
            <div class="d-flex justify-content-center mb-3">
                {{ $logo }}
            </div>
            <div class="row bg-light bg-gradient mx-5">
                <div class="col card shadow-sm px-3">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</div>
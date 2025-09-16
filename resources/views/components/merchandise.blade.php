<section id="merchandise" class="bg-primary">
    <div class="container d-flex flex-wrap justify-content-center align-items-center gap-3 py-3">

        <div class="card py-3 d-flex flex-row align-items-center justify-content-center border-0 radius-0">
            <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" class="img-fluid" alt="">
            <div class="card-body p-0 ps-1">
                <p class="m-0 text-uppercase">
                    Digital Comics
                </p>
            </div>
        </div>
        <div class="card py-3 d-flex flex-row align-items-center justify-content-center border-0 radius-0">
            <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" class="img-fluid" alt="">
            <div class="card-body p-0 ps-1">
                <p class="m-0 text-uppercase">
                    DC Merchandise
                </p>
            </div>
        </div>
        <div class="card py-3 d-flex flex-row align-items-center justify-content-center border-0 radius-0">
            <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" class="img-fluid" alt="">
            <div class="card-body p-0 ps-1">
                <p class="m-0 text-uppercase">
                    Subscription
                </p>
            </div>
        </div>
        <div class="card py-3 d-flex flex-row align-items-center justify-content-center border-0 radius-0">
            <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" class="img-fluid" alt="">
            <div class="card-body p-0 ps-1">
                <p class="m-0 text-uppercase">
                    Comic Shop Locator
                </p>
            </div>
        </div>
        <div class="card py-3 d-flex flex-row align-items-center justify-content-center border-0 radius-0">
            <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" class="img-fluid" alt="">
            <div class="card-body p-0 ps-1">
                <p class="m-0 text-uppercase">
                    DC Power Visa
                </p>
            </div>
        </div>

    </div>
    {{ $slot }}
</section>
{{-- <footer>
    <div class="container">
        Footer
        <!-- Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }}) -->
    </div>
</footer> --}}



<footer id="page-footer">
    <section id="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 py-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                                <h5 class="text-uppercase">
                                    DC Comics
                                </h5>
                                <nav>
                                    <ul class="list-unstyled">
                                        <li class="">
                                            <a href="{{ route("characters") }}" class="text-reset text-decoration-none">
                                                Characters
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="{{ route("comics") }}" class="text-decoration-none">
                                                Comics
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="{{ route("movies") }}" class="text-reset text-decoration-none">
                                                Movies
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="{{ route("tv") }}" class="text-reset text-decoration-none">
                                                TV
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="{{ route("games") }}" class="text-reset text-decoration-none">
                                                Games
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="{{ route("videos") }}" class="text-reset text-decoration-none">
                                                Videos
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="{{ route("news") }}" class="text-reset text-decoration-none">
                                                News
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                <h5 class="text-uppercase">
                                    Shop
                                </h5>
                                <nav>
                                    <ul class="list-unstyled">
                                        <li class="">
                                            <a href="#" class="text-reset text-decoration-none">
                                                Shop DC
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="text-reset text-decoration-none">
                                                Shop DC Collectibles
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-4">
                                <h5 class="text-uppercase">
                                    DC
                                </h5>
                                <nav>
                                    <ul class="list-unstyled">
                                        <li class="">
                                            <a href="#" class="text-reset text-decoration-none">
                                                Terms Of Use
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="text-reset text-decoration-none">
                                                Privacy policy (New)
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="text-reset text-decoration-none">
                                                Ad Choices
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="text-reset text-decoration-none">
                                                Advertising
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="text-reset text-decoration-none">
                                                Jobs
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="text-reset text-decoration-none">
                                                Subscriptions
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="text-reset text-decoration-none">
                                                Talent Workshops
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="text-reset text-decoration-none">
                                                CPSC Certificates
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="text-reset text-decoration-none">
                                                Ratings
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="text-reset text-decoration-none">
                                                Shop Help
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="text-reset text-decoration-none">
                                                Contact Us
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-4">
                                <h5 class="text-uppercase">
                                    Sites
                                </h5>
                                <nav>
                                    <ul class="list-unstyled">
                                        <li class="">
                                            <a href="#" class="text-reset text-decoration-none">
                                                DC
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="text-reset text-decoration-none">
                                                MAD Magazine
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="text-reset text-decoration-none">
                                                DC Kids
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="text-reset text-decoration-none">
                                                DC Universe
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="text-reset text-decoration-none">
                                                DC Power Visa
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <figure class="h-100 logo-big-container">
                    </figure>
                </div>
            </div>
        </div>
    </section>



    <section id="footer-social">
        <div class="container">
            <div class="row">
                <div class="col">
                    <button class="signUp">
                        SIGN-UP NOW!
                    </button>
                    <button class="followUs">
                        FOLLOW US
                    </button>
                </div>
                <div class="col">
                    <div class="social-container h-100">
                        <a href="#">
                            <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="Facebook" class="social-icon" />
                        </a>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="Twitter" class="social-icon" />
                        </a>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="YouTube" class="social-icon" />
                        </a>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="Pinterest" class="social-icon" />
                        </a>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="Periscope" class="social-icon" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
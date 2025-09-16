<section class="shadow-sm mb-4">
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center">
            <a 
                href="{{ route("home") }}" 
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none"
            >
                <img
                    src="{{ Vite::asset('resources/img/dc-logo.png') }}"
                    alt="DC Logo"
    
                    id="site-logo"
                    class="img-fluid my-3"
                />
            </a>
            <ul class="nav">
                <li class="nav-item">
                    <a href="#" class="nav-link h-100 d-flex align-items-center active" aria-current="page">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link h-100 d-flex align-items-center">
                        Features
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link h-100 d-flex align-items-center">
                        Pricing
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link h-100 d-flex align-items-center">
                        FAQs
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link h-100 d-flex align-items-center">
                        About
                    </a>
                </li>
            </ul>
        </header>
    </div>
</section>
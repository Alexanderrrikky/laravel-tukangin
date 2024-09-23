

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('assets/img/logo-1.png') }}" alt="">
                <h1 class="sitename">Tukangin</h1> <span>.</span>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li>
                        <a class="{{ request()->is('home') ? 'active' : ''}}" href="/home">Home</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('about') ? 'active' : ''}}" href="/about">About</a>
                    </li>

                    <li>
                        <a class="{{ request()->is('services') ? 'active' : ''}}" href="/services">Service</a>
                    </li>

                    <li>
                        <a class="{{ request()->is('project') ? 'active' : ''}}" href="/project">Projects</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('blog') ? 'active' : ''}}" href="/blog">Blog</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('contact') ? 'active' : ''}}" href="/contact">Contact</a>
                    </li>
                    <li class="dropdown ms-5">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                            <img class="img-profile rounded-circle ms-2" height="30" width="30" src="{{ asset('assets/img/logo-1.png') }}" />
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/"><i class="bi bi-person-circle me-2"></i></i>profile</a></li>
                            <li><a class="dropdown-item" href=""><i class="bi bi-box-arrow-right me-2"></i>Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="{{ url("index.html") }}">Hostel </a></h1>


        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="{{ url("index.html") }}" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{ url("index.html") }}" class="active">Home</a></li>

                <li class="dropdown"><a href="{{ url("#") }}"><span>About</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url("about.html") }}">About</a></li>
                        <li><a href="{{ url("team.html") }}">Team</a></li>
                        <li><a href="{{ url("testimonials.html") }}">Testimonials</a></li>

                        <li class="dropdown"><a href="{{ url("#") }}"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="{{ url("#") }}">Deep Drop Down 1</a></li>
                                <li><a href="{{ url("#") }}">Deep Drop Down 2</a></li>
                                <li><a href="{{ url("#") }}">Deep Drop Down 3</a></li>
                                <li><a href="{{ url("#") }}">Deep Drop Down 4</a></li>
                                <li><a href="{{ url("#") }}">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="{{ url("services.html") }}">Services</a></li>
                <li><a href="{{ url("portfolio.html") }}">Portfolio</a></li>
                <li><a href="{{ url("pricing.html") }}">Pricing</a></li>
                <li><a href="{{ url("blog.html") }}">Blog</a></li>

                <li><a href="{{ url("contact.html") }}">Contact</a></li>
                <li><a href="{{ url("index.html") }}" class="getstarted">Get Started</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
<!-- Start Header Area -->
<header class="header-area header-style-two">
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-5">
                    <div class="top-header-left">
                        <p><span>Call Now At:</span> <a href="#">01620268128</a></p>
                    </div>
                </div>

                <div class="col-lg-7 col-md-7">
                    <div class="top-header-right">
                        <ul class="social">
                            <li><a href="#" target="_blank">
                                @include('layouts.svg.facebook')    
                            </a></li>
                            <li><a href="#" target="_blank">
                                @include('layouts.svg.twitter')   
                            </a></li>
                            <li><a href="#" target="_blank">
                                @include('layouts.svg.linkdin') 
                            </a></li>
                            <li><a href="#" target="_blank">
                                @include('layouts.svg.instagram') 
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <div class="bahama-mobile-nav">
            <div class="logo">
                <a href="index-2.html">
                    <img src="assets/img/logo.png" alt="logo">
                </a>
            </div>
        </div>

        <div class="bahama-nav">
            <div class="container">
                <nav class="row navbar navbar-expand-md navbar-light">
                    <a class="col-md-2 navbar-brand" href="index-2.html">
                        <img class="img-fluid" src="https://mgr2.cinebaz.com/assets/frontend/images/logo.png" alt="logo">
                    </a>

                    <div class="col-md-10 collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="{{ url('/') }}" class="nav-link active">Home</a></li>
                            <li class="nav-item"><a href="{{ url('/about') }}" class="nav-link">About Us</a></li>
                            <li class="nav-item"><a href="{{ url('/package') }}" class="nav-link">Packages</a></li>
                            <li class="nav-item"><a href="{{ url('/team') }}" class="nav-link">Team</a></li>
                            <!-- <li class="nav-item"><a href="#" class="nav-link">Blog</a></li> -->
                            <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
                        </ul>

                        <div class="others-options">
                            <div class="d-flex align-items-center">
                                <a href="{{ url('/contact') }}" class="btn btn-primary">
                                    <i class="fa-solid fa-forward"></i> <span>Get Started</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->
</header>
<!-- End Header Area -->
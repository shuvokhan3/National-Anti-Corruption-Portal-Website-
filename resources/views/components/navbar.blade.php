<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="{{asset('/')}}" class="logo d-flex align-items-center me-auto me-xl-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">National-ACP</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{asset('/')}}" class="active">Home</a></li>
                <li><a href="{{asset('/corruptions')}}">Complaint</a></li>
                <li><a href="{{asset('/about')}}">About</a></li>
                <li><a href="{{asset('/contact')}}">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-getstarted" href="{{asset('/submitForm')}}">Report Now</a>

    </div>
</header>

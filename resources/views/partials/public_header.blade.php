<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

        
        <h1 class="logo me-auto"><a href="{{ route('dashboard') }}">CU Hostel </a></h1>
        
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{ route('dashboard') }}" class="active">Home</a></li>
                <li class="dropdown"><a href="{{ url("#") }}"><span>Menu</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        @if($student->bed_id)
                            <li><a href="{{ url('user/room') }}">Room</a></li>
                            <li><a href="{{ url('user/room-change') }}">Room Change</a></li>
                            <li><a href="{{ url('user/bills-payments/card') }}">Bills & Payments</a></li>
                            <li><a href="{{ url('user/complaints') }}">Complaints</a></li>
                            <li><a href="{{ url('user/feedback') }}">Feedback</a></li>
                        @endif
                        <li><a href="{{ url('user/rules/card') }}">Rules & Notices</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('user/profile') }}"><img class="nav-prof" src="{{ asset($student->image)}}" alt=""></a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        <a href="{{ url('user/notifications') }}"><h1 class="bell"><i class="bi bi-bell"></i></h1></a>
        
    </div>
</header><!-- End Header -->
<!-- Header Main Start -->
<div class="header-main">
    <div class="container">
        <!-- Header Main Wrapper Start -->
        <div class="header-main-wrapper">

            <!-- Header Logo Start -->
            <div class="header-logo">
                <a class="header-logo__logo" href="{{ url('/') }}"><img
                        src="{{ asset('assets/mama/images/logo.png') }}" alt="Logo"></a>
            </div>
            <!-- Header Logo End -->

            <!-- Header Inner Start -->
            <div class="header-inner">
                <!-- Header Navigation Start -->
                <div class="header-navigation d-none d-xl-block">
                    <nav class="menu-primary">
                        <ul class="menu-primary__container">
                            <li><a class="active" href="{{ url('/') }}"><span>Home</span></a>
                            <li><a href="{{ url('records') }}">Resources</a></li>
                            <li><a href="{{ url('forums') }}">Forums</a></li>
                            <li><a href="{{ url('webinars') }}">Webinars</a></li>
                            <li class="menu-item-has-children">
                                <a href="#"><span>Courses & Trainings</span></a>
                                <ul class="sub-menu">
                                    <li><a href="https://elearning.health.go.ug/course/index.php?categoryid=3"
                                            target="_blank"><span>Training Courses</span></a></li>
                                    <li><a href="https://hris2.health.go.ug/national_train/login"
                                            target="_blank"><span>IHRIS In-service Training</span></a></li>

                                </ul>
                            </li>

                            <li><a href="{{ url('incidents') }}"><span>MCH Incident Reporting</span></a></li>
                            <div class="header-user d-none d-lg-flex">
                            @guest

                                    <div class=" {{ $class ?? '' }}">
                                        <li><a href="{{ url('login') }}"><span>Sign In</span></a></li>


                                @else
                                    <li class="menu-item-has-children">
                                        <a href="#"><span>Account </span></a>
                                        <ul class="sub-menu">
                                            @if (is_admin())
                                                <li class="">
                                                    <a href="{{ route('admin.index') }}">
                                                        <i class="fa fa-link mr-1"></i>Admin Panel
                                                    </a>
                                                </li>
                                            @endif
                                            <li class="">
                                                <a href="{{ route('account.profile') }}">
                                                    <i class="fa fa-user mr-1"></i> My Profile
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="{{ route('account.publications') }}">
                                                    <i class="fa fa-list mr-1"></i> Our Publications
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="{{ route('account.favourites') }}">
                                                    <i class="fa fa-star mr-1"></i> My Favourites
                                                </a>
                                            </li>

                                        </ul>


                                    </li>



                                </div>

                            @endguest
                            <!-- Header User Button End -->
                        </ul>
                    </nav>
                </div>
                <!-- Header Navigation End -->

            </div>



            <!-- Header Mobile Toggle Start -->
            <div class="header-toggle">
                <button class="header-toggle__btn d-xl-none" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasMobileMenu">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </button>
            </div>
            <!-- Header Mobile Toggle End -->

        </div>
        <!-- Header Inner End -->

    </div>
    <!-- Header Main Wrapper End -->
</div>
</div>
</div>
<!-- Header Main End -->

</div>
<!-- Header End -->

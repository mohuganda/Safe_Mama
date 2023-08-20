
            <!-- Header Main Start -->
            <div class="header-main">
                <div class="container">
                    <!-- Header Main Wrapper Start -->
                    <div class="header-main-wrapper">

                        <!-- Header Logo Start -->
                        <div class="header-logo">
                            <a class="header-logo__logo" href="{{ url('/') }}"><img src="{{ asset('assets/mama/images/logo.png')}}"  width="60px" alt="Logo"></a>
                        </div>
                        <!-- Header Logo End -->

                        <!-- Header Inner Start -->
                        <div class="header-inner">
                            <!-- Header Navigation Start -->
                            <div class="header-navigation d-none d-xl-block">
                                <nav class="menu-primary">
                                    <ul class="menu-primary__container">
									    <li><a class="active" href="{{ url('/') }}"><span>Home</span></a>
                                        <li><a href="{{ url('records')}}">Resources</a></li>
                                        <li><a href="{{ url('forums')}}">Forums</a></li>
                                        <li><a href="{{ url('/register') }}"><span>Register</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- Header Navigation End -->

                            </div>
                            <!-- Header Mini Cart End -->

                            <!-- Header User Button Start -->
                            <div class="header-user d-none d-lg-flex">
                                <div class="header-user__button">
                                    <a href="{{ url('/login') }}" class="header-user__login" >Log In</a>
                                </div>
                                <div class="header-user__button">
                                    <button class="header-user__signup btn btn-primary btn-hover-primary" data-bs-toggle="modal" data-bs-target="#registerModal">Sign Up</button>
                                </div>
                            </div>
                            <!-- Header User Button End -->

                            <!-- Header Mobile Toggle Start -->
                            <div class="header-toggle">
                                <button class="header-toggle__btn d-xl-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMobileMenu">
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
            <!-- Header Main End -->

        </div>
        <!-- Header End -->
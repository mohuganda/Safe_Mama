   <!-- Offcanvas Start -->
   <div class="offcanvas offcanvas-end offcanvas-mobile" id="offcanvasMobileMenu" style="background-image: url(assets/images/mobile-bg.jpg);">
            <div class="offcanvas-header bg-white">
                <div class="offcanvas-logo">
                    <a class="offcanvas-logo__logo" href="#"><img src="{{ asset('assets/mama/images/logo.png')}}" width="60px" alt="Logo"></a>
                </div>
                <button type="button" class="offcanvas-close" data-bs-dismiss="offcanvas"><i class="fas fa-times"></i></button>
            </div>

            <div class="offcanvas-body">
                <nav class="canvas-menu">
                    <ul class="offcanvas-menu">
                       
                                <li>
                                    <!-- Mega Menu Content Start -->
                                    <div class="mega-menu-content">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="menu-content-list">
                                                <ul>
                                                <li><a class="active" href="{{ url('/') }}"><span>Home</span></a>
                                                <li><a href="{{ url('records')}}">Resources</a></li>
                                                <li><a href="{{ url('forums')}}">Forums</a></li>
                                                <li><a href="{{ url('webinars')}}">Webinars</a></li>
                                                <li class="menu-item-has-children">
                                                    <a href="#"><span>Courses & Trainings</span></a>
                                                    <ul class="sub-menu">
                                                        <li><a href="https://elearning.health.go.ug/course/index.php?categoryid=3" target="_blank"><span>Training Courses</span></a></li>
                                                        <li><a href="https://hris2.health.go.ug/national_train/login" target="_blank"><span>IHRIS In-service Training</span></a></li>
                                                
                                                    </ul>
                                                </li>
                                            
                                                <li><a href="{{ url('incidents')}}"><span>MCH Incident Reporting</span></a></li>
                                                <li><a href="{{ url('incidents')}}"><span>News</span></a></li>
                                                </ul>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!-- Mega Menu Content Start -->
                                </li>
                         
                        <li><a href="#"><span>Become an Instructor</span></a></li>
                    </ul>
                </nav>
            </div>

            <!-- Header User Button Start -->
            <div class="offcanvas-user d-lg-none">
                <div class="offcanvas-user__button">
                    <button class="offcanvas-user__login btn btn-secondary btn-hover-secondarys" data-bs-toggle="modal" data-bs-target="#loginModal">Log In</button>
                </div>
                <div class="offcanvas-user__button">
                    <button class="offcanvas-user__signup btn btn-primary btn-hover-primary" data-bs-toggle="modal" data-bs-target="#registerModal">Sign Up</button>
                </div>
            </div>
            <!-- Header User Button End -->

        </div>
        <!-- Offcanvas End -->
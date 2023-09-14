 <!-- Slider Section Start -->
 <div class="slider-section">
            <div class="slider-wrapper scene">
                <div class="container">
                    <div class="row align-items-center gy-5">
                        <div class="col-md-6" style="margin-top: -30px;">

                            <!-- Slider Widget Start -->
                            <div class="slider-widget" data-aos="fade-up" data-aos-duration="1000">

                                <!-- Slider Caption Start -->
                                <div class="slider-caption">
                                    <h3 class="slider-caption__sub-title">Empowerment of Front Line Health Workers with Advanced Knowledge and skills in Reproductive, Maternal and Child Health Care</h3>
                                    <h2 class="slider-caption__main-title">Access To <mark>500+</mark> Resources from <mark>80</mark> Sources</h2>
                                    <p>Boosting Maternal Health Knowledge & skills.</p>
                                </div>
                                <!-- Slider Caption End -->

                                <!-- Slider Search Start -->
                                <div class="slider-search">
                                    <form action="{{ url('records/search') }}">
                                        <input class="slider-search__field" name="term" value ="{{ @old('term') }}" placeholder="What do you want to search about?">
                                        <button type="submit" class="slider-search__submit">
                                            <i class="search-btn-icon fas fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                                <!-- Slider Search End -->

                            </div>
                            <!-- Slider Widget End -->

                        </div>
                        <div class="col-md-6">

                            <!-- Slider Image Start -->
                            <div class="row justify-content-center">
                                    <div class="col-lg-6 slider-image-widget__caption mt-2 ml-1 mr-1">
                                        <h4 class="slider-image-widget__title text-center fw-bold text-info"><a href="{{ url('records')}}?type=1">Guidelines</a></h4>
                                    </div>
                                    <div class="col-lg-6 slider-image-widget__caption mt-2 ml-1 mr-1">
                                        <h4 class="slider-image-widget__title text-center fw-bold text-warning"><a href="{{ url('records')}}?type=1">Policies</a></h4>
                                    </div>
                                    <div class="col-lg-6 slider-image-widget__caption mt-2 ml-1 mr-1">
                                        <h4 class="slider-image-widget__title text-center fw-bold text-success"><a href="{{ url('records')}}?type=1">SOPs</a></h4>
                                    </div>
                           
                            <!-- Slider Image End -->
                            <div class="slider-image col-lg-12">
                                <div class="slider-image__image text-center text-lg-end" data-aos="fade-up" data-aos-duration="1000">
                                    <img src="{{ asset('assets/mama/images/home-01-hero-image.png')}}" alt="" width="599" height="480">
                                  
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                <img class="slider-section__shape-01" data-depth="0.8"
                src="{{ asset('assets/mama/images/shape/edumall-shape-grid-dots.png') }}" alt="Shape" width="417" height="371">
                <div class="slider-section__shape-02" data-depth="-1"></div>
                <div class="slider-section__shape-03" data-depth="1.6"></div>
                <img class="slider-section__shape-04" data-depth="-0.6"
                 src="{{ asset('assets/mama/images/shape/edumall-shape-01.png') }}" alt="Shape" width="179" height="178">

            </div>
        </div>

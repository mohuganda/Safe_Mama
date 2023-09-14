
        <!-- Categories Section Start -->
        <div class="categories-section section-padding-02 mt-5" >
            <div class="container">

                <!-- Section Title Start -->
                <div class="section-title" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="section-title__title">Topical <mark>Categories</mark> </h2>
                </div>
                <!-- Section Title End -->

                <div class="row g-6 justify-content-center">
				@foreach ($themes as $row)
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <!-- categories Item Start -->
                        <div class="categories-item " data-aos="fade-up" data-aos-duration="1000">
                            <a class="categories-item__link theme bg-black" href="{{ url('records')}}?category={{$row->id}}">
                                <div class="categories-item__icon">
								<i class="fa {{$row->icon}}"></i> 
                                </div>
                                <div class="categories-item__info">
                                    <h3 class="categories-item__name">{{truncate($row->description,410)}}</h3>
                                </div>
                            </a>
                        </div>
                        <!-- categories Item End -->
                    </div>
					@endforeach
                    
                </div>

            </div>
        </div>
        <!-- Categories Section End -->

			 <!-- Features Section Start -->
			 <div class="features-section bg-orange">
            <div class="container">
                <div class="row g-6">
				@foreach($categories as $category)
                    <div class="col-lg-3 col-sm-6">
                        <!-- Features Item Start -->
                        <div class="features-item" data-aos="fade-up" data-aos-duration="1000">
                            <div class="features-item__icon">
							<img src="{{ asset('assets/img/categories/'.$category['image'])}}" style="max-width:35px;"/>
                            </div>
                            <div class="features-item__caption">
                                <h3 class="features-item__title">{{$category['title']}}</h3>
                            </div>
                        </div>
                        <!-- Features Item End -->
                    </div>
					@endforeach
                   
                </div>
            </div>
        </div>
        <!-- Features Section End -->

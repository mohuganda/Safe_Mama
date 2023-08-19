			<!-- ======================= Top Searches List ======================== -->
			<section class="middle gray">
				<div class="container">

					<div class="row justify-content-center"  
					data-aos="fade-in">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="sec_title position-relative text-center mb-5">
								<h2 class="ft-bold">Top Searches</span></h2>
							</div>
						</div>
					</div>

					<!-- row -->
					<div class="row align-items-center" 
					>

							@php 
								$i=0; 
							@endphp

						   @foreach ($recent as $row)

							@php 
								$i++;
							@endphp
							
							<!-- Single -->
							
								<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12"
								  data-aos="zoom-in">
									<div class="jbr-wrap text-left border rounded">
										<div class="cats-box mlb-res rounded bg-white d-flex align-items-center px-3 py-3">
											   <div class="cats-box rounded bg-white d-flex align-items-center" style="min-width:100%;">
													@php
														if( is_valid_image(storage_link('uploads/publications/'.$row->cover))):
															$image_link = storage_link('uploads/publications/'.$row->cover);
														else:
																$image_link = storage_link('uploads/publications/cover.jpg');
														endif;
													@endphp

												<div class="cats-box-caption">
													<h4 class="fs-md mb-0 ft-medium"><a href="{{ url('records/resource') }}?id={{$row->id}}">{!! truncate($row->title, 50) !!}</a></h4>
													<div class="d-block mb-2 position-relative">
													  <p class="text-nothern p-0"><a href="{{ url('records/resource') }}id={{$row->id}}">{!! htmlspecialchars_decode(stripslashes(truncate($row->description,60))) !!}</a></p>
														<span class="text-muted medium">
															Source: <i class="fa fa-bank mr-1"></i>{{$row->author->name}}</span>
														
														<span class="muted medium ml-2 theme-cl"><br>
														<i class="lni lni-briefcase mr-1"></i>Theme: {!! $row->theme->description !!}</span>
															<span class="muted medium ml-2 theme-cl"><br>
														<i class="lni lni-archive mr-1"></i>Sub Theme: {!! $row->sub_theme->description !!}</span>
														
														<span class="muted medium ml-2 text-muted mt-1 "><br>
														<i class="lni lni-empty-file mr-1"></i>Category: {{@$row->category->category_name}}</span>
														
														<span class="text-muted medium d-block mt-1">
														    <span class=" mr-2"><i class="lni lni-calendar mr-1"></i>Last updated: {{time_ago($row->updated_at)}} </span>
															<span class=" mr-2"><i class="fa fa-eye mr-1"></i>{{$row->visits}} Views </span>
														    <span><span class="mr-1 ml-2 text-muted d-inline pop{{$row->id}}"
															         data-bs-toggle="popover"
																	 data-bs-trigger="hover"
																	 data-bs-placement="bottom" aria-expanded="false" aria-controls="comments{{$i}}" onclick="showComments('{{$row->id}}')"><i class="fa fa-comments"></i> {{count($row->comments)}} Comments</span></span>
															@auth()
															<div class="btn btn-outline-dark btn-sm mt-2 favbtn">
															@include ('common.favourites_btn')
															</div>
															@endauth
														</span>   

													</div>
												</div>
												<div class="text-center mlb-last">
													<a href="{{ url('records/resource')}}?id={{ $row->id }}" class="btn theme-bg text-white ft-medium apply-btn fs-sm rounded">Browse Resource</a>
												</div>
												
											</div>
										</div>

										@include('home.partials.comments')

									</div>
								</div>

						     @endforeach

					</div>
					<!-- row -->

					<div class="row justify-content-center">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="position-relative text-center">
								<a href="{{ url('records')}}" class="btn btn-md theme-bg rounded text-light hover-theme">Explore More Resources<i class="lni lni-arrow-right-circle ml-2"></i></a>
							</div>
						</div>
					</div>

				</div>
			</section>
			<!-- ======================= Top Searches ======================== -->

			<!-- Course Section Start -->
			<div class="courses-section section-padding-02">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6">

                        <!-- Section Title Start -->
                        <div class="section-title" data-aos="fade-up" data-aos-duration="1000">
                            <h2 class="section-title__title">Top <mark>Categories</mark> </h2>
                        </div>
                        <!-- Section Title End -->

                    </div>
                    <div class="col-lg-6">
                        <div class="courses-tab-menu" data-aos="fade-up" data-aos-duration="1000">
                            <ul class="nav justify-content-lg-end">
                                <li><button class="active" data-bs-toggle="tab" data-bs-target="#tab1">All</button></li>
                                <li><button data-bs-toggle="tab" data-bs-target="#tab2">Trending</button></li>
                                <li><button data-bs-toggle="tab" data-bs-target="#tab3">Popularity</button></li>
                                <li><button data-bs-toggle="tab" data-bs-target="#tab4">Featured</button></li>
                                <li><button data-bs-toggle="tab" data-bs-target="#tab5">Art & Design</button></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab1">

                        <div class="row row-cols-xl-5 g-6">
                           
                            <div class="col-xl col-lg-3 col-md-4 col-sm-6">

                                <!-- Course Start -->
                                <div class="course-item" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="course-header">
                                        <div class="course-header__thumbnail ">
                                            <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-8.jpg" alt="courses" width="258" height="173"></a>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <span class="course-info__badge-text badge-beginner">Beginner</span>
                                        <h3 class="course-info__title"><a href="course-single-layout-01.html">Learn Algebra The Easy Way! Student Engagement</a></h3>
                                        <a href="#" class="course-info__instructor">Oliver Porter</a>
                                        <div class="course-info__price">
                                            <span class="sale-price">$45.<small class="separator">00</small></span>
                                        </div>
                                        <div class="course-info__rating">

                                            <div class="rating-star">
                                                <div class="rating-label" style="width: 80%;"></div>
                                            </div>

                                            <span>(2)</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Course End -->

                            </div>
                          
                            
                        </div>

                    </div>
                    <div class="tab-pane fade" id="tab2">

                        <div class="row row-cols-xl-5 g-6">
                            <div class="col-xl col-lg-3 col-md-4 col-sm-6">

                                <!-- Course Start -->
                                <div class="course-item" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="course-header">
                                        <div class="course-header__thumbnail ">
                                            <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-11.jpg" alt="courses" width="258" height="173"></a>
                                        </div>
                                        <div class="course-header__badge">
                                            <span class="hot">Featured</span>
                                            <span class="onsale">-39%</span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <span class="course-info__badge-text badge-beginner">Beginner</span>
                                        <h3 class="course-info__title"><a href="course-single-layout-01.html">Mastering Data Modeling Fundamentals</a></h3>
                                        <a href="#" class="course-info__instructor">Owen Christ</a>
                                        <div class="course-info__price">
                                            <span class="sale-price">$46.<small class="separator">00</small></span>
                                            <span class="regular-price">$76.<small class="separator">00</small></span>
                                        </div>
                                        <div class="course-info__rating">

                                            <div class="rating-star">
                                                <div class="rating-label" style="width: 80%;"></div>
                                            </div>

                                            <span>(2)</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Course End -->

                            </div>
                      
                          
                        </div>

                    </div>
                    <div class="tab-pane fade" id="tab3">

                        <div class="row row-cols-xl-5 g-6">
                            <div class="col-xl col-lg-3 col-md-4 col-sm-6">

                                <!-- Course Start -->
                                <div class="course-item" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="course-header">
                                        <div class="course-header__thumbnail ">
                                            <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-13.jpg" alt="courses" width="258" height="173"></a>
                                        </div>
                                        <div class="course-header__badge">
                                            <span class="hot">Featured</span>
                                            <span class="free">Free</span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <span class="course-info__badge-text badge-beginner">Beginner</span>
                                        <h3 class="course-info__title"><a href="course-single-layout-01.html">Adobe Illustrator CC – Essentials Training Course</a></h3>
                                        <a href="#" class="course-info__instructor">Owen Christ</a>
                                        <div class="course-info__price">
                                            <span class="free">Free</span>
                                        </div>
                                        <div class="course-info__rating">

                                            <div class="rating-star">
                                                <div class="rating-label" style="width: 80%;"></div>
                                            </div>

                                            <span>(2)</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Course End -->

                            </div>
                            <div class="col-xl col-lg-3 col-md-4 col-sm-6">

                                <!-- Course Start -->
                                <div class="course-item" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="course-header">
                                        <div class="course-header__thumbnail ">
                                            <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-4.jpg" alt="courses" width="258" height="173"></a>
                                        </div>
                                        <div class="course-header__badge">
                                            <span class="free">Free</span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <span class="course-info__badge-text badge-beginner">Beginner</span>
                                        <h3 class="course-info__title"><a href="course-single-layout-01.html">Consulting Approach to Problem Solving</a></h3>
                                        <a href="#" class="course-info__instructor">parra</a>
                                        <div class="course-info__price">
                                            <span class="free">Free</span>
                                        </div>
                                        <div class="course-info__rating">

                                            <div class="rating-star">
                                                <div class="rating-label" style="width: 80%;"></div>
                                            </div>

                                            <span>(2)</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Course End -->

                            </div>
                          
                        </div>

                    </div>
                    <div class="tab-pane fade" id="tab4">

                        <div class="row row-cols-xl-5 g-6">
                            <div class="col-xl col-lg-3 col-md-4 col-sm-6">

                                <!-- Course Start -->
                                <div class="course-item" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="course-header">
                                        <div class="course-header__thumbnail ">
                                            <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-19.jpg" alt="courses" width="258" height="173"></a>
                                        </div>
                                        <div class="course-header__badge">
                                            <span class="hot">Featured</span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <span class="course-info__badge-text badge-beginner">Beginner</span>
                                        <h3 class="course-info__title"><a href="course-single-layout-01.html">The Complete 2020 Web Development Bootcamp</a></h3>
                                        <a href="#" class="course-info__instructor">Donald Logan</a>
                                        <div class="course-info__price">
                                            <span class="sale-price">$45.<small class="separator">00</small></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Course End -->

                            </div>
                      
                           
                            
                        </div>

                    </div>
                    <div class="tab-pane fade" id="tab5">

                        <div class="row row-cols-xl-5 g-6">
                            <div class="col-xl col-lg-3 col-md-4 col-sm-6">

                                <!-- Course Start -->
                                <div class="course-item" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="course-header">
                                        <div class="course-header__thumbnail ">
                                            <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-22.jpg" alt="courses" width="258" height="173"></a>
                                        </div>
                                        <div class="course-header__badge">
                                            <span class="hot">Featured</span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <span class="course-info__badge-text badge-intermediate">Intermediate</span>
                                        <h3 class="course-info__title"><a href="course-single-layout-01.html">The Complete Graphic Design Theory for Beginners Course</a></h3>
                                        <a href="#" class="course-info__instructor">Donald Logan</a>
                                        <div class="course-info__price">
                                            <span class="sale-price">$45.<small class="separator">00</small></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Course End -->

                            </div>
                           
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!-- Course Section End -->

			<!-- Course Section Start -->
			<div class="courses-section section-padding-02">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6">
                        <!-- Section Title Start -->
                        <div class="section-title" data-aos="fade-up" data-aos-duration="1000">
                            <h2 class="section-title__title">Latest <mark>Resources</mark> </h2>
                        </div>
                        <!-- Section Title End -->
                    </div>
                   
                </div>

                        <div class="row row-cols-xl-5 g-6">
                           
                            @php 
								$i=0; 
							@endphp

						    @foreach ($recent as $row)

							@php 
								$i++;
							@endphp
							
                            <div class="col-xl col-lg-3 col-md-4 col-sm-6">
                            @php
                                if( is_valid_image(storage_link('uploads/publications/'.$row->cover))):
                                    $image_link = storage_link('uploads/publications/'.$row->cover);
                                else:
                                    $image_link = storage_link('uploads/publications/cover.jpg');
                                endif;
                            @endphp

                                <!-- Course Start -->
                                <div class="course-item" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="course-header">
                                        <div class="course-header__thumbnail ">
                                            <a href="{{ url('records/resource') }}?id={{$row->id}}"><img src="{{ $image_link }}" alt="courses" width="258" height="173"></a>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <span class="course-info__badge-text text-yellow">{{@$row->theme->description}}</span>
                                        <h3 class="course-info__title"><a href="{{ url('records/resource') }}?id={{$row->id}}">{!! truncate($row->title, 50) !!}</a></h3>
                                        <a href="#" class="course_secondary__instructor">{{$row->author->name}}</a>
                                        <div class="course-info__price">
                                            <span class="sale-price text-muted">{{$row->visits}}<small class="separator"> Views</small></span>
                                        </div>
                            
                                    </div>
                                </div>
                                <!-- Course End -->

                            </div>
                            @endforeach
                          
                            
                        </div>

                </div>

            </div>
        </div>
        <!-- Course Section End -->

        <div class="row justify-content-center">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="position-relative text-center">
								<a href="{{ url('records')}}" class="btn btn-md theme-bg rounded text-light hover-theme">Explore More Resources<i class="lni lni-arrow-right-circle ml-2"></i></a>
							</div>
						</div>
		</div>
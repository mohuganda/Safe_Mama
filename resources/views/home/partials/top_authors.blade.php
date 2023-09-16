

			<!-- ======================= Authors ======================== -->
			<section class="space gray mt-3">
				<div class="container">

					<div class="row justify-content-center" data-aos="slide-down">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="sec_title position-relative text-center mb-5">
								<h2 class="ft-bold">Top Information Sources </h2>
							</div>
						</div>
					</div>

					<!-- row -->
					<div class="row align-items-center justify-content-center">

					@foreach($authors as $author)

						<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 mt-2" data-aos="flip-left">
							<div class="cats-wrap text-center">
								<a href="{{ url('authors/publications')}}?author={{$author->id}}" class="cats-box d-block rounded bg-white px-2 py-4">
									<div class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 theme-bg-light circle">
										<!-- <i class="{{$author->icon}} fs-lg theme-cl"></i> -->
										<img src="{{ asset('assets/img/categories/author.png')}}" style="max-width:25px;"/>
									</div>

									<div class="cats-box-caption">
										<p class="fs-md mb-0 ft-medium m-catrio fw-bold">{{truncate($author->name,30)}}</p>
										<span class="text-muted">{{count($author->publications)}} Resources</span>
									</div>
								</a>
							</div>
						</div>

					@endforeach


					</div>
					<!-- /row -->

					<div class="row justify-content-center mt-5 mb-3">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="position-relative text-center">
								<a href="{{ url('authors')}}" class="btn btn-md bg-dark rounded text-light hover-theme">Browse All Sources<i class="lni lni-arrow-right-circle ml-2"></i></a>
							</div>
						</div>
					</div>

				</div>
			</section>
			<!-- ======================= All category ======================== -->

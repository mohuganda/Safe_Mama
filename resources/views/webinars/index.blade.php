@extends('layouts.plain')

@section('styles')

@endsection

@section('content')

<div class="py-1 gray">
<div class="container">
<div class="row justify-content-center py-3 padded-top">
	<h3>Webinars</h3>
	<p>Top instructors from around the world teach millions of students</p>
</div>

<div class="banner-section section-padding-02">
            <div class="container">
                <div class="row  mb-10 align-items-center">
                @php
				    $count = 0;
				@endphp
				@foreach($webinars as $row)
                    <div class="col-lg-6 {{ ($count>0)?'mt-3':''}}">

                        <!-- Banner Box Start -->
                        <div class="banner-box banner-bg-2 bg-white aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                            <div class="row gy-2 gy-sm-0 align-items-center">
							<div class="col-md-3">
                                    <img src="{{ asset('assets/img/webinar.png')}}" alt="">
                                </div>
                                <div class="col-md-9">
                                    <div class="banner-caption">
                                        <h3 class="banner-caption__title">{{ truncate($row->title,65) }}</h3>
                                        <p>{!! truncate($row->description,90) !!}</p>
										<h6 class="text-muted">{{ text_date($row->webinar_date) }}</h6>
										@if(!is_past($row->webinar_date))
                                        <a href="{{ $row->link }}" class="banner-caption__btn btn btn-primary btn-sm btn-hover-secondary">Join Webinar</a>
										@else
										<div class="text-warning mt-5"><i class="fa fa-info-circle"></i> Webinar Ended</div>
										@endif
									</div>
                                </div>
                            </div>
                        </div>
                    </div>

				@php
				    $count++;
				@endphp

				@endforeach

                </div>
            </div>
        </div>

</div>
</div>

@endsection
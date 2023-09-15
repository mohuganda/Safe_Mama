@extends('layouts.app')

@section('styles')

@endsection

@section('content')

<div class="row container bg-grey">

	<div class="col-lg-12 padded-top">
	<div class="row">
		<h4 class="ml-3">Search Results</h4>
	</div>

	<div class="row text-success ml-2 mb-2">
			{{ (isset($_GET['tag']))?" Tag: ".$_GET['tag']:"" }}
			<br>
			@include('home.partials.tags')
	</div> 

    <div class="row">

    <div class="col-lg-3">
                        <!-- Sidebar Widget Start -->
                        <div class="sidebar-widget-wrapper">

                            <!-- Sidebar Widget Wrapper Start -->
                            <div class="sidebar-widget-wrap bg-color-10">
                                <h4 class="sidebar-widget-wrap__title">Filter by category</h4>

                                <!-- Widget Filter Start -->
                                <div class="widget-filter">

                                    <!-- Widget Filter Wrapper Start -->
                                    <div class="widget-filter__wrapper">
                                        <ul class="widget-filter__list">
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="categories13" name="sort-by">
                                                    <label for="categories13">Art & Design <span>(8)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="categories14" name="sort-by">
                                                    <label for="categories14">Business <span>(12)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="categories15" name="sort-by">
                                                    <label for="categories15">Data Science <span>(7)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="categories16" name="sort-by">
                                                    <label for="categories16">Development <span>(10)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="categories17" name="sort-by">
                                                    <label for="categories17">Finance <span>(8)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="categories18" name="sort-by">
                                                    <label for="categories18">Health & Fitness <span>(8)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="categories19" name="sort-by">
                                                    <label for="categories19">Lifestyle <span>(9)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                           
                                            
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="categories24" name="sort-by">
                                                    <label for="categories24">Teaching & Academics <span>(7)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Widget Filter Wrapper End -->
                                </div>
                                <!-- Widget Filter End -->

                            </div>
                            <!-- Sidebar Widget Wrapper End -->

                            <!-- Sidebar Widget Wrapper Start -->
                            <div class="sidebar-widget-wrap bg-color-10 mt-4">
                                <h4 class="sidebar-widget-wrap__title">Filter by</h4>

                                <!-- Widget Filter Start -->
                                <div class="widget-filter">
                                    <h4 class="widget-filter__title-02">Instructor</h4>

                                    <!-- Widget Filter Wrapper Start -->
                                    <div class="widget-filter__wrapper">
                                        <ul class="widget-filter__list">
                                           
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="instructor10" name="sort-by">
                                                    <label for="instructor10">Emilee Logan <span>(12)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="instructor11" name="sort-by">
                                                    <label for="instructor11">Nahla Jones <span>(9)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Widget Filter Wrapper End -->
                                </div>
                                <!-- Widget Filter End -->

                                <!-- Widget Filter Start -->
                                <div class="widget-filter">
                                    <h4 class="widget-filter__title-02">Price</h4>

                                    <!-- Widget Filter Wrapper Start -->
                                    <div class="widget-filter__wrapper">
                                        <ul class="widget-filter__list">
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="radio" id="radio4" checked name="sort-by">
                                                    <label for="radio4">All <span>(101)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="radio" id="radio5" name="sort-by">
                                                    <label for="radio5">Free <span>(6)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="radio" id="radio6" name="sort-by">
                                                    <label for="radio6">Paid <span>(95)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Widget Filter Wrapper End -->
                                </div>
                                <!-- Widget Filter End -->


                            </div>
                            <!-- Sidebar Widget Wrapper End -->

                        </div>
                        <!-- Sidebar Widget End -->
                    </div>

    <div class="col-lg-9">
    <div class="row">

    @php 
	     $i=0;
	   @endphp
	  
	   @foreach($publications as $row)
	    
			@php 
			 $i++;
			@endphp
         <!-- Course List Start -->
         <div class="course-list-item bg-white mt-2 mb-3 py-3 px-2 align-items-center col-lg-12">
                                    <div class="course-list-header">
                                        <div class="course-list-header__thumbnail">
                                            <a href="{{ url('records/resource')}}?id={{$row->id}}"><img src="{{ storage_link('uploads/publications/'.$row->cover) }}" alt="courses" width="270" height="181"></a>
                                        </div>
                                        <div class="course-header__badge">
                                            <span class="free">{{@$row->category->category_name}}</span>
                                        </div>
                                    </div>
                                    <div class="course-list-info">
                                        <h3 class="course-list-info__title">
                                            <a href="{{ url('records/resource')}}?id={{$row->id}}">
					                        {!! truncate($row->title,500) !!}</a></h3>
                                        <div class="course-list-info__meta">
                                            <span>{{@$row->category->category_name}}</span>
                                            <span><i class="fas fa-clock"></i> 2.3 hours</span>
                                            <span><i class="fas fa-sliders-h"></i> All Levels</span>
                                        </div>
                                        <div class="course-list-info__description">
                                            <p>{!! nl2br(truncate($row->description,180)) !!}</p>
                                        </div>
                                        <div class="course-list-info__action">
                                            <a href="" class="btn btn-primary btn-hover-secondary">View Details</a>
                                            <a href="" class="btn-icon btn-light btn-hover-primary" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="far fa-heart"></i></a>
                                        </div>
                                        <div class="course-list-info__footer">
                                            <div class="course-list-info__price">
                                                <span class="sale-price"><small class="separator">{{ text_date($row->created_at) }}</small></span>
                                            </div>
                                            <div class="course-list-info__rating">

                                                <div class="rating-star">
                                                    <div class="rating-label" style="width: 100%;"></div>
                                                </div>

                                                <div class="rating-average">
                                                    <span class="rating-average__average">5.0</span>
                                                    <span class="rating-average__total">/5</span>
                                                </div>

                                                <p class="course-list-info__rating-count">(20 Views)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Course List End -->
                                @endforeach

    </div></div>

    </div>


</div>

@endsection

@section('scripts')

@include('common.select2')

@endsection
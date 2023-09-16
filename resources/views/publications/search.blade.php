@extends('layouts.app')

@section('styles')

@endsection

@section('content')

<div class="row container bg-grey justify-content-center" style="margin-left: 0px!important; margin-right: 0px!important;">

	<div class="col-lg-12 padded-top">
	<div class="row">
		<h4 class="ml-3">Available Resources</h4>
	</div>

	<div class="row text-success ml-2 mb-2">
			{{ (isset($_GET['tag']))?" Tag: ".$_GET['tag']:"" }}
			<br>
			@include('home.partials.tags')
	</div> 

    <form action="{{ url('records') }}" id="filterForm" class="d-none d-lg-block d-md-block">
    <div class="row">             
    <div class="col-lg-3 mb-2">
                         
                        <div class="row px-2 py-1 mb-2 d-lg-none">
                            <a class="btn btn-primary btn-sm col-lg-12" onclick="toggleFilter()">Show/Hide Filters</a>
                        </div>

                        <!-- Sidebar Widget Start -->
                        <div class="sidebar-widget-wrapper" id="filter">

                            <!-- Sidebar Widget Wrapper Start -->
                            <div class="sidebar-widget-wrap bg-color-10">
                                <h4 class="sidebar-widget-wrap__title fw-bold">Filter by Category</h4>

                                <!-- Widget Filter Start -->
                                <div class="widget-filter">

                                    <!-- Widget Filter Wrapper Start -->
                                    <div class="widget-filter__wrapper">
                                        <ul class="widget-filter__list">
                                        @foreach ($themes as $theme)
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" onchange="$('#filterForm').submit()" name="theme" value="{{$theme->id}}" {{ (@$search->theme == $theme->id)?'checked':''}} id="theme{{$theme->id}}" >
                                                    <label for="theme{{$theme->id}}">{{$theme->description}}</label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                        @endforeach
                                            
                                        </ul>
                                    </div>
                                    <!-- Widget Filter Wrapper End -->
                                </div>
                                <!-- Widget Filter End -->

                            </div>
                            <!-- Sidebar Widget Wrapper End -->

                            <!-- Sidebar Widget Wrapper Start -->
                            <div class="sidebar-widget-wrap bg-color-10 mt-4">
                                <h4 class="sidebar-widget-wrap__title fw-bold">Filter by</h4>

                                 <!-- Widget Filter Start -->
                                 <div class="widget-filter">
                                    <h4 class="widget-filter__title-02 text-success">Resource Category</h4>

                                    <!-- Widget Filter Wrapper Start -->
                                    <div class="widget-filter__wrapper">
                                        <ul class="widget-filter__list">
                                           
                                        @foreach ($categories as $cat)
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox"  name="category" onchange="$('#filterForm').submit()" value="{{$cat->id}}" {{ (@$search->category == $cat->id)?'checked':''}} id="cat{{$cat->id}}">
                                                    <label for="cat{{$cat->id}}">{{$cat->category_name}}</label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                        @endforeach
                                            
                                        </ul>
                                    </div>
                                    <!-- Widget Filter Wrapper End -->
                                </div>
                                <!-- Widget Filter End -->
                                <!-- Widget Filter Start -->
                                <div class="widget-filter">
                                    <h4 class="widget-filter__title-02 text-success">File Type</h4>

                                    <!-- Widget Filter Wrapper Start -->
                                    <div class="widget-filter__wrapper">
                                        <ul class="widget-filter__list">
                                           
                                        @foreach ($types as $type)
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox"  name="type" onchange="$('#filterForm').submit()" value="{{$theme->id}}" {{ (@$search->type == $type->id)?'checked':''}} id="type{{$type->id}}">
                                                    <label for="type{{$type->id}}">{{$type->name}}</label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                        @endforeach
                                            
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
    
    <div class="row px-3">

        <div class="col-lg-12 d-flex">
             <input type="search" class="form-control" name="term" value="{{@$search->term}}" placeholder="Search"/>
        </div>

        @php 
	     $i=0;
         $colors = ['success','info','warning'];
	   @endphp
	  
	   @foreach($publications as $row)
	    
			@php 
			 $i++;
			@endphp

         <!-- Course List Start -->
         <div class="course-list-item bg-white mt-2 mb-3 py-3 px-2 align-items-center col-lg-12 rounded">
                <div class="course-list-header">
                    <div class="course-list-header__thumbnail">
                        <a href="{{ url('records/resource')}}?id={{$row->id}}"><img src="{{ storage_link('uploads/publications/'.$row->cover) }}" alt="courses" width="270" height="181"></a>
                    </div>
                    <div class="course-header__badge">
                        <span class="free  bg-{{ $colors[mt_rand(0,2)] }}">{{@$row->category->category_name}}</span>
                    </div>
                </div>
                <div class="course-list-info">
                    <h3 class="course-list-info__title">
                        <a href="{{ url('records/resource')}}?id={{$row->id}}">
                        {!! truncate($row->title,500) !!}</a></h3>
                    <div class="course-list-info__meta">
                        <span class="fw-bold">{{@$row->category->category_name}}</span>
                        <span><i class="fas fa-file"></i> {{@$row->file_type->name}}</span>
                        <span><i class="fas fa-eye"></i> {{@$row->visits}} Views</span>
                    </div>
                    <div class="course-list-info__description">
                        <p>{!! nl2br(truncate($row->description,180)) !!}</p>
                    </div>
                    <div class="course-list-info__action">
                        <a href="" class="btn btn-primary btn-hover-secondary">View Details</a>
                        <!-- <a href="" class="btn-icon btn-light btn-hover-primary" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="far fa-heart"></i></a> -->
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

    </div>
    </div>
    </div>
    </form>

    </div>


</div>

@endsection

@section('scripts')

<script>

$("input:checkbox").on('click', function() {
  // in the handler, 'this' refers to the box clicked on
  var $box = $(this);
  if ($box.is(":checked")) {
    // the name of the box is retrieved using the .attr() method
    // as it is assumed and expected to be immutable
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    // the checked state of the group/box on the other hand will change
    // and the current value is retrieved using .prop() method
    $(group).prop("checked", false);
     $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
});

function toggleFilter(){
  $('#filter').toggle('show');
}

</script>

@endsection
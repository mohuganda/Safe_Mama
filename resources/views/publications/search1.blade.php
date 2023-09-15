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

		@include('publications.partials.publications')


</div>

@endsection

@section('scripts')

@include('common.select2')

@endsection
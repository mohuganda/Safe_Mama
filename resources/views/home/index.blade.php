@extends('layouts.app')

@section('styles')


@endsection

@section('content')

    @include('home.partials.spotlight')
    @include('home.partials.mobilemenu')
    @include('home.partials.top_categories')
    @include('home.partials.themes')
    @include('home.partials.top_searches')
    @include('home.partials.top_authors')

@endsection

@section('scripts')

@include('common.select2')

@endsection
@php $page='home';  @endphp
@extends('layouts.master')

@section('page_title')
    Home
@endsection

@section('head')

@endsection

@section('seo')


@stop

@section('content-wrapper')
    @include('home.banner')
    @include('home.about')
    @include('home.services')
    @include('home.steps')
    @include('home.gallery')
{{--    @include('home.team')--}}
{{--    @include('home.get-started-1')
    @include('home.blogs')--}}
    @include('home.testimonials')
    @include('home.get-started-2')
    @include('home.contact')
@endsection
@php $page='works';  @endphp
@extends('layouts.master')

@section('page_title')
    Works
@endsection

@section('head')

@endsection

@section('seo')


@stop

@section('content-wrapper')
    @include('home.navbar')
    @php
        $galleries=\App\Gallery::all()->groupBy('type');
    @endphp
    <section class="page_title ls s-py-50 corner-title ls invise overflow-visible">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Gallery Regular</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="./">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                           Works
                        </li>
                    </ol>
                    <div class="divider-15 d-none d-xl-block"></div>
                </div>
            </div>
        </div>
    </section>


    <section class="ls s-pt-50 s-pb-100 gallery-pagination gallery-regular">
        <div class="d-none d-lg-block divider-20"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-xl-8">
                            <div class="filters gallery-filters small-text text-lg-right">
                                <a href="#" data-filter="*" class="active selected">All</a>
                                @foreach($galleries as $key => $gallery)
                                    <a href="#" data-filter=".{{str_replace(' ','-',$key)}}">{{ ucwords($key)  }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>


                    <div class="row isotope-wrapper masonry-layout c-mb-30" data-filters=".gallery-filters">
                        @foreach($galleries as $key => $group)
                            @foreach($group as $gallery)
                        <div class="col-xl-4 col-sm-6 {{str_replace(' ','-',$key)}} design">
                            <div class="vertical-item item-gallery content-absolute gallery text-center ls">
                                <div class="item-media">
                                    <img src="{{ asset('storage/'.$gallery->image)}}" alt="">
                                    <div class="media-links">
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h6>
                                        <a class="tags small-text" href="{{$gallery->link}}" target="_blank">{{ ucwords($key)  }}</a>
                                    </h6>
                                </div>
                            </div>

                        </div>
                            @endforeach
                        @endforeach

                    <!-- .isotope-wrapper-->
                </div>
            </div>
        </div>
        <div class="d-none d-lg-block divider-105"></div>
    </section>

@endsection
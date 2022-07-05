@php  $page='services';  @endphp
@extends('layouts.master')

@section('page_title')
    Services
@endsection

@section('head')
@endsection

@section('seo')


@stop

@section('content-wrapper')
    @include('home.navbar')
    <section class="page_title ls s-py-50 corner-title ls invise overflow-visible">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Services</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="./">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Services
                        </li>
                    </ol>
                    <div class="divider-15 d-none d-xl-block"></div>
                </div>
            </div>
        </div>
    </section>


    <section class="ls s-pt-30 s-pb-20 s-pb-lg-50 s-pt-lg-50 c-gutter-60 c-mb-40 c-mb-md-60 service-item2">
        <div class="d-none d-lg-block divider-65"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">

                    <div class="vertical-item text-center">
                        <div class="item-media">
                            <img src="images/service/service_icon_1-1.png" alt="">
                        </div>
                        <div class="item-content">
                            <h6>
                                <a href="javascript:;">Marketing</a>
                            </h6>

                            <p>
                                We use strategic marketing tactics that have been proven to work.
                            </p>

                        </div>
                    </div>
                </div>
                <!-- .col-* -->
                <div class="col-md-4 col-sm-6">

                    <div class="vertical-item text-center">
                        <div class="item-media">
                            <img src="images/service/service_icon_2-1.png" alt="">
                        </div>
                        <div class="item-content">
                            <h6>
                                <a href="javascript:;">Development</a>
                            </h6>

                            <p>
                                Custom programming for most complex functions you can think.
                            </p>

                        </div>
                    </div>
                </div>
                <!-- .col-* -->
                <div class="col-md-4 col-sm-6">

                    <div class="vertical-item text-center">
                        <div class="item-media">
                            <img src="images/service/service_icon_3-1.png" alt="">
                        </div>
                        <div class="item-content">
                            <h6>
                                <a href="javascript:;">Web Design</a>
                            </h6>

                            <p>
                                Pork chop pork belly hamburger prosciutto, fatback andouille flank.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- .col-* -->
                <div class="col-md-4 col-sm-6">

                    <div class="vertical-item text-center">
                        <div class="item-media">
                            <img src="images/service/service_icon_4-1.png" alt="">
                        </div>
                        <div class="item-content">
                            <h6>
                                <a href="javascript:;">SEO Optimization</a>
                            </h6>

                            <p>
                                Optimizing our web designs to rank on the first page of google is our specialty.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- .col-* -->
                <div class="col-md-4 col-sm-6">

                    <div class="vertical-item text-center">
                        <div class="item-media">
                            <img src="images/service/service_icon_5-1.png" alt="">
                        </div>
                        <div class="item-content">
                            <h6>
                                <a href="javascript:;">Ecommerce</a>
                            </h6>

                            <p>
                                We build your online store using a flexible, modular platform that allows
                            </p>

                        </div>
                    </div>
                </div>
                <!-- .col-* -->
                <div class="col-md-4 col-sm-6">

                    <div class="vertical-item text-center">
                        <div class="item-media">
                            <img src="images/service/service_icon_6-1.png" alt="">
                        </div>
                        <div class="item-content">
                            <h6>
                                <a href="javascript:;">Branding</a>
                            </h6>

                            <p>
                                A solid brand strategy, logo and guidelines help you to get You recognized.
                            </p>

                        </div>
                    </div>
                </div>
                <!-- .col-* -->
                <div class="d-none d-lg-block divider-10"></div>
            </div>
        </div>
    </section>


@endsection

@push('scripts')
@endpush
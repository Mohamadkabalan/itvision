@php $page='about';  @endphp
@extends('layouts.master')

@section('page_title')
    About
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
                    <h1>About</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="./">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            About
                        </li>
                    </ol>
                    <div class="divider-15 d-none d-xl-block"></div>
                </div>
            </div>
        </div>
    </section>


    <section class="s-pt-30 s-pt-lg-50 ls about">
        <div class="divider-60 d-none d-xl-block"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="main-content text-center">
                        <h5>
                            "We love what we do and we love helping others succeed at what they love to do."
                        </h5>
                        <i class="rt-icon2-user"></i>
{{--                        <p>
                            Gregory F. Parrino,
                            <span class="link-a">
										<a href="#">CEO</a>
									</span>
                        </p>--}}

                        <div class="divider-10 d-none d-xl-block"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="s-pt-0  s-pb-30 s-pt-lg-30 s-pb-lg-75 ls about-icon teaser-contact-icon">
        <div class="divider-10 d-none d-xl-block"></div>
        <div class="container">
            <div class="row c-mt-50 c-mt-lg-0">
                <div class="col-lg-4 text-center call-icon">
                    <div class="border-icon">
                        <div class="teaser-icon">
                            <img src="images/icon1_about.png" alt="">
                        </div>
                    </div>
                    <h6>
                        Who We Are
                    </h6>
                    <div class="icon-content">
                        <p>
                            We are a team of San Diego web design and development professionals who love partnering with good people and businesses to help them achieve online success.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 text-center write-icon">
                    <div class="divider-30 d-none d-xl-block"></div>
                    <div class="border-icon">
                        <div class="teaser-icon">
                            <img src="images/icon2_about.png" alt="">
                        </div>
                    </div>
                    <div class="icon-content">
                        <h6>
                            What We Do
                        </h6>
                        <p>
                            We’re focused on honing our crafts and bringing everything we have to the table for our clients. We create custom, functional websites focused on converting your users into customers.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 text-center visit-icon">
                    <div class="border-icon">
                        <div class="teaser-icon">
                            <img src="images/icon3_about.png" alt="">
                        </div>
                    </div>
                    <div class="icon-content">
                        <h6>
                            Why We Do It
                        </h6>
                        <p>
                            Each of us loves what we do and we feel that spirit helps translate into the quality of our work. Working with clients who love their work combines into a fun, wonderful partnership for everyone involved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
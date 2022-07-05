{{--@php $banners = \App\Banner::all();  @endphp
@if($banners)
@endif--}}
<span class="toggle_menu_side header-slide">
				<span></span>
			</span>

<section class="page_slider main_slider">
    <div class="flexslider" data-nav="true" data-dots="false">
        <ul class="slides">
            <li class="ds text-center slide1">
                <span class="flexslider-overlay"></span>
                <span class="embed-responsive embed-responsive-16by9">
								<iframe src="https://www.youtube.com/embed/UBufeh1yv2c?feature=oembed&;showinfo=0&;autoplay=1&;controls=0&;mute=1&;loop=1&;playlist=UBufeh1yv2c" allowfullscreen=""></iframe>
							</span>
                <div class="container">
                    <div class="row">
                        <div class="col-12 itro_slider">
                            <div class="intro_layers_wrapper">
                                <div class="intro_layers">
                                    <div class="intro_layer" data-animation="fadeIn">
                                        <p class="text-uppercase intro_after_featured_word">welcome to</p>
                                    </div>

                                    <div class="intro_layer" data-animation="slideRight">
                                        <h2 class="text-uppercase intro_featured_word">
                                            it Vision
                                        </h2>
                                    </div>
                                    <div class="intro_layer" data-animation="fadeIn">
                                        <h3 class="intro_before_featured_word">
                                            <span class="color-main2">Web Design</span>,
                                            <span class="color-main3">Marketing</span> &
                                            <span class="color-main4">Branding</span>
                                        </h3>
                                    </div>
                                    <div class="intro_layer page-bottom" data-animation="expandUp">
                                        <a class="btn btn-maincolor" target="_blank" href="https://wa.me/+96176053730">Get Started</a>
                                    </div>
                                </div>
                                <!-- eof .intro_layers -->
                            </div>
                            <!-- eof .intro_layers_wrapper -->
                        </div>
                        <!-- eof .col-* -->
                    </div>
                    <!-- eof .row -->
                </div>
                <!-- eof .container -->
            </li>
            <li class="ds text-center slide2">
                <span class="flexslider-overlay"></span>
                <img src="{{ asset('images/slide_02.jpg') }}" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-12 itro_slider">
                            <div class="intro_layers_wrapper">
                                <div class="intro_layers">
                                    <div class="intro_layer" data-animation="fadeIn">
                                        <h3 class="text-lowercase intro_before_featured_word">
                                            Online
                                        </h3>
                                    </div>
                                    <div class="intro_layer" data-animation="fadeIn">
                                        <h2 class="text-uppercase intro_featured_word">
                                            Marketing
                                        </h2>
                                    </div>
                                    <div class="intro_layer" data-animation="pullDown">
                                        <p class="text-uppercase intro_after_featured_word">Solutions</p>
                                    </div>
                                    <div class="intro_layer page-bottom" data-animation="expandUp">
                                        <a class="btn btn-maincolor"  target="_blank" href="https://wa.me/+96176053730">Get Started</a>
                                    </div>
                                </div>
                                <!-- eof .intro_layers -->
                            </div>
                            <!-- eof .intro_layers_wrapper -->
                        </div>
                        <!-- eof .col-* -->
                    </div>
                    <!-- eof .row -->
                </div>
                <!-- eof .container -->
            </li>
            <li class="ds text-center slide3">
                <img src="{{ asset('images/slide_03.jpg') }}" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-12 itro_slider">
                            <div class="intro_layers_wrapper">
                                <div class="intro_layers">
                                    <div class="intro_layer" data-animation="fadeInRight">
                                        <h2 class="text-uppercase intro_featured_word light">
                                            Modern
                                        </h2>
                                    </div>
                                    <div class="intro_layer" data-animation="fadeIn">
                                        <h2 class="text-uppercase intro_featured_word bold">
                                            Marketing & design
                                        </h2>
                                    </div>
                                    <div class="intro_layer" data-animation="fadeIn">
                                        <h2 class="text-uppercase intro_featured_word">
                                            That works
                                        </h2>
                                    </div>

                                    <div class="intro_layer page-bottom" data-animation="expandUp">
                                        <a class="btn btn-maincolor"  target="_blank" href="https://wa.me/+96176053730">Get Started</a>
                                        <a class="btn btn-outline-maincolor" href="#">our folio</a>
                                    </div>
                                </div>
                                <!-- eof .intro_layers -->
                            </div>
                            <!-- eof .intro_layers_wrapper -->
                        </div>
                        <!-- eof .col-* -->
                    </div>
                    <!-- eof .row -->
                </div>
                <!-- eof .container -->
            </li>

        </ul>
    </div>
    <!-- eof flexslider -->
    <div class="flexslider-bottom d-none d-xl-block">
        <a href="/about" class="mouse-button animated floating"></a>
    </div>
</section>
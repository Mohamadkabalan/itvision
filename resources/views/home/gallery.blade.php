@php
$galleries=\App\Gallery::all()->groupBy('type');
@endphp
<section class="s-pt-75 s-pt-xl-50 gallery-carousel main-gallery container-px-0" id="gallery">
    <div class="container-fluid">
        <div class="img-wrap text-center">
            <img src="img/vertical_line.png" alt="">
            <div class="divider-40 d-block d-sm-none"></div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-xl-5">
                        <div class="filters gallery-filters small-text text-lg-right">
                            <a href="#" data-filter="*" class="active selected">All</a>
                            @foreach($galleries as $key => $gallery)
                                <a href="#" data-filter=".{{str_replace(' ','-',$key)}}">{{ ucwords($key)  }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="owl-carousel gallery-owl-nav" data-autoplay="false" data-responsive-lg="5" data-responsive-md="3" data-responsive-sm="3" data-responsive-xs="2" data-nav="true" data-dots="false" data-filters=".gallery-filters" data-margin="0" data-loop="true">
                    @foreach($galleries as $key => $group)
                        @foreach($group as $gallery)
                            <div class="vertical-item item-gallery content-absolute text-center ds {{str_replace(' ','-',$key)}}">
                                <div class="item-media">
                                    <img src="{{ asset('storage/'.$gallery->image)}}" alt="">
                                    <div class="media-links">

                                    </div>
                                </div>
                                <div class="item-content">
                                    <h6>
                                        <a class="small-text" target="_blank" href="{{$gallery->link}}">{{ ucwords($key)  }}</a>
                                    </h6>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                <!-- .owl-carousel-->
            </div>
        </div>
    </div>
</section>
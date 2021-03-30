@extends('layouts.frontend.index')


@section('content')
    <div id="fwslider">
        <div class="slider_container">
            <div class="slide">
                <!-- Slide image -->
                <img src="images/hihi.jpg" alt="" />
                <!-- /Slide image -->
                <!-- Texts container -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- Text title -->

                        <!-- /Text title -->

                        <!-- Text description -->

                        <!-- /Text description -->
                    </div>
                </div>
                <!-- /Texts container -->
            </div>
            <!-- /Duplicate to create more slides -->
            <div class="slide">
                <img src="images/hihi1.jpg" alt="" />
                <div class="slide_content">
                    <div class="slide_content_wrap">
s
                    </div>
                </div>
            </div>
            <!--/slide -->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
    </div>
    <div class="main">
        <div class="wrap">
            <div class="section group">
                <div class="cont span_2_of_3">
                    <h2 class="head">Featured Products</h2>

                    <div class="top-box">
                        <div class="row">
                            @foreach ($products as $item)
                                <div class="col-xl-4">
                                    <a href="{{ url('/product') . '/' . $item->id }}">
                                        <div class="inner_content clearfix">
                                            <div class="product_image">
                                                <img src="images/deptrai.jpg" alt="" />
                                            </div>

                                            <div class="price">
                                                <div class="cart-left">
                                                    <p class="title">{{ $item->name }}</p>
                                                    <p class="title">{{ $item->description }}</p>
                                                    <div class="price1">

                                                        <span class="actual">{{ $item->price }} VND</span>
                                                    </div>
                                                </div>
                                                <div class="cart-right"> </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                            {{ $products->links() }}
                        </div>

                        <div class="clear"></div>
                    </div>

                </div>
                <div class="rsidebar span_1_of_left">
                    <div class="top-border"> </div>
                    <div class="border">
                        <link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
                        <link href="css/nivo-slider.css" rel="stylesheet" type="text/css" media="all" />
                        <script src="js/jquery.nivo.slider.js"></script>
                        <script type="text/javascript">
                            $(window).load(function() {
                                $('#slider').nivoSlider();
                            });

                        </script>
                        <div class="slider-wrapper theme-default">
                            <div id="slider" class="nivoSlider">
                                <img src="images/t-img1.jpg" alt="" />
                                <img src="images/t-img2.jpg" alt="" />
                                <img src="images/t-img3.jpg" alt="" />
                            </div>
                        </div>

                    </div>
                    <div class="top-border"> </div>
                    <div class="sidebar-bottom">

                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
@endsection

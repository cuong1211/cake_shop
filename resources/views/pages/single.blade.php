@extends('layouts.index')
@section('content')
    <div class="mens">
        <div class="main">
            <div class="wrap">
                <ul class="breadcrumb breadcrumb__t"><a class="home" href="#">Home</a> / <a href="#">Dolor sit amet</a>
                    / Lorem ipsum dolor sit amet</ul>
                <div class="cont span_2_of_3">
                    <div class="grid images_3_of_2">
                        <ul id="etalage">
                            <li>
                                <a href="optionallink.html">
                                    <img class="etalage_thumb_image" src="images/s-img.jpg" class="img-responsive" />
                                    <img class="etalage_source_image" src="images/s1.jpg" class="img-responsive" title="" />
                                </a>
                            </li>
                            <li>
                                <img class="etalage_thumb_image" src="images/s-img1.jpg" class="img-responsive" />
                                <img class="etalage_source_image" src="images/s2.jpg" class="img-responsive" title="" />
                            </li>
                            <li>
                                <img class="etalage_thumb_image" src="images/s-img2.jpg" class="img-responsive" />
                                <img class="etalage_source_image" src="images/s3.jpg" class="img-responsive" />
                            </li>
                            <li>
                                <img class="etalage_thumb_image" src="images/s4.jpg" class="img-responsive" />
                                <img class="etalage_source_image" src="images/s-img3.jpg" class="img-responsive" />
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="desc1 span_3_of_2">
                        <h3 class="m_3">Lorem ipsum dolor sit amet</h3>
                        <p class="m_5">Rs. 888 <span class="reducedfrom">Rs. 999</span> <a href="#">click for offer</a>
                        </p>
                        <div class="btn_form">
                            <form>
                                <input type="submit" value="buy" title="">
                            </form>
                        </div>
                        <span class="m_link"><a href="#">login to save in wishlist</a> </span>
                        <p class="m_text2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                            nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                            veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                            commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse
                            molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et
                            iusto odio dignissim qui blandit </p>
                    </div>
                    <div class="clear"></div>
                    <div class="clients">
                        <h3 class="m_3">10 Other Products in the same category</h3>
                        <ul id="flexiselDemo3">
                            <li><img src="images/s5.jpg" /><a href="#">Category</a>
                                <p>Rs 600</p>
                            </li>
                            <li><img src="images/s6.jpg" /><a href="#">Category</a>
                                <p>Rs 850</p>
                            </li>
                            <li><img src="images/s7.jpg" /><a href="#">Category</a>
                                <p>Rs 900</p>
                            </li>
                            <li><img src="images/s8.jpg" /><a href="#">Category</a>
                                <p>Rs 550</p>
                            </li>
                            <li><img src="images/s9.jpg" /><a href="#">Category</a>
                                <p>Rs 750</p>
                            </li>
                        </ul>
                        <script type="text/javascript">
                            $(window).load(function() {
                                $("#flexiselDemo1").flexisel();
                                $("#flexiselDemo2").flexisel({
                                    enableResponsiveBreakpoints: true,
                                    responsiveBreakpoints: {
                                        portrait: {
                                            changePoint: 480,
                                            visibleItems: 1
                                        },
                                        landscape: {
                                            changePoint: 640,
                                            visibleItems: 2
                                        },
                                        tablet: {
                                            changePoint: 768,
                                            visibleItems: 3
                                        }
                                    }
                                });

                                $("#flexiselDemo3").flexisel({
                                    visibleItems: 5,
                                    animationSpeed: 1000,
                                    autoPlay: false,
                                    autoPlaySpeed: 3000,
                                    pauseOnHover: true,
                                    enableResponsiveBreakpoints: true,
                                    responsiveBreakpoints: {
                                        portrait: {
                                            changePoint: 480,
                                            visibleItems: 1
                                        },
                                        landscape: {
                                            changePoint: 640,
                                            visibleItems: 2
                                        },
                                        tablet: {
                                            changePoint: 768,
                                            visibleItems: 3
                                        }
                                    }
                                });

                            });

                        </script>
                        <script type="text/javascript" src="js/jquery.flexisel.js"></script>
                    </div>
                    <div class="toogle">
                        <h3 class="m_3">Product Details</h3>
                        <p class="m_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                            nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                            veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                            commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse
                            molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et
                            iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te
                            feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil
                            imperdiet doming id quod mazim placerat facer possim assum.</p>
                    </div>
                    <div class="toogle">
                        <h3 class="m_3">More Information</h3>
                        <p class="m_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                            nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                            veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                            commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse
                            molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et
                            iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te
                            feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil
                            imperdiet doming id quod mazim placerat facer possim assum.</p>
                    </div>
                </div>
                <div class="rsingle span_1_of_single">
                    
                    <script src="js/jquery.easydropdown.js"></script>
                </div>
                <div class="clear">
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
@endsection

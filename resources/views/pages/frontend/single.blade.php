@extends('layouts.frontend.index')
@section('content')
    <div class="mens">
        <div class="main">
            <div class="wrap">
                <ul class="breadcrumb breadcrumb__t"><a class="home" href="#">Bánh</a> / <a href="#">Bánh Sinh nhật</a>
                   </ul>
                <div class="cont span_2_of_3">
                    <div class="grid images_3_of_2">
                        <ul id="etalage">
                            <li>
                                <a href="optionallink.html">
                                    <img class="etalage_thumb_image" src="images/deptrai.jpg" class="img-responsive" />
                                    <img class="etalage_source_image" src="images/deptrai.jpg" class="img-responsive" title="" />
                                </a>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="desc1 span_3_of_2">


                        <h3 class="m_3">{{ $products->name }}</h3>
                        <p class="m_5">{{ $products->price }}
                        </p>
                        <div class="btn_form">
                            <form>
                                <input type="submit" value="Mua" title="">
                            </form>
                        </div>
                        <span class="m_link"><a href="#">Đăng nhập để thêm voà giỏ hàng</a> </span>
                        <p class="m_text2">{{ $products->description }} </p>

                    </div>
                    <div class="clear"></div>
                    <div class="clients">
                        <h3 class="m_3">Các mẫu bánh khác</h3>
                        <ul id="flexiselDemo3">
                            <li><img src="images/n1.jpg" /><a href="#">Bánh Sinh Nhật</a>
                                <p>200 000VNĐ</p>
                            </li>
                            <li><img src="images/n2.jpg" /><a href="#">Bánh Sinh Nhật</a>
                                <p>250 000VNĐ</p>
                            </li>
                            <li><img src="images/n3.jpg" /><a href="#">Bánh Sinh Nhật</a>
                                <p>300 000VNĐ</p>
                            </li>
                            <li><img src="images/n4.jpg" /><a href="#">Bánh Sinh Nhật</a>
                                <p>150 000VNĐ</p>
                            </li>
                            <li><img src="images/n5.jpg" /><a href="#">Bánh Sinh Nhật</a>
                                <p>R200 000VNĐ</p>
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
                        <h3 class="m_3">Chi Tiết Sản Phẩm</h3>
                        <p class="m_text">Nguyên liệu
                            Bột ngô: 40g (bột ngô làm bánh mềm, nhẹ, bông xốp)
                            Bột mì: 40g
                            Dầu ăn: 30g (tương đương 30ml)
                            Sữa tươi không đường: 15g (khoảng 15ml)
                            Trứng gà: 4 – 5 quả (tùy kích cỡ trứng) – nhiệt độ phòng
                            Đường xay: 80g (đường xay tan nhanh hơn, làm bánh mềm hơn)
                            Cream of tartar: ½ thìa café</p>
                        <p>
                            Bánh sinh nhật Ninh Huy Cường luôn cam kết chất lượng hàng đầu tại Việt Nam
                            <br>
                            Bánh không ngon không lấy tiền!!!
                        </p>
                    </div>

                </div>

            <div class="clear"></div>
        </div>
    </div>
@endsection

<div class="header-top">
    <div class="wrap">
        <div class="header-top-left">
            <h1>Ninh Huy Cường Bakery</h1>
            <div class="clear"></div>
        </div>
        <div class="cssmenu">
            <ul>
                <li class="active"><a href="login.html">Account</a></li> |
                <li><a href="{{ url('/login') }}">Log In</a></li> |
                <li><a href="{{ url('/register') }}">Sign Up</a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="header-bottom">
    <div class="wrap">
        <div class="header-bottom-left">
            <div class="logo">
                <a class="logo-title" href="{{ url('/') }}"> <h1 >NHC BAKERY</h1> </a>
            </div>
            <div class="menu">
                <ul class="megamenu skyblue">
                    <li class="active grid"><a href="index.html">TRANG CHỦ</a></li>
                    <li><a class="color4" href="#">BÁNH</a>
                        <div class="megapanel">
                            <div class="row">
                                <div class="col0">
                                    <div class="h_nav">
                                        <h4>Bánh Sinh Nhật</h4>
                                        <ul>
                                            <li><a href="womens.html">Bánh In Ảnh</a></li>
                                            <li><a href="womens.html">Bánh Mẫu</a></li>
                                            <li><a href="womens.html">Bánh Theo Yêu Cầu</a></li>
                                            <li><a href="womens.html">Bánh Động Vật</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col0">
                                    <div class="h_nav">
                                        <h4>Bánh Cưới</h4>
                                        <ul>
                                            <li><a href="womens.html">Bánh 3 Tầng</a></li>
                                            <li><a href="womens.html">Combo Cưới</a></li>
                                            <li><a href="womens.html">Bánh Theo Yêu Cầu</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </li>

                    <li><a class="color7" href="other.html">MUA</a></li>
                </ul>
            </div>
        </div>
        <div class="header-bottom-right">
            <form class="search" type="get" action="{{ url('/search') }}">
                <input type="search" name="query" class="textbox" id="search-input">
                <button class="search-button" type="submit"> Tìm kiếm </button>
                <div id="response"> </div>
            </form>
            <div class="tag-list">

                <ul class="icon1 sub-icon1 profile_img">
                    <li><a class="active-icon c2" href="#"> </a>
                        <ul class="sub-icon1 list">
                            <li>
                                <h3>No Products</h3><a href=""></a>
                            </li>
                            <li>
                                <p>Lorem ipsum dolor sit amet, consectetuer <a href="">adipiscing elit, sed diam</a>
                                </p>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="last">
                    <li><a href="#">Cart(0)</a></li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <!-- Favicons -->
    
    <link rel="apple-touch-icon" href="{{asset('frontends/assets/img/icon.png')}}">

    <!-- Title -->
    <title>ThreeGroup</title>

    <!-- ************************* CSS Files ************************* -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontends/assets/css/bootstrap.min.css')}}">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{asset('frontends/assets/css/font-awesome.min.css')}}">

    <!-- Elegent Icon CSS -->
    <link rel="stylesheet" href="{{asset('frontends/assets/css/elegent-icons.css')}}">

    <!-- All Plugins CSS css -->
    <link rel="stylesheet" href="{{asset('frontends/assets/css/plugins.css')}}">

    <!-- style css -->
    <link rel="stylesheet" href="{{asset('frontends/assets/css/main.css')}}">

    <!-- modernizr JS
    ============================================ -->
    <script src="{{asset('frontends/assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>

</head>

<body>


    <!-- Main Wrapper Start -->
    <div class="wrapper bg--shaft">
        <!-- Header Area Start -->
        <header class="header headery-style-1">
            <div class="header-top header-top-1">
                <div class="container">
                    <div class="row no-gutters align-items-center">
                        <div class="col-lg-8 d-flex align-items-center flex-column flex-lg-row">
                            <ul class="social social-round mr--20">
                                <li class="social__item">
                                    <a href="twitter.com" class="social__link">
                                    <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="plus.google.com" class="social__link">
                                    <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="facebook.com" class="social__link">
                                    <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="youtube.com" class="social__link">
                                    <i class="fa fa-youtube"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="instagram.com" class="social__link">
                                    <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                            <p class="header-text">所有国内订单凭优惠码免费送货<span>“ThreeGroup”</span></p>
                        </div>
                        <div class="col-lg-4">
                            <div class="header-top-nav d-flex justify-content-lg-end justify-content-center">
                                <div class="language-selector header-top-nav__item">
                                    <div class="dropdown header-top__dropdown">
                                        <a class="dropdown-toggle" id="languageID" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            语言
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="languageID">
                                            <a class="dropdown-item" href="#"><img src="{{asset('frontends/assets/img/header/1.jpg')}}" alt="English"> 英语</a>
                                            <a class="dropdown-item" href="#"><img src="{{asset('frontends/assets/img/header/2.jpg')}}" alt="Français"> 法语</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="user-info header-top-nav__item">
                                    <div class="dropdown header-top__dropdown">
                                        <a class="dropdown-toggle" id="userID" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            我的帐号
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <?php session_start() ?>
                                        @if(empty($_SESSION['nickName']))
                                            <div class="dropdown-menu" aria-labelledby="userID">
                                                <a class="dropdown-item" href="frontend/register">注册账号</a>
                                                <a class="dropdown-item" href="frontend/login">登录</a>
                                        < /div>
                                        @else
                                        <?php echo $_SESSION['nickName'] ?>
                                        <div class="dropdown-menu" aria-labelledby="userID">
                                            <a class="dropdown-item" href="frontend/register">您的个人信息</a>
                                            <a class="dropdown-item" href="frontend/login">切换账号</a>
                                            <a class="dropdown-item" href="frontend/sessionOut">退出登录</a>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle header-top-1">
                <div class="container">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-5 col-sm-6 order-lg-1 order-2">
                            <div class="contact-info">
                                <img src="{{asset('frontends/assets/img/icons/icon_phone.png')}}" alt="Phone Icon">
                                <p>联系我们 <br> 免费技术支持: 13366767482</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-12 order-lg-2 order-1 text-center">
                            <a href="index.html" class="logo-box mb-md--30">
                                <img src="{{asset('frontends/assets/img/logo/logo.png')}}" alt="logo">
                            </a>
                        </div>
                        <div class="col-lg-5 col-md-7 col-sm-6 order-lg-3 order-3">
                            <div class="header-toolbar">
                                <div class="search-form-wrapper search-hide">
                                    <form action="#" class="search-form">
                                        <input type="text" name="search" id="search" class="search-form__input" placeholder="输入要搜索的内容..">
                                        <button type="submit" class="search-form__submit">
                                            <i class="icon_search"></i>
                                        </button>
                                    </form>
                                </div>
                                <ul class="header-toolbar-icons">
                                    <li class="search-box">
                                        <a href="#" class="bordered-icon search-btn" aria-expanded="false"><i class="icon_search"></i></a>
                                    </li>
                                    <li class="wishlist-icon">
                                        <a href="wishlist.html" class="bordered-icon"><i class="fa fa-heart"></i></a>
                                    </li>
                                    <li class="mini-cart-icon">
                                        <div class="mini-cart mini-cart--1">
                                            <a class="mini-cart__dropdown-toggle bordered-icon" id="cartDropdown">
                                                <span class="mini-cart__count">0</span>
                                                <i class="icon_cart_alt mini-cart__icon"></i>
                                                <span class="mini-cart__ammount">80.00 <i class="fa fa-angle-down"></i></span>
                                            </a>
                                            <div class="mini-cart__dropdown-menu">
                                                <div class="mini-cart__content" id="miniCart">
                                                    <div class="mini-cart__item">
                                                        <div class="mini-cart__item--single">
                                                            <div class="mini-cart__item--image">
                                                                <img src="{{asset('frontends/assets/img/products/1-1-450x450.jpg')}}" alt="product">
                                                            </div>
                                                            <div class="mini-cart__item--content">
                                                                <h4 class="mini-cart__item--name"><a href="product-details.html">Dell Inspiron 24</a> </h4>
                                                                <p class="mini-cart__item--quantity">x1</p>
                                                                <p class="mini-cart__item--price">$100.00</p>
                                                            </div>
                                                            <a class="mini-cart__item--remove" href=""><i class="icon_close"></i></a>
                                                        </div>
                                                        <div class="mini-cart__item--single">
                                                            <div class="mini-cart__item--image">
                                                                <img src="{{asset('assets/img/products/2-2-450x450.jpg')}}" alt="product">
                                                            </div>
                                                            <div class="mini-cart__item--content">
                                                                <h4 class="mini-cart__item--name"><a href="product-details.html">Acer Aspire AIO <br>-<small>Color Swatch Black</small></a> </h4>
                                                                <p class="mini-cart__item--quantity">x1</p>
                                                                <p class="mini-cart__item--price">$100.00</p>
                                                            </div>
                                                            <a class="mini-cart__item--remove" href=""><i class="icon_close"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="mini-cart__calculation">
                                                        <p>
                                                            <span class="mini-cart__calculation--item">Sub-Total :</span>
                                                            <span class="mini-cart__calculation--ammount">$1,070.00</span>
                                                        </p>
                                                        <p>
                                                            <span class="mini-cart__calculation--item">Eco Tax (-2.00) :</span>
                                                            <span class="mini-cart__calculation--ammount">$4.00</span>
                                                        </p>
                                                        <p>
                                                            <span class="mini-cart__calculation--item">Eco VAT (20%) :</span>
                                                            <span class="mini-cart__calculation--ammount">$214.00</span>
                                                        </p>
                                                        <p>
                                                            <span class="mini-cart__calculation--item">Eco Total :</span>
                                                            <span class="mini-cart__calculation--ammount"> $1,288.00</span>
                                                        </p>
                                                    </div>
                                                    <div class="mini-cart__btn">
                                                        <a href="cart.html" class="btn btn-fullwidth btn-style-1">View Cart</a>
                                                        <a href="checkout.html" class="btn btn-fullwidth btn-style-1">Checkout</a>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="header-bottom header-top-1 position-relative navigation-wrap fixed-header">
                <div class="container position-static">
                    <div class="row">
                        <div class="col-12 position-static text-center">
                            <nav class="main-navigation">
                                <ul class="mainmenu">
                                    <li class="mainmenu__item active menu-item-has-children has-children">
                                        <a href="index.html" class="mainmenu__link">Home</a>
                                        <ul class="sub-menu">
                                            <li><a href="">Home</a></li>
                                        </ul>
                                    </li>
                                    <li class="mainmenu__item menu-item-has-children">
                                        <a href="shop.html" class="mainmenu__link">Shop</a>
                                        <ul class="megamenu five-column">
                                            <li>
                                                <a class="megamenu-title" href="#">Shop Grid</a>
                                                <ul>
                                                    <li>
                                                        <a href="shop.html">Left Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-right-sidebar.html">Right Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-fullwidth.html">Three Column</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-fullwidth-4-column.html">Four Column</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="megamenu-title" href="#">Shop List</a>
                                                <ul>
                                                    <li>
                                                        <a href="shop-list-left-sidebar.html">Left Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-list-right-sidebar.html">Right Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-list.html">Full width</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="megamenu-title" href="#">Single Product</a>
                                                <ul>
                                                    <li>
                                                        <a href="product-details.html">Standard Product</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-details-variable.html">Variable Product</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-details-group.html">Group Product</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-details-affiliate.html">Affiliate Product</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="megamenu-title" href="#">Single Product</a>
                                                <ul>
                                                    <li>
                                                        <a href="product-details.html">Tab Style One</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-details-tab-style-2.html">Tab Style Two</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-details-tab-style-3.html">Tab Style Three</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-details-sticky-left.html">Sticky Left</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-details-sticky-right.html">Sticky Right</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="megamenu-title" href="#">Single Product</a>
                                                <ul>
                                                    <li>
                                                        <a href="product-details-gallery-left.html">Gallery Left</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-details-gallery-right.html">Gallery Right</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-details-slider-box.html">Slider Box</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-details-slider-full-width.html">Full Width Slider</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mainmenu__item menu-item-has-children has-children">
                                        <a href="blog.html" class="mainmenu__link">Blog</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children has-children">
                                                <a href="#">Blog Grid</a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog.html">Left Sidebar</a></li>
                                                    <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                                                    <li><a href="blog-3-column.html">Three Column</a></li>
                                                    <li><a href="blog-4-column.html">Four Column</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children has-children">
                                                <a href="#">Blog List</a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog-list.html">Full Width</a></li>
                                                    <li><a href="blog-list-left-sidebar.html">left Sidebar</a></li>
                                                    <li><a href="blog-list-right-sidebar.html">Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children has-children">
                                                <a href="#">Blog Details</a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog-details-image.html">Standard Post</a></li>
                                                    <li><a href="blog-details-image.html">Image Post</a></li>
                                                    <li><a href="blog-details-audio.html">Audio Post</a></li>
                                                    <li><a href="blog-details-video.html">Video Post</a></li>
                                                    <li><a href="blog-details-gallery.html">Gallery Post</a></li>
                                                    <li><a href="blog-details-right-sidebar.html">Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mainmenu__item menu-item-has-children has-children">
                                        <a href="#" class="mainmenu__link">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="compare.html">compare</a></li>
                                            <li><a href="wishlist.html">wishlist</a></li>
                                            <li><a href="my-account.html">my account</a></li>
                                            <li><a href="404.html">404</a></li>
                                            <li><a href="faq.html">Faq</a></li>
                                            <li><a href="login-register.html">Login Register</a></li>
                                        </ul>
                                    </li>
                                    <li class="mainmenu__item">
                                        <a href="about.html" class="mainmenu__link">About Us</a>
                                    </li>
                                    <li class="mainmenu__item">
                                        <a href="contact.html" class="mainmenu__link">contact Us</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Area End -->

        <!-- Main Content Wrapper Start -->
        <div class="main-content-wrapper">
            <!-- 首页轮播图区域  -->
            <!-- Slider area Start -->
           
            <div class="slider-area">
                <div class="homepage-slider">
                    <!-- Single Slide Start -->
                    @foreach($list1 as $key => $val)
                    <div id="find" class="single-slider content-v-center" style="background-image: url({{$val->longshopImg}})">
                        <div class="container">
                        
                            <div class="row">
                           
                                <div class="col-12">
                                    <div class="slider-content">
                                        <h5 data-animation="rollIn" data-duration=".8s" data-delay=".5s">Exclusive Offer -20% Off This Week</h5>
                                        <h1 data-animation="fadeInDown" data-duration=".8s" data-delay=".2s">{{$val->shopName}}</h1>
                                        <p class="mb--30 mb-sm--20" data-animation="fadeInDown" data-duration=".8s" data-delay=".2s">{{$val->briefnessContent}}</p>
                                        <p class="mb--50 mb-sm--20" data-animation="fadeInDown" data-duration=".8s" data-delay=".2s">起步价 <strong>${{$val->shopPrice}}</strong></p>
                                        <div class="slide-btn-group" data-animation="fadeInUp" data-duration="1s" data-delay=".3s">
                                            <a href="shop.html" class="btn btn-bordered btn-style-1">现在购买</a>
                                        </div>
                                    </div>
                                </div>
                           
                            </div>
                            
                        </div>
                    </div>
                    @endforeach
                    <!-- Single Slide End -->
                </div>
            </div>
           
            <!-- Slider area End -->

            <!-- Promo Box area Start -->
            <!-- 促销盒区域开始 -->
            <div class="promo-box-area border-bottom ptb--80 ptb-md--60">
                <div class="container">
                    <div class="row">
                        <!-- 轮播图下一哥区域 -->
                        @foreach($list2 as $key => $val)
                        <div class="col-md-4 mb-sm--30">
                            <div class="promo promo-1">
                                <a href="shop.html" class="promo__box">
                                    <img src="{{asset($val->shopImg)}}" alt="Product Category">
                                    <span class="promo__content">
                                        <span class="promo__label">{{$val->briefnessContent}}</span>
                                        <span class="promo__name">{{$val->shopName}}</span>
                                        <span class="promo__price">From  ${{$val->shopPrice}} - Sale 20%</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    <div class="row mt--40 mt-md--30">
                        <div class="col-12 text-center">
                            <p class="tweet"><i class="fa fa-twitter"></i> Check out "Alice - Multipurpose Responsive #Magento #Theme" on #Envato by @Plazathemes #Themeforest <a href="#">http://www.luzhanshen.com</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Promo Box area End -->

            <!-- Products Tab area Start -->

            <!-- 产品标签区域启动 -->
            <div class="product-tab pt--80 pb--60 pt-md--60 pb-md--45">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <ul class="nav nav-tabs product-tab__head" id="product-tab" role="tablist">
                                <li class="product-tab__item nav-item active">
                                    <a class="product-tab__link nav-link active" id="nav-featured-tab" data-toggle="tab" href="#nav-featured" role="tab" aria-selected="true">特色榜</a>
                                </li>
                                <li class="product-tab__item nav-item">
                                    <a class="product-tab__link nav-link" id="nav-new-tab" data-toggle="tab" href="#nav-new" role="tab" aria-selected="false">新品榜</a>
                                </li>
                                <li class="product-tab__item nav-item">
                                    <a class="product-tab__link nav-link" id="nav-bestseller-tab" data-toggle="tab" href="#nav-bestseller" role="tab" aria-selected="false">畅销榜</a>
                                </li>
                                <li class="product-tab__item nav-item">
                                    <a class="product-tab__link nav-link" id="nav-onsale-tab" data-toggle="tab" href="#nav-onsale" role="tab" aria-selected="false">廉价榜</a>
                                </li>
                            </ul>
                            <div class="tab-content product-tab__content" id="product-tabContent">

                                <!-- 特色榜 -->
                                <div class="tab-pane fade show active" id="nav-featured" role="tabpanel">
                                    <div class="product-carousel js-product-carousel">
                                        @foreach($list3 as $key => $val)
                                           
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="{{asset($val->shopImg)}}" alt="Product" class="primary-image" />
                                                    <img src="{{asset($val->shopImg)}}" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            -8%
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span>本站特色榜前五</span>
                                                    <h4><a href="product-details.html">{{$val->shopName}}</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">{{$val->memberPrice}}</span>
                                                        <span class="product-price-old">
                                                            <span class="money">{{$val->shopPrice}}</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <!-- 星级 -->
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      {{$val->briefnessContent}}
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="#" title="wishlist"><span>添加到购物车</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                               
                                        @endforeach
                                    </div>
                                </div>

                                <!-- 新品榜 -->
                                <div class="tab-pane fade" id="nav-new" role="tabpanel">
                                    <div class="product-carousel js-product-carousel">  
                                            @foreach($list4 as $key => $val)                                   
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="{{asset($val->shopImg)}}" alt="Product" class="primary-image" />
                                                    <img src="{{asset($val->shopImg)}}" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            -7%
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span>本站新品榜前五名</span>
                                                    <h4><a href="product-details.html">{{$val->shopName}}</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">{{$val->memberPrice}}</span>
                                                        <span class="product-price-old">
                                                            <span class="money">{{$val->shopPrice}}</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      {{$val->briefnessContent}}
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                 
                                    </div>
                                </div>

                                <!-- 畅销榜 -->
                                <div class="tab-pane fade" id="nav-bestseller" role="tabpanel">
                                    <div class="product-carousel js-product-carousel">
                                             @foreach($list5 as $key => $val)
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                <img src="{{asset($val->shopImg)}}" alt="Product" class="primary-image" />
                                                    <img src="{{asset($val->shopImg)}}" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            -7%
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span>Cartier</span>
                                                    <h4><a href="product-details.html">{{$val->shopName}}</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">{{$val->memberPrice}}</span>
                                                        <span class="product-price-old">
                                                            <span class="money">{{$val->shopPrice}}</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      {{$val->briefnessContent}}
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                       @endforeach
                                       
                                    </div>
                                </div>

                                <!-- 当点击廉价榜的时候 -->
                                <div class="tab-pane fade" id="nav-onsale" role="tabpanel">
                                    <div class="product-carousel js-product-carousel">
                                    @foreach($list6 as $key => $val)
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="{{asset($val->shopImg)}}" alt="Product" class="primary-image" />
                                                    <img src="{{asset($val->shopImg)}}" alt="Product" class="secondary-image" />
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                            -7%
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span>廉价榜前五名</span>
                                                    <h4><a href="product-details.html">{{$val->shopName}}</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">{{$val->memberPrice}}</span>
                                                        <span class="product-price-old">
                                                            <span class="money">{{$val->shopPrice}}</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mirora_product_action text-center position-absolute">
                                                    <div class="product-rating">
                                                        <span>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star theme-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <p>
                                                      {{$val->briefnessContent}}
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                           @endforeach
                                       
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Products Tab area End -->

            <!-- Banner area Start -->

            <section class="banner-area banner-bg-1 ptb--80 ptb-md--60">
                <div class="banner-box text-center">
                    <h5 class="banner__label">所有产品减价20%</h5>
                    <h2 class="banner__name">收集新趋势</h2>
                    <p class="banner__text mb--50 mb-md--20">我们相信好的设计总是时兴的</p>
                    <a href="shop.html" class="btn btn-bordered btn-style-1">点击购买</a>
                </div>
            </section>      

            <!-- Banner area End -->

            <!-- Most Viewed Product area Start -->
            <!-- 最受关注的产品领域开始 -->
            <section class="mostviewed-product-area border-bottom pt--80 pb--60 pt-md--60 pb-md--50">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title mb--15">
                                <h2 class="color--white">最受关注的产品领域</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="product-carousel nav-top js-product-carousel-2">

                                <div class="mirora-product">
                                    <div class="product-img">
                                        <img src="{{asset('frontends/assets/img/products/2-450x450.jpg')}}" alt="Product" class="primary-image" />
                                        <img src="{{asset('frontends/assets/img/products/2-2-450x450.jpg')}}" alt="Product" class="secondary-image" />
                                        <div class="product-img-overlay">
                                            <span class="product-label discount">
                                                -7%
                                            </span>
                                            <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <span>Cartier</span>
                                        <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                        <div class="product-price-wrapper">
                                            <span class="money">$550.00</span>
                                            <span class="product-price-old">
                                                <span class="money">$700.00</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="mirora_product_action text-center position-absolute">
                                        <div class="product-rating">
                                            <span>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                        <p>
                                          It is a long established fact that a reader will be distracted by the readable content...
                                        </p>
                                        <div class="product-action">
                                            <a class="same-action" href="wishlist.html" title="wishlist">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
                                            <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                <i class="fa fa-sliders fa-rotate-90"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                
                               
                            </div>
                        </div>
                    </div>
                </div>
            </section> 

            <!-- Most Viewed Product area End -->

            <!-- Blog area Start -->

            <section class="blog-area pt--80 pb--40 pt-md--60 pb-md--30">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title mb--30">
                                <h2>博客领域</h2>
                            </div>
                        </div>
                    </div>  
                    <div class="row">
                        <div class="col-12">
                            <div class="blog-carousel nav-top slick-item-gutter">
                                <article class="blog">
                                    <a href="blog-details-image.html" class="blog__thumb">
                                        <img src="{{asset('frontends/assets/img/blog/post1-370x230.jpg')}}" alt="Blog">
                                    </a>
                                    <div class="blog__content">
                                        <div class="blog__meta">
                                            <p class="blog__author">Post By: <a href="blog.html">HasTech</a></p>
                                            <p class="blog__date"><a href="blog.html">20 Oct 2018</a></p>
                                        </div>
                                        
                                        <h3 class="blog__title"><a href="blog-details-image.html">Mollis aliquet ante, suscipit non eget  nulla libero, vestibulum condimentum.</a></h3>
                                        <div class="blog__text">
                                            <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula.</p>
                                            <a class="read-more" href="blog-details-image.html">Read More</a>
                                        </div>
                                        
                                    </div>
                                </article>
                                <article class="blog">
                                    <a href="blog-details-image.html" class="blog__thumb">
                                        <img src="{{asset('frontends/assets/img/blog/post2-370x230.jpg')}}" alt="Blog">
                                    </a>
                                    <div class="blog__content">
                                        <div class="blog__meta">
                                            <p class="blog__author">Post By: <a href="blog.html">HasTech</a></p>
                                            <p class="blog__date"><a href="blog.html">20 Oct 2018</a></p>
                                        </div>
                                        
                                        <h3 class="blog__title"><a href="blog-details-image.html">Mollis aliquet ante, suscipit non eget  nulla libero, vestibulum condimentum.</a></h3>
                                        <div class="blog__text">
                                            <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula.</p>
                                            <a class="read-more" href="blog-details-image.html">Read More</a>
                                        </div>
                                        
                                    </div>
                                </article>
                                <article class="blog">
                                    <a href="blog-details-image.html" class="blog__thumb">
                                        <img src="{{asset('frontends/assets/img/blog/post3-370x230.jpg')}}" alt="Blog">
                                    </a>
                                    <div class="blog__content">
                                        <div class="blog__meta">
                                            <p class="blog__author">Post By: <a href="blog.html">HasTech</a></p>
                                            <p class="blog__date"><a href="blog.html">20 Oct 2018</a></p>
                                        </div>
                                        
                                        <h3 class="blog__title"><a href="blog-details-image.html">Mollis aliquet ante, suscipit non eget  nulla libero, vestibulum condimentum.</a></h3>
                                        <div class="blog__text">
                                            <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula.</p>
                                            <a class="read-more" href="blog-details-image.html">Read More</a>
                                        </div>
                                        
                                    </div>
                                </article>
                                <article class="blog">
                                    <a href="blog-details-image.html" class="blog__thumb">
                                        <img src="{{asset('frontends/assets/img/blog/post4-370x230.jpg')}}" alt="Blog">
                                    </a>
                                    <div class="blog__content">
                                        <div class="blog__meta">
                                            <p class="blog__author">Post By: <a href="blog.html">HasTech</a></p>
                                            <p class="blog__date"><a href="blog.html">20 Oct 2018</a></p>
                                        </div>
                                        
                                        <h3 class="blog__title"><a href="blog-details-image.html">Mollis aliquet ante, suscipit non eget  nulla libero, vestibulum condimentum.</a></h3>
                                        <div class="blog__text">
                                            <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula.</p>
                                            <a class="read-more" href="blog-details-image.html">Read More</a>
                                        </div>
                                        
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="row mt--35 mt-md--25">
                        <div class="col-12 text-center">
                            <a href="instagram.com" class="btn btn-medium btn-style-2"><i class="fa fa-instagram"></i>分享到朋友圈</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Blog area End -->

            <!-- Newsletter area start -->
            <!-- 通讯领域 -->
            <div class="newsletter-area pt--40 pb--80 pt-md--30 pb-md--60">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="newsletter text-center">
                                <h3 class="color--white">现在就加入我们的时事通讯吧</h3>
                                <p>在传统的claritatem中，没有弯曲的claritatem是一个常见的传说, 调查显示，在我死之前，有一个叫卢厄斯的人.</p>

                                <form class="newsletter-form validate mt--40" action="" method="post" id="mc-embedded-newsletter-form" name="mc-embedded-newsletter-form" target="_blank" novalidate="">
                                    <input type="email" name="email" id="sub_email" placeholder="请在这里输入您的电子邮件地址.." class="newsletter-form__input">
                                    <input type="submit" value="点击订阅" class="btn newsletter-btn btn-style-1">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Newsletter area End -->

            <!-- Promo Box area Start -->
            <!-- 促销盒区域 -->
            <div class="promo-box-area">
                <div class="container-fluid p-0">
                    <div class="row no-gutters">
                        <div class="col-md-6 mb-sm--20">
                            <div class="promo">
                                <a href="shop.html" class="promo__box promo__box-2">
                                    <img src="{{asset('frontends/assets/img/banner/img1-bottom-mirora1.jpg')}}" alt="Product Category">
                                    <span class="promo__content promo__content-2">
                                        <span class="promo__label">New Arrivals 2018</span>
                                        <span class="promo__name">Luxury Perfume 2018</span>
                                        <span class="promo__price">Men's and Woman's Accessories</span>
                                        <span class="promo__link">Discover Now</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="promo">
                                <a href="shop.html" class="promo__box promo__box-2">
                                    <img src="{{asset('frontends/assets/img/banner/img2-bottom-mirora1.jpg')}}" alt="Product Category">
                                    <span class="promo__content promo__content-2">
                                        <span class="promo__label">Trending Products 2018</span>
                                        <span class="promo__name">Maurice Lacroix Watch</span>
                                        <span class="promo__price">Only  from  $162.00 - Sale 20% Off</span>
                                        <span class="promo__link">Discover Now</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Promo Box area End -->
        </div>
        <!-- Main Content Wrapper Start -->

        <!-- Footer Start -->
        <footer class="footer border-top ptb--40 ptb-md--30">
            <div class="container">
                <div class="row mb--40 mb-md--30">
                    <div class="col-lg-4 col-md-6 mb-md--30">
                        <div class="footer-widget">
                            <h3 class="widget-title">关于Mirora</h3>
                            <div class="widget-content mb--20">
                                <p>地址: 123 Main Street, Anytown, <br> CA 12345 - USA.</p>
                                <p>手机号: 13366767482</p>
                                <p>传真: (012) 800 456 789</p>
                                <p>电子邮箱: VIPLuliuliu@163.com</p>
                            </div>
                            <ul class="social social-round">
                                <li class="social__item">
                                    <a class="social__link" href="facebook.com">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a class="social__link" href="twitter.com">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a class="social__link" href="youtube.com">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a class="social__link" href="instagram.com">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a class="social__link" href="plus.google.com">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 mb-md--30">
                        <div class="footer-widget">
                            <h3 class="widget-title">信息</h3>
                            <ul class="widget-menu">
                                <li><a href="">关于我们</a></li>
                                <li><a href="">配送信息</a></li>
                                <li><a href="">隐私权政策</a></li>
                                <li><a href="">地位 &amp; 条件</a></li>
                                <li><a href="">礼品券</a></li>
                                <li><a href="">联系我们</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 mb-sm--30">
                        <div class="footer-widget">
                            <h3 class="widget-title">额外部分</h3>
                            <ul class="widget-menu">
                                <li><a href="">品牌</a></li>
                                <li><a href="">礼物劵</a></li>
                                <li><a href="">联营</a></li>
                                <li><a href="">特刊</a></li>
                                <li><a href="">我的账户</a></li>
                                <li><a href="">退货</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget">
                            <h3 class="widget-title">Custom Products</h3>
                            <div class="widget-product">
                                <div class="product">
                                    <div class="product-img">
                                        <img src="{{asset('frontends/assets/img/products/11-450x450.jpg')}}" alt="products">
                                    </div>
                                    <div class="product-content">
                                        <div class="product-rating">
                                            <span>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                        <h4 class="product-title">
                                            <a href="product-details.html" tabindex="0">Acer Aspire E 15</a>
                                        </h4>
                                        <div class="product-price-wrapper">
                                            <span class="money">$550.00</span>
                                            <span class="product-price-old">
                                                <span class="money">$700.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-img">
                                        <img src="{{asset('frontends/assets/img/products/11-450x450.jpg')}}" alt="products">
                                    </div>
                                    <div class="product-content">
                                        <div class="product-rating">
                                            <span>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                        <h4 class="product-title">
                                            <a href="product-details.html" tabindex="0">Acer Aspire E 15</a>
                                        </h4>
                                        <div class="product-price-wrapper">
                                            <span class="money">$550.00</span>
                                            <span class="product-price-old">
                                                <span class="money">$700.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb--40 mb-md--30">
                    <div class="col-12">
                        <ul class="footer-menu">
                            <li><a href="">家</a></li>
                            <li><a href="">网上商店</a></li>
                            <li><a href="">促销</a></li>
                            <li><a href="">隐私策略</a></li>
                            <li><a href="">使用条款</a></li>
                            <li><a href="">网站地图</a></li>
                            <li><a href="">支持</a></li>
                            <li><a href="">联系人</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="copyright-text"></p>
                        <img src="{{asset('frontends/assets/img/others/payment.png')}}" alt="payment">
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- Scroll To Top Start -->    
        <a class="scroll-to-top" href=""><i class="fa fa-angle-double-up"></i></a>
        <!-- Scroll To Top End -->

        <!-- Popup Subscribe Box Start -->

        <div class="popup-subscribe-box" id="subscribe-popup">
            <div class="popup-subscribe-box-content">
                <div class="popup-subscribe-box-body">
                    <a href="#subscribe-popup" class="popup-close">紧密的</a>
                    <h3>实时通讯</h3>
                    <p>现在就订阅我们的时事通讯，了解最新的收藏、最新的lookbooks和独家优惠.</p>
                    <form class="popup-subscribe-form validate" action="" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate="">
                        <input type="email" name="popup-subscribe-email" id="popup-subscribe-email" placeholder="Enter your email here...">
                        <input type="submit" value="Subscribe" class="btn subscribe-btn btn-medium btn-style-1">
                        <div class="form-group text-center mt--20">
                            <input type="checkbox" name="hide-popup" id="hide-popup">
                            <label for="hide-popup">不要再显示这个弹出框了 </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Popup Subscribe Box End -->

        <!-- 详细信息区域 -->
        <!-- Modal Start -->
        <div class="modal fade product-modal" id="productModal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 mb-sm--20">
                            <div class="tab-content product-thumb-large">
                                 <!-- 最多循环5次 商品图片 600*600类型-->
                                <div id="thumb1" class="tab-pane active show fade">
                                    <img src="{{asset('frontends/assets/img/products/1-1-600x600.jpg')}}" alt="product thumb">
                                </div>
                               
                            </div>
                            <div class="product-thumbnail">
                                <div class="thumb-menu" id="modal-thumbmenu">
                                     <!-- 最多循环5次 商品图片 450*450类型 -->   
                                    <div class="thumb-menu-item">
                                        <a href="#thumb1" data-toggle="tab" class="nav-link active">
                                            <img src="{{asset('frontends/assets/img/products/1-1-450x450.jpg')}}" alt="product thumb">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="modal-box product">
                                <h3 class="product-title">Acer Aspire E 15</h3>
                                <div class="ratings mb--20">
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <ul class="product-detail-list list-unstyled mb--20">
                                    <li>Brand: <a href="">Apple</a></li>
                                    <li>Product Code: Watches</li>
                                    <li>Reward Points: 600</li>
                                    <li>Availability: In Stock</li>
                                </ul>
                                <div class="product-price border-bottom pb--20 mb--20">
                                    <span class="regular-price">$100.50</span>
                                    <span class="sale-price">$98.98</span>
                                </div>
                                <div class="product-options mb--20">
                                    <h3>Available Options</h3>
                                    <div class="form-group">
                                        <label><sup>*</sup>Color Switch</label>
                                        <select>
                                            <option> --- Please Select --- </option>
                                            <option>Black</option>
                                            <option>Blue</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="product-action-wrapper mb--20">
                                    <div class="product-action-top d-flex align-items-center mb--20">
                                        <div class="quantity">
                                            <span>Qty: </span>
                                            <input type="number" class="quantity-input" name="qty" id="qty" value="1" min="1">
                                        </div>
                                        <button type="button" class="btn btn-medium btn-style-2 add-to-cart">
                                            Add To Cart
                                        </button>
                                    </div>
                                    <div class="product-action-bottom">
                                        <a href="wishlist.html">+Add to wishlist</a>
                                        <a href="compare.html">+Add to compare</a>
                                    </div>
                                </div>  
                                <p class="product-tags">
                                    Tags: <a href="shop.html">Sport</a>,
                                    <a href="shop.html">Luxury</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal End -->

    </div>
    <!-- Main Wrapper End -->


    <!-- ************************* JS Files ************************* -->

    <!-- jQuery JS -->
    <script src="{{asset('frontends/assets/js/vendor/jquery.min.js')}}"></script>

    <!-- Bootstrap and Popper Bundle JS -->
    <script src="{{asset('frontends/assets/js/bootstrap.bundle.min.js')}}"></script>

    <!-- All Plugins Js -->
    <script src="{{asset('frontends/assets/js/plugins.js')}}"></script>
    <!-- Ajax Mail Js -->
    <script src="{{asset('frontends/assets/js/ajax-mail.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('frontends/assets/js/main.js')}}"></script>

</body>

</html>

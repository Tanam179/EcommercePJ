<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Toro - Minimal eCommerce HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('../assets/images/favicon.png')}}">

    <!-- All CSS is here
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('../assets/css/vendor/bootstrap.min.css')}}">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('../assets/css/vendor/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('../assets/css/vendor/dlicon.css')}}">
    <!-- Others CSS -->
    <link rel="stylesheet" href="{{asset('../assets/css/plugins/owl-carousel.css')}}">
    <link rel="stylesheet" href="{{asset('../assets/css/plugins/slick.css')}}">
    <link rel="stylesheet" href="{{asset('../assets/css/plugins/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('../assets/css/plugins/jarallax.css')}}">
    <link rel="stylesheet" href="{{asset('../assets/css/plugins/easyzoom.css')}}">
    <link rel="stylesheet" href="{{asset('../assets/css/plugins/animate.css')}}">
    <link rel="stylesheet" href="{{asset('../assets/css/plugins/fullpage.css')}}">
    <link rel="stylesheet" href="{{asset('../assets/css/plugins/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('../assets/css/plugins/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('../assets/css/style.css')}}">

</head>

<body>

    <div class="main-wrapper">
        <header class="header-area transparent-bar section-padding-1">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo logo-width">
                            <a href="{{URL('/trang-chu')}}">
                                <img src="{{('/assets/images/logo/logo.png')}}"logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 d-flex justify-content-center position-static">
                        <div class="main-menu menu-lh-1 main-menu-padding-1">
                            <nav>
                                <ul>
                                    <li class="position-static"><a class="active" href="{{URL('/trang-chu')}}">Trang chủ</a>
                                        <!-- <div class="mega-menu-style-1">
                                            <div class="mega-menu-inner">
                                                <div class="demo-item mb-40">
                                                    <div class="demo-item-img">
                                                        <a href="index.html">
                                                            <img src="../assets/images/menu/h-1.jpg" alt="demo-img">
                                                            <span>View Demo</span>
                                                        </a>
                                                    </div>
                                                    <div class="demo-item-content">
                                                        <h4><a href="index.html">Home Demo 01</a></h4>
                                                    </div>
                                                </div>
                                                <div class="demo-item mb-40">
                                                    <div class="demo-item-img">
                                                        <a href="index-2.html">
                                                            <img src="../assets/images/menu/h-2.jpg" alt="demo-img">
                                                            <span>View Demo</span>
                                                        </a>
                                                    </div>
                                                    <div class="demo-item-content">
                                                        <h4><a href="index-2.html">Home Demo 02</a></h4>
                                                    </div>
                                                </div>
                                                <div class="demo-item mb-40">
                                                    <div class="demo-item-img">
                                                        <a href="index-3.html">
                                                            <img src="../assets/images/menu/h-3.jpg" alt="demo-img">
                                                            <span>View Demo</span>
                                                        </a>
                                                    </div>
                                                    <div class="demo-item-content">
                                                        <h4><a href="index-3.html">Home Demo 03</a></h4>
                                                    </div>
                                                </div>
                                                <div class="demo-item mb-40">
                                                    <div class="demo-item-img">
                                                        <a href="index-4.html">
                                                            <img src="../assets/images/menu/h-4.jpg" alt="demo-img">
                                                            <span>View Demo</span>
                                                        </a>
                                                    </div>
                                                    <div class="demo-item-content">
                                                        <h4><a href="index-4.html">Home Demo 04</a></h4>
                                                    </div>
                                                </div>
                                                <div class="demo-item mb-40">
                                                    <div class="demo-item-img">
                                                        <a href="index-5.html">
                                                            <img src="../assets/images/menu/h-5.jpg" alt="demo-img">
                                                            <span>View Demo</span>
                                                        </a>
                                                    </div>
                                                    <div class="demo-item-content">
                                                        <h4><a href="index-5.html">Home Demo 05</a></h4>
                                                    </div>
                                                </div>
                                                <div class="demo-item mb-40">
                                                    <div class="demo-item-img">
                                                        <a href="index-6.html">
                                                            <img src="../assets/images/menu/h-6.jpg" alt="demo-img">
                                                            <span>View Demo</span>
                                                        </a>
                                                    </div>
                                                    <div class="demo-item-content">
                                                        <h4><a href="index-6.html">Home Demo 06</a></h4>
                                                    </div>
                                                </div>
                                                <div class="demo-item mb-40">
                                                    <div class="demo-item-img">
                                                        <a href="index-7.html">
                                                            <img src="../assets/images/menu/h-7.jpg" alt="demo-img">
                                                            <span>View Demo</span>
                                                        </a>
                                                    </div>
                                                    <div class="demo-item-content">
                                                        <h4><a href="index-7.html">Home Demo 07</a></h4>
                                                    </div>
                                                </div>
                                                <div class="demo-item mb-40">
                                                    <div class="demo-item-img">
                                                        <a href="index-8.html">
                                                            <img src="../assets/images/menu/h-8.jpg" alt="demo-img">
                                                            <span>View Demo</span>
                                                        </a>
                                                    </div>
                                                    <div class="demo-item-content">
                                                        <h4><a href="index-8.html">Home Demo 08</a></h4>
                                                    </div>
                                                </div>
                                                <div class="demo-item mb-40">
                                                    <div class="demo-item-img">
                                                        <a href="index-9.html">
                                                            <img src="../assets/images/menu/h-9.jpg" alt="demo-img">
                                                            <span>View Demo</span>
                                                        </a>
                                                    </div>
                                                    <div class="demo-item-content">
                                                        <h4><a href="index-9.html">Home Demo 09</a></h4>
                                                    </div>
                                                </div>
                                                <div class="demo-item mb-40">
                                                    <div class="demo-item-img">
                                                        <a href="index-10.html">
                                                            <img src="../assets/images/menu/h-10.jpg" alt="demo-img">
                                                            <span>View Demo</span>
                                                        </a>
                                                    </div>
                                                    <div class="demo-item-content">
                                                        <h4><a href="index-10.html">Home Demo 10</a></h4>
                                                    </div>
                                                </div>
                                                <div class="demo-item mb-40">
                                                    <div class="demo-item-img">
                                                        <a href="index-11.html">
                                                            <img src="../assets/images/menu/h-11.jpg" alt="demo-img">
                                                            <span>View Demo</span>
                                                        </a>
                                                    </div>
                                                    <div class="demo-item-content">
                                                        <h4><a href="index-11.html">Home Demo 11</a></h4>
                                                    </div>
                                                </div>
                                                <div class="demo-item mb-40">
                                                    <div class="demo-item-img">
                                                        <a href="index-12.html">
                                                            <img src="../assets/images/menu/h-12.jpg" alt="demo-img">
                                                            <span>View Demo</span>
                                                        </a>
                                                    </div>
                                                    <div class="demo-item-content">
                                                        <h4><a href="index-12.html">Home Demo 12</a></h4>
                                                    </div>
                                                </div>
                                                <div class="demo-item mb-40">
                                                    <div class="demo-item-img">
                                                        <a href="index-13.html">
                                                            <img src="../assets/images/menu/h-13.jpg" alt="demo-img">
                                                            <span>View Demo</span>
                                                        </a>
                                                    </div>
                                                    <div class="demo-item-content">
                                                        <h4><a href="index-13.html">Home Demo 13</a></h4>
                                                    </div>
                                                </div>
                                                <div class="demo-item mb-40">
                                                    <div class="demo-item-img">
                                                        <a href="index-14.html">
                                                            <img src="../assets/images/menu/h-14.jpg" alt="demo-img">
                                                            <span>View Demo</span>
                                                        </a>
                                                    </div>
                                                    <div class="demo-item-content">
                                                        <h4><a href="index-14.html">Home Demo 14</a></h4>
                                                    </div>
                                                </div>
                                                <div class="demo-item mb-40">
                                                    <div class="demo-item-img">
                                                        <a href="index-15.html">
                                                            <img src="../assets/images/menu/h-15.jpg" alt="demo-img">
                                                            <span>View Demo</span>
                                                        </a>
                                                    </div>
                                                    <div class="demo-item-content">
                                                        <h4><a href="index-15.html">Home Demo 15</a></h4>
                                                    </div>
                                                </div>
                                                <div class="demo-item mb-40">
                                                    <div class="demo-item-img">
                                                        <a href="index-16.html">
                                                            <img src="../assets/images/menu/h-16.jpg" alt="demo-img">
                                                            <span>View Demo</span>
                                                        </a>
                                                    </div>
                                                    <div class="demo-item-content">
                                                        <h4><a href="index-16.html">Home Demo 16</a></h4>
                                                    </div>
                                                </div>
                                                <div class="demo-item mb-40">
                                                    <div class="demo-item-img">
                                                        <a href="index-17.html">
                                                            <img src="../assets/images/menu/h-17.jpg" alt="demo-img">
                                                            <span>View Demo</span>
                                                        </a>
                                                    </div>
                                                    <div class="demo-item-content">
                                                        <h4><a href="index-17.html">Home Demo 17</a></h4>
                                                    </div>
                                                </div>
                                                <div class="demo-item mb-40">
                                                    <div class="demo-item-img">
                                                        <a href="index-18.html">
                                                            <img src="../assets/images/menu/h-18.jpg" alt="demo-img">
                                                            <span>View Demo</span>
                                                        </a>
                                                    </div>
                                                    <div class="demo-item-content">
                                                        <h4><a href="index-18.html">Home Demo 18</a></h4>
                                                    </div>
                                                </div>
                                                <div class="demo-item mb-40">
                                                    <div class="demo-item-img">
                                                        <a href="index-19.html">
                                                            <img src="../assets/images/menu/h-19.jpg" alt="demo-img">
                                                            <span>View Demo</span>
                                                        </a>
                                                    </div>
                                                    <div class="demo-item-content">
                                                        <h4><a href="index-19.html">Home Demo 19</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                    </li>
                                    <li><a href="#">Pages <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub-menu-width">
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="contact-us.html">Contact Page</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                            <li><a href="faq.html">FAQ</a></li>
                                        </ul>
                                    </li>
                                    <!-- <li><a href="shop-fullwide.html">Shop <i class="fa fa-angle-down"></i></a>
                                        <ul class="mega-menu-style-2 mega-menu-width2 menu-negative-mrg1">
                                            <li class="mega-menu-sub-width20"><a class="menu-title" href="#">Shop Layout</a>
                                                <ul>
                                                    <li><a href="shop-fullwide.html">Shop Fullwidth</a></li>
                                                    <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                                                    <li><a href="shop-metro.html">Shop Metro Layout</a></li>
                                                    <li><a href="shop-3-col.html">Shop 03 Columns</a></li>
                                                    <li><a href="shop-2-col.html">Shop 02 Columns</a></li>
                                                    <li><a href="shop-collection-1.html">Shop Collection 01</a></li>
                                                    <li><a href="shop-collection-2.html">Shop Collection 02</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-sub-width22"><a class="menu-title" href="#">Product Layout</a>
                                                <ul>
                                                    <li><a href="product-details.html">Single 01</a></li>
                                                    <li><a href="product-details-2.html">Single 02</a></li>
                                                    <li><a href="product-details-group.html">Grouped</a></li>
                                                    <li><a href="product-details-sticky.html">Sticky Info</a></li>
                                                    <li><a href="product-details-configurable.html">Configurable</a></li>
                                                    <li><a href="product-details-thumbnail.html">Thumbnail</a></li>
                                                    <li><a href="product-details-video.html">Video</a></li>
                                                    <li><a href="product-details-affiliate.html">Affiliate</a></li>
                                                    <li><a href="product-details-sidebar.html">Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-sub-width20"><a class="menu-title" href="#">Shop Pages</a>
                                                <ul>
                                                    <li><a href="my-account.html">My Account</a></li>
                                                    <li><a href="checkout.html">Check Out</a></li>
                                                    <li><a href="cart.html">Shopping Cart</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                    <li><a href="order-tracking.html">Order Tracking</a></li>
                                                    <li><a href="compare.html">Compare</a></li>
                                                    <li><a href="login-register.html">login / register</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-sub-width37">
                                                <div class="banner-menu-content-wrap default-overlay">
                                                    <a href="product-details.html"><img src="../assets/images/menu/banner-header.jpg" alt="banner"></a>
                                                    <div class="banner-menu-content">
                                                        <h2>Bikini <br>Collections</h2>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li> -->
                                    <!-- <li><a href="shop-collection-1.html">Collections <i class="fa fa-angle-down"></i> </a>
                                        <ul class="sub-menu-width">
                                            <li><a href="shop-collection-1.html">Shop Collection 01</a></li>
                                            <li><a href="shop-collection-2.html">Shop Collection 02</a></li>
                                            <li><a href="shop-metro.html">Shop Metro Layout</a></li>
                                        </ul>
                                    </li> -->
                                    <li><a href="#">Tin tức </a>
                                        {{-- <ul class="sub-menu-width">
                                            <li><a href="blog.html">Blog Style 01</a></li>
                                            <li><a href="blog-2.html">Blog Style 02</a></li>
                                            <li><a href="blog-3.html">Blog Style 03</a></li>
                                            <li><a href="#">Single Posts <i class="fa fa-angle-right"></i></a>
                                                <ul class="lavel-menu">
                                                    <li><a href="blog-details.html">Single Post Style 01</a></li>
                                                    <li><a href="blog-details-2.html">Single Post Style 02</a></li>
                                                </ul>
                                            </li>
                                        </ul> --}}
                                    </li>
                                    <li><a href="shop-instagram.html">Instagram Shop </a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2">
                        <div class="header-right-wrap header-right-flex">
                            <!-- <div class="same-style header-wishlist">
                                <a href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                            </div> -->
                            <div class="same-style cart-wrap">
                                <a href="#" class="cart-active">
                                    <i class="dlicon shopping_bag-20"></i>
                                    <span class="count-style">02</span>
                                </a>
                            </div>
                            <div class="same-style header-search">
                                <a class="search-active" href="#">
                                    <i class="dlicon ui-1_zoom"></i>
                                </a>
                            </div>
                            <div class="same-style header-off-canvas">
                                <a class="header-aside-button" href="#">
                                    <i class="dlicon ui-3_menu-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="header-small-mobile section-padding-1">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="mobile-logo logo-width">
                            <a href="index.html">
                                <img alt="" src="{{asset('../assets/images/logo/logo.png')}}">
                            </a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mobile-header-right-wrap">
                            <div class="header-right-wrap header-right-flex">
                                <div class="same-style cart-wrap">
                                    <a href="#" class="cart-active">
                                        <i class="dlicon shopping_bag-20"></i>
                                        <span class="count-style">02</span>
                                    </a>
                                </div>
                                <div class="same-style header-off-canvas">
                                    <a class="header-aside-button" href="#">
                                        <i class="dlicon ui-3_menu-left"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- search start -->
        <div class="search-content-wrap main-search-active">
            <a class="search-close"><i class="dlicon ui-1_simple-remove"></i></a>
            <div class="search-content">
                <p>Start typing and press Enter to search</p>
                <form class="search-form" action="#">
                    <input type="text" placeholder="Search">
                    <button class="button-search"><i class="dlicon ui-1_zoom"></i></button>
                </form>
            </div>
        </div>
        <!-- mini cart start -->
        <div class="sidebar-cart-active">
            <div class="sidebar-cart-all">
                <a class="cart-close" href="#"><i class="dlicon ui-1_simple-remove"></i></a>
                <div class="cart-content">
                    <h3>Shopping Cart</h3>
                    <ul>
                        <li class="single-product-cart">
                            <div class="cart-img">
                                <a href="#"><img src="{{asset('../assets/images/cart/cart-1.jpg')}}" alt=""></a>
                            </div>
                            <div class="cart-title">
                                <h4><a href="#">Bejewelled velvet sandals</a></h4>
                                <span> 1 × $49.00	</span>
                            </div>
                            <div class="cart-delete">
                                <a href="#">×</a>
                            </div>
                        </li>
                        <li class="single-product-cart">
                            <div class="cart-img">
                                <a href="#"><img src="{{asset('../assets/images/cart/cart-2.jpg')}}" alt=""></a>
                            </div>
                            <div class="cart-title">
                                <h4><a href="#">Contrast faux fur jacket</a></h4>
                                <span> 1 × $49.00	</span>
                            </div>
                            <div class="cart-delete">
                                <a href="#">×</a>
                            </div>
                        </li>
                    </ul>
                    <div class="cart-total">
                        <h4>Subtotal: <span>$170.00</span></h4>
                    </div>
                    <div class="cart-checkout-btn">
                        <a class="btn-hover cart-btn-style" href="cart.html">view cart</a>
                        <a class="no-mrg btn-hover cart-btn-style" href="checkout.html">checkout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- aside start -->
        <div class="header-aside-active">
            <div class="header-aside-wrap">
                <a class="aside-close"><i class="dlicon ui-1_simple-remove"></i></a>
                <div class="header-aside-content">
                    <div class="mobile-menu-area">
                        <div class="mobile-search">
                            <form class="search-form" action="#">
                                <input type="text" placeholder="Search entire store…">
                                <button class="button-search"><i class="dlicon ui-1_zoom"></i></button>
                            </form>
                        </div>
                        <div class="mobile-menu-wrap">
                            <!-- mobile menu start -->
                            <div class="mobile-navigation">
                                <!-- mobile menu navigation start -->
                                <nav>
                                    <ul class="mobile-menu">
                                        <li class="menu-item-has-children"><a href="index.html">Home</a>
                                            <ul class="dropdown">
                                                <li class="menu-item-has-children"><a href="#">Demo Group 01</a>
                                                    <ul class="dropdown">
                                                        <li><a href="index.html">Home 01</a></li>
                                                        <li><a href="index-2.html">Home 02</a></li>
                                                        <li><a href="index-3.html">Home 03</a></li>
                                                        <li><a href="index-4.html">Home 04</a></li>
                                                        <li><a href="index-5.html">Home 05</a></li>
                                                        <li><a href="index-6.html">Home 06</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"><a href="#">Demo Group 02</a>
                                                    <ul class="dropdown">
                                                        <li><a href="index-7.html">Home 07</a></li>
                                                        <li><a href="index-8.html">Home 08</a></li>
                                                        <li><a href="index-9.html">Home 09</a></li>
                                                        <li><a href="index-10.html">Home 10</a></li>
                                                        <li><a href="index-11.html">Home 11</a></li>
                                                        <li><a href="index-12.html">Home 12</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"><a href="#">Demo Group 03</a>
                                                    <ul class="dropdown">
                                                        <li><a href="index-13.html">Home 13</a></li>
                                                        <li><a href="index-14.html">Home 14</a></li>
                                                        <li><a href="index-15.html">Home 15</a></li>
                                                        <li><a href="index-16.html">Home 16</a></li>
                                                        <li><a href="index-17.html">Home 17</a></li>
                                                        <li><a href="index-18.html">Home 18</a></li>
                                                        <li><a href="index-19.html">Home 19</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">Pages</a>
                                            <ul class="dropdown">
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="contact-us.html">Contact Page</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                                <li><a href="comming-soon.html">Comming Soon 01</a></li>
                                                <li><a href="comming-soon-2.html">Comming Soon 02</a></li>
                                                <li><a href="faq.html">FAQ</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children "><a href="shop-fullwide.html">shop</a>
                                            <ul class="dropdown">
                                                <li class="menu-item-has-children"><a href="#">Shop Layout</a>
                                                    <ul class="dropdown">
                                                        <li><a href="shop-fullwide.html">Shop Fullwidth</a></li>
                                                        <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                                                        <li><a href="shop-metro.html">Shop Metro Layout</a></li>
                                                        <li><a href="shop-3-col.html">Shop 03 Columns</a></li>
                                                        <li><a href="shop-2-col.html">Shop 02 Columns</a></li>
                                                        <li><a href="shop-collection-1.html">Shop Collection 01</a></li>
                                                        <li><a href="shop-collection-2.html">Shop Collection 02</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"><a href="#">Product Layout</a>
                                                    <ul class="dropdown">
                                                        <li><a href="product-details.html">Single 01</a></li>
                                                        <li><a href="product-details-2.html">Single 02</a></li>
                                                        <li><a href="product-details-group.html">Grouped</a></li>
                                                        <li><a href="product-details-sticky.html">Sticky Info</a></li>
                                                        <li><a href="product-details-configurable.html">Configurable</a></li>
                                                        <li><a href="product-details-thumbnail.html">Thumbnail</a></li>
                                                        <li><a href="product-details-video.html">Video</a></li>
                                                        <li><a href="product-details-affiliate.html">Affiliate</a></li>
                                                        <li><a href="product-details-sidebar.html">Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"><a href="#">Shop Pages </a>
                                                    <ul class="dropdown">
                                                        <li><a href="my-account.html">My Account</a></li>
                                                        <li><a href="checkout.html">Check Out</a></li>
                                                        <li><a href="cart.html">Shopping Cart</a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                        <li><a href="order-tracking.html">Order Tracking</a></li>
                                                        <li><a href="compare.html">Compare</a></li>
                                                        <li><a href="login-register.html">login / register</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children "><a href="shop-collection-1.html">Collection</a>
                                            <ul class="dropdown">
                                                <li><a href="shop-collection-1.html">Shop Collection 01</a></li>
                                                <li><a href="shop-collection-2.html">Shop Collection 02</a></li>
                                                <li><a href="shop-metro.html">Shop Metro Layout</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children "><a href="blog.html">Blog</a>
                                            <ul class="dropdown">
                                                <li><a href="blog.html">Blog Style 01</a></li>
                                                <li><a href="blog-2.html">Blog Style 02</a></li>
                                                <li><a href="blog-3.html">Blog Style 03</a></li>
                                                <li><a href="blog-details.html">Single Post Style 01</a></li>
                                                <li><a href="blog-details-2.html">Single Post Style 02</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop-instagram.html">Instagram Shop </a></li>
                                    </ul>
                                </nav>
                                <!-- mobile menu navigation end -->
                            </div>
                            <!-- mobile menu end -->
                        </div>
                        <div class="mobile-curr-lang-wrap">
                            <div class="single-mobile-curr-lang">
                                <a class="mobile-language-active" href="#">Language <i class="fa fa-angle-down"></i></a>
                                <div class="lang-curr-dropdown lang-dropdown-active">
                                    <ul>
                                        <li><a href="#">English (US)</a></li>
                                        <li><a href="#">English (UK)</a></li>
                                        <li><a href="#">Spanish</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-mobile-curr-lang">
                                <a class="mobile-currency-active" href="#">Currency <i class="fa fa-angle-down"></i></a>
                                <div class="lang-curr-dropdown curr-dropdown-active">
                                    <ul>
                                        <li><a href="#">USD</a></li>
                                        <li><a href="#">EUR</a></li>
                                        <li><a href="#">Real</a></li>
                                        <li><a href="#">BDT</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-mobile-curr-lang">
                                <a class="mobile-account-active" href="#">My Account <i class="fa fa-angle-down"></i></a>
                                <div class="lang-curr-dropdown account-dropdown-active">
                                    <ul>
                                        <li><a href="#">Login</a></li>
                                        <li><a href="#">Creat Account</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-aside-menu">
                        <nav>
                            <ul>
                                <li><a href="#">About Toro</a></li>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Collection</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">New Look</a></li>
                            </ul>
                        </nav>
                    </div>
                    <img src="{{asset('../assets/images/icon-img/payments.png')}}" alt="payment">
                    <p>Pellentesque mollis nec orci id tincidunt. Sed mollis risus eu nisi aliquet, sit amet fermentum justo dapibus.</p>
                    <div class="aside-contact-info">
                        <ul>
                            <li><i class="dlicon ui-2_time-clock"></i>Monday - Friday: 9:00 - 19:00</li>
                            <li><i class="dlicon ui-1_email-84"></i>Info@la-studioweb.com</li>
                            <li><i class="dlicon tech-2_rotate"></i>(+55) 254. 254. 254</li>
                            <li><i class="dlicon ui-1_home-minimal"></i>Helios Tower 75 Tam Trinh Hoang - Ha Noi - Viet Nam</li>
                        </ul>
                    </div>
                    <div class="social-icon-style mb-25">
                        <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                        <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                        <a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                        <a class="behance" href="#"><i class="fa fa-behance"></i></a>
                    </div>
                    <div class="copyright">
                        <p>© 2021 <a href="https://hasthemes.com/">Toro.</a> All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>

        
        @yield('content')
        
        
        
        {{-- <footer class="footer-area bg-black section-padding-1">
            <div class="container-fluid">
                <div class="footer-top pt-95 pb-80">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="logo logo-res-center">
                                <a href="index.html">
                                    <img src="../assets/images/logo/logo-white.png" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="footer-menu text-center">
                                <nav>
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Help Center</a></li>
                                        <li><a href="#">Our Team</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">The Blog</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="social-icon-style-2 social-icon-right">
                                <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                <a class="youtube" href="#"><i class="fa fa-youtube"></i></a>
                                <a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-botoom pb-15">
                    <div class="row">
                        <div class="col-12">
                            <div class="copyright text-center">
                                <p>© 2021 <a href="https://hasthemes.com/">Toro.</a> All rights reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer> --}}
        <!-- <div class="support-lists">
            <ul>
                <li><a href="#"><i class="dlicon ui-3_chat-46"></i></a></li>
                <li><a href="#"><i class=" dlicon ui-3_phone"></i></a></li>
                <li><a href="#"><i class="dlicon ui-1_email-85"></i></a></li>
            </ul>
        </div>
        <div class="view-demo-area">
            <a class="view-demo-btn-active" href="#">More Demos</a>
            <div class="view-demo-aside-active">
                <div class="view-demo-wrap">
                    <div class="view-demo-tab-list nav">
                        <a class="active" href="#view-demo-1" data-bs-toggle="tab">
                            Demo Group 01
                        </a>
                        <a href="#view-demo-2" data-bs-toggle="tab">
                            Demo Group 02
                        </a>
                        <a href="#view-demo-3" data-bs-toggle="tab">
                            Demo Group 03
                        </a>
                    </div>
                    <div class="tab-content jump-2">
                        <div id="view-demo-1" class="tab-pane active">
                            <div class="row">
                                <div class="col-md-6 col-12 col-sm-6">
                                    <div class="demo-item mb-40">
                                        <div class="demo-item-img">
                                            <a href="index.html">
                                                <img src="../assets/images/demo-img/h-1.jpg" alt="demo-img">
                                                <span>View Demo</span>
                                            </a>
                                        </div>
                                        <div class="demo-item-content">
                                            <h4><a href="index.html">Home Demo 01</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 col-sm-6">
                                    <div class="demo-item mb-40">
                                        <div class="demo-item-img">
                                            <a href="index-2.html">
                                                <img src="../assets/images/demo-img/h-2.jpg" alt="demo-img">
                                                <span>View Demo</span>
                                            </a>
                                        </div>
                                        <div class="demo-item-content">
                                            <h4><a href="index-2.html">Home Demo 02</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 col-sm-6">
                                    <div class="demo-item mb-40">
                                        <div class="demo-item-img">
                                            <a href="index-3.html">
                                                <img src="../assets/images/demo-img/h-3.jpg" alt="demo-img">
                                                <span>View Demo</span>
                                            </a>
                                        </div>
                                        <div class="demo-item-content">
                                            <h4><a href="index-3.html">Home Demo 03</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 col-sm-6">
                                    <div class="demo-item mb-40">
                                        <div class="demo-item-img">
                                            <a href="index-4.html">
                                                <img src="../assets/images/demo-img/h-4.jpg" alt="demo-img">
                                                <span>View Demo</span>
                                            </a>
                                        </div>
                                        <div class="demo-item-content">
                                            <h4><a href="index-4.html">Home Demo 04</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 col-sm-6">
                                    <div class="demo-item mb-40">
                                        <div class="demo-item-img">
                                            <a href="index-5.html">
                                                <img src="../assets/images/demo-img/h-5.jpg" alt="demo-img">
                                                <span>View Demo</span>
                                            </a>
                                        </div>
                                        <div class="demo-item-content">
                                            <h4><a href="index-5.html">Home Demo 05</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 col-sm-6">
                                    <div class="demo-item mb-40">
                                        <div class="demo-item-img">
                                            <a href="index-6.html">
                                                <img src="../assets/images/demo-img/h-6.jpg" alt="demo-img">
                                                <span>View Demo</span>
                                            </a>
                                        </div>
                                        <div class="demo-item-content">
                                            <h4><a href="index-6.html">Home Demo 06</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 col-sm-6">
                                    <div class="demo-item mb-40">
                                        <div class="demo-item-img">
                                            <a href="index-7.html">
                                                <img src="../assets/images/demo-img/h-7.jpg" alt="demo-img">
                                                <span>View Demo</span>
                                            </a>
                                        </div>
                                        <div class="demo-item-content">
                                            <h4><a href="index-7.html">Home Demo 07</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 col-sm-6">
                                    <div class="demo-item mb-40">
                                        <div class="demo-item-img">
                                            <a href="index-8.html">
                                                <img src="../assets/images/demo-img/h-8.jpg" alt="demo-img">
                                                <span>View Demo</span>
                                            </a>
                                        </div>
                                        <div class="demo-item-content">
                                            <h4><a href="index-8.html">Home Demo 08</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="discover-more-btn">
                                <a href="#">Discover More</a>
                            </div>
                        </div>
                        <div id="view-demo-2" class="tab-pane">
                            <div class="row">
                                <div class="col-md-6 col-12 col-sm-6">
                                    <div class="demo-item mb-40">
                                        <div class="demo-item-img">
                                            <a href="index-9.html">
                                                <img src="../assets/images/demo-img/h-9.jpg" alt="demo-img">
                                                <span>View Demo</span>
                                            </a>
                                        </div>
                                        <div class="demo-item-content">
                                            <h4><a href="index-9.html">Home Demo 09</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 col-sm-6">
                                    <div class="demo-item mb-40">
                                        <div class="demo-item-img">
                                            <a href="index-10.html">
                                                <img src="../assets/images/demo-img/h-10.jpg" alt="demo-img">
                                                <span>View Demo</span>
                                            </a>
                                        </div>
                                        <div class="demo-item-content">
                                            <h4><a href="index-10.html">Home Demo 10</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 col-sm-6">
                                    <div class="demo-item mb-40">
                                        <div class="demo-item-img">
                                            <a href="index-11.html">
                                                <img src="../assets/images/demo-img/h-11.jpg" alt="demo-img">
                                                <span>View Demo</span>
                                            </a>
                                        </div>
                                        <div class="demo-item-content">
                                            <h4><a href="index-11.html">Home Demo 11</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 col-sm-6">
                                    <div class="demo-item mb-40">
                                        <div class="demo-item-img">
                                            <a href="index-12.html">
                                                <img src="../assets/images/demo-img/h-12.jpg" alt="demo-img">
                                                <span>View Demo</span>
                                            </a>
                                        </div>
                                        <div class="demo-item-content">
                                            <h4><a href="index-12.html">Home Demo 12</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 col-sm-6">
                                    <div class="demo-item mb-40">
                                        <div class="demo-item-img">
                                            <a href="index-13.html">
                                                <img src="../assets/images/demo-img/h-13.jpg" alt="demo-img">
                                                <span>View Demo</span>
                                            </a>
                                        </div>
                                        <div class="demo-item-content">
                                            <h4><a href="index-13.html">Home Demo 13</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 col-sm-6">
                                    <div class="demo-item mb-40">
                                        <div class="demo-item-img">
                                            <a href="index-14.html">
                                                <img src="../assets/images/demo-img/h-14.jpg" alt="demo-img">
                                                <span>View Demo</span>
                                            </a>
                                        </div>
                                        <div class="demo-item-content">
                                            <h4><a href="index-14.html">Home Demo 14</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 col-sm-6">
                                    <div class="demo-item mb-40">
                                        <div class="demo-item-img">
                                            <a href="index-15.html">
                                                <img src="../assets/images/demo-img/h-15.jpg" alt="demo-img">
                                                <span>View Demo</span>
                                            </a>
                                        </div>
                                        <div class="demo-item-content">
                                            <h4><a href="index-15.html">Home Demo 15</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 col-sm-6">
                                    <div class="demo-item mb-40">
                                        <div class="demo-item-img">
                                            <a href="index-16.html">
                                                <img src="../assets/images/demo-img/h-16.jpg" alt="demo-img">
                                                <span>View Demo</span>
                                            </a>
                                        </div>
                                        <div class="demo-item-content">
                                            <h4><a href="index-16.html">Home Demo 16</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="discover-more-btn">
                                <a href="#">Discover More</a>
                            </div>
                        </div>
                        <div id="view-demo-3" class="tab-pane">
                            <div class="row">
                                <div class="col-md-6 col-12 col-sm-6">
                                    <div class="demo-item mb-40">
                                        <div class="demo-item-img">
                                            <a href="index-17.html">
                                                <img src="../assets/images/demo-img/h-17.jpg" alt="demo-img">
                                                <span>View Demo</span>
                                            </a>
                                        </div>
                                        <div class="demo-item-content">
                                            <h4><a href="index-17.html">Home Demo 17</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 col-sm-6">
                                    <div class="demo-item mb-40">
                                        <div class="demo-item-img">
                                            <a href="index-18.html">
                                                <img src="../assets/images/demo-img/h-18.jpg" alt="demo-img">
                                                <span>View Demo</span>
                                            </a>
                                        </div>
                                        <div class="demo-item-content">
                                            <h4><a href="index-18.html">Home Demo 18</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 col-sm-6">
                                    <div class="demo-item mb-40">
                                        <div class="demo-item-img">
                                            <a href="index-19.html">
                                                <img src="../assets/images/demo-img/h-19.jpg" alt="demo-img">
                                                <span>View Demo</span>
                                            </a>
                                        </div>
                                        <div class="demo-item-content">
                                            <h4><a href="index-19.html">Home Demo 19</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="discover-more-btn">
                                <a href="#">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span class="dlicon ui-1_simple-remove" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-0">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="quickview-slider-active owl-carousel">
                                    <a class="img-popup" href="{{asset('../assets/images/product/quickview-1.jpg')}}"><img src="{{asset('../assets/images/product/quickview-1.jpg')}}" alt=""><span>sold uot</span></a>
                                    <a class="img-popup" href="{{asset('../assets/images/product/quickview-2.jpg')}}"><img src="../assets/images/product/quickview-2.jpg" alt=""><span>sold uot</span></a>
                                </div>
                                <!-- Thumbnail Large Image End -->
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="product-details-content">
                                    <div class="pro-dec-next-prev">
                                        <a class="prev" href="#"><i class="dlicon arrows-1_tail-left"></i></a>
                                        <a class="next" href="#"><i class="dlicon arrows-1_tail-right"></i></a>
                                    </div>
                                    <h2 class="uppercase">Quilted parka with hood</h2>
                                    <h3>$49.00</h3>
                                    <div class="product-details-peragraph">
                                        <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam libero ac turpis pharetra, in vehicula scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.</p>
                                    </div>
                                    <div class="product-details-action-wrap">
                                        <div class="product-details-quality">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                            </div>
                                        </div>
                                        <div class="product-details-cart">
                                            <a title="Add to cart" href="#">Add to cart</a>
                                        </div>
                                        <div class="product-details-wishlist">
                                            <a title="Add to wishlist" href="#"><i class="fa fa-heart"></i></a>
                                        </div>
                                        <div class="product-details-compare">
                                            <a title="Add to compare" href="#"><i class="dlicon arrows-4_compare"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-details-info">
                                        <a href="#"><i class="dlicon location_pin"></i>Store availability</a>
                                        <a href="#"><i class="dlicon envir_car"></i>Delivery and return</a>
                                        <a href="#"><i class="dlicon design_measure-17"></i>Size Guide</a>
                                    </div>
                                    <div class="product-details-meta">
                                        <span>SKU: REF. LA-140</span>
                                        <span>Categories: <a href="#">Fashions</a>, <a href="#">Main 01</a>, <a href="#">Main 02</a></span>
                                        <span>Tags: <a href="#">Blazer</a>, <a href="#">chair</a>, <a href="#">Coat</a>, <a href="#">dress</a>, <a href="#">light</a>, <a href="#">Living</a>, <a href="#">Main 01</a></span>
                                    </div>
                                    <div class="social-icon-style-3">
                                        <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                        <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                        <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                        <a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
                                        <a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end -->
    </div>

    <!-- All JS is here
============================================ -->

    <!-- Modernizer JS -->
    <script src="{{asset('../assets/js/vendor/modernizr-3.11.7.min.js')}}"></script>
    <!-- jquery -->
    <script src="{{asset('../assets/js/vendor/jquery-v3.6.0.min.js')}}"></script>
    <!-- Popper JS -->
    <script src="{{asset('../assets/js/vendor/popper.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('../assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('../assets/js/plugins/owl-carousel.js')}}"></script>
    <script src="{{asset('../assets/js/plugins/slick.js')}}"></script>
    <script src="{{asset('../assets/js/plugins/jarallax.min.js')}}"></script>
    <script src="{{asset('../assets/js/plugins/countdown.js')}}"></script>
    <script src="{{asset('../assets/js/plugins/magnific-popup.js')}}"></script>
    <script src="{{asset('../assets/js/plugins/instafeed.js')}}"></script>
    <script src="{{asset('../assets/js/plugins/tilt.js')}}"></script>
    <script src="{{asset('../assets/js/plugins/images-loaded.js')}}"></script>
    <script src="{{asset('../assets/js/plugins/isotope.js')}}"></script>
    <script src="{{asset('../assets/js/plugins/scrolloverflow-fullpage.js')}}"></script>
    <script src="{{asset('../assets/js/plugins/fullpage.js')}}"></script>
    <script src="{{asset('../assets/js/plugins/jquery-ui.js')}}"></script>
    <script src="{{asset('../assets/js/plugins/jquery-ui-touch-punch.js')}}"></script>
    <script src="{{asset('../assets/js/plugins/easyzoom.js')}}"></script>
    <script src="{{asset('../assets/js/plugins/resizesensor.js')}}"></script>
    <script src="{{asset('../assets/js/plugins/sticky-sidebar.js')}}"></script>
    <script src="{{asset('../assets/js/plugins/scrollup.js')}}"></script>
    <script src="{{asset('../assets/js/plugins/select2.min.js')}}"></script>
    <script src="{{asset('../assets/js/plugins/cookie.js')}}"></script>
    <script src="{{asset('../assets/js/plugins/bpopup.js')}}"></script>
    <script src="{{asset('../assets/js/plugins/wow.js')}}"></script>
    <script src="{{asset('../assets/js/plugins/ajax-mail.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('../assets/js/main.js')}}"></script>

</body>
</html>

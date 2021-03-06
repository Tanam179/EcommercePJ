@extends('welcome')
@section('content')
<div class="breadcrumb-area border-top-3 section-padding-1 breadcrumb-ptb-3">
    <div class="container-fluid">
        <div class="breadcrumb-content breadcrumb-font-inc">
            {{-- <ul>
                <li>
                    <a href="index.html">Home 01 </a>
                </li>
                <li><span> > </span></li>
                <li>
                    <a href="index.html">Shop</a>
                </li>
                <li><span> > </span></li>
                <li>
                    <a href="index.html">Fashion sale off</a>
                </li>
                <li><span> > </span></li>
                <li class="active"> Sleeve Button Cowl Neck </li>
            </ul> --}}
        </div>
    </div>
</div>
<div class="product-details-area section-padding-1 pb-90" style="margin-top: 50px">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="product-details-tab">
                    <div class="product-dec-right pro-dec-big-img-slider">
                        <div class="easyzoom-style">
                            <div class="easyzoom easyzoom--overlay">
                                <a href="/upload/products/{{$product_detail->img}}">
                                    <img src="/upload/products/{{$product_detail->img}}" alt="">
                                </a>
                            </div>
                            <a class="easyzoom-pop-up img-popup" href="/upload/products/{{$product_detail->img}}"><i class="dlicon ui-1_zoom-in "></i></a>
                        </div>
                        <div class="easyzoom-style">
                            <div class="easyzoom easyzoom--overlay">
                                <a href="../assets/images/product-details/b-large-2.jpg">
                                    <img src="../assets/images/product-details/large-2.jpg" alt="">
                                </a>
                            </div>
                            <a class="easyzoom-pop-up img-popup" href="../assets/images/product-details/b-large-2.jpg"><i class="dlicon ui-1_zoom-in "></i></a>
                        </div>
                        <div class="easyzoom-style">
                            <div class="easyzoom easyzoom--overlay">
                                <a href="../assets/images/product-details/b-large-3.jpg">
                                    <img src="../assets/images/product-details/large-3.jpg" alt="">
                                </a>
                            </div>
                            <a class="easyzoom-pop-up img-popup" href="../assets/images/product-details/b-large-3.jpg"><i class="dlicon ui-1_zoom-in "></i></a>
                        </div>
                        <div class="easyzoom-style">
                            <div class="easyzoom easyzoom--overlay">
                                <a href="../assets/images/product-details/b-large-4.jpg">
                                    <img src="../assets/images/product-details/large-4.jpg" alt="">
                                </a>
                            </div>
                            <a class="easyzoom-pop-up img-popup" href="../assets/images/product-details/b-large-4.jpg"><i class="dlicon ui-1_zoom-in "></i></a>
                        </div>
                        <div class="easyzoom-style">
                            <div class="easyzoom easyzoom--overlay">
                                <a href="../assets/images/product-details/b-large-2.jpg">
                                    <img src="../assets/images/product-details/large-2.jpg" alt="">
                                </a>
                            </div>
                            <a class="easyzoom-pop-up img-popup" href="../assets/images/product-details/b-large-2.jpg"><i class="dlicon ui-1_zoom-in "></i></a>
                        </div>
                    </div>
                    <div class="product-dec-slider product-dec-left">
                        <div class="product-dec-small active">
                            <img src="../assets/images/product-details/small-1.jpg" alt="">
                        </div>
                        <div class="product-dec-small">
                            <img src="../assets/images/product-details/small-2.jpg" alt="">
                        </div>
                        <div class="product-dec-small">
                            <img src="../assets/images/product-details/small-3.jpg" alt="">
                        </div>
                        <div class="product-dec-small">
                            <img src="../assets/images/product-details/small-4.jpg" alt="">
                        </div>
                        <div class="product-dec-small">
                            <img src="../assets/images/product-details/small-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="product-details-col-72">
                        <div class="product-details-content p-dec-content-edit">
                            {{-- <div class="pro-dec-next-prev">
                                <a class="prev" href="#"><i class="dlicon arrows-1_tail-left"></i></a>
                                <a class="next" href="#"><i class="dlicon arrows-1_tail-right"></i></a>
                            </div> --}}
                            <h2 class="uppercase">{{$product_detail->name}}</h2>
                            <div class="product-details-ratting-wrap">
                                <div class="product-details-ratting">
                                    <i class="yellow fa fa-star"></i>
                                    <i class="yellow fa fa-star"></i>
                                    <i class="yellow fa fa-star"></i>
                                    <i class="yellow fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                {{-- <a href="#"> (1 customer review)</a> --}}
                            </div>
                            {{-- <h3>$49.00</h3> --}}
                            @if($product_detail->sale == 1)
                                <span style="display: inline-block; margin-top: 32px; margin-bottom: 32px ;font-size: 22px; margin-right: 15px; text-decoration: line-through" class="old-price">{{number_format($product_detail->price , 0 , ',' , ',' )}} VN??</span>
                                <span style="display: inline-block; margin-top: 32px; margin-bottom: 32px; font-size: 22px" class="new-price">{{number_format($product_detail->price -  ($product_detail->price * $product_detail->sale_percent / 100))}}VN??</span>
                                @else
                                {{-- <span style="font-size: 22px " class="old-price"></span> --}}
                                <span style="display: inline-block; margin-top: 32px; margin-bottom: 32px; font-size: 22px" class="new-price">{{number_format($product_detail->price , 0 , ',' , ',' )}} VN??</span>
                                @endif
                            {{-- <div class="product-details-peragraph">
                                <ul>
                                    <li>Composition: 50% cotton,45% polyester, 5% polyamide.</li>
                                    <li>Filling: 100% polyester.</li>
                                    <li>Hood fur: 64% acrylic,23% modacrylic,13% polyester</li>
                                </ul>
                            </div> --}}
                            <div class="product-details-action-wrap">
                                <div class="product-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" readonly="readonly">
                                    </div>
                                </div>
                                <div class="product-details-cart" style="margin-left: 50px">
                                    <a title="Add to cart" href="#">Add to cart</a>
                                </div>
                                {{-- <div class="product-details-wishlist">
                                    <a title="Add to wishlist" href="#"><i class="fa fa-heart"></i></a>
                                </div>
                                <div class="product-details-compare">
                                    <a title="Add to compare" href="#"><i class="dlicon arrows-4_compare"></i></a>
                                </div> --}}
                            </div>
                            <div class="product-details-info">
                                <a href="#"><i class="dlicon location_pin"></i>Store availability</a>
                                <a href="#"><i class="dlicon envir_car"></i>Delivery and return</a>
                                <a href="#"><i class="dlicon design_measure-17"></i>Size Guide</a>
                            </div>
                            <div class="product-details-meta">
                                {{-- <span>SKU: REF. LA-140</span> --}}
                                <span>Categories: {{$product_detail->cate->name}}</span>
                                <span>Tags: <a href="#">Blazer</a>, <a href="#">chair</a>, <a href="#">Coat</a>, <a href="#">dress</a>, <a href="#">light</a>, <a href="#">Living</a>, <a href="#">Main 01</a></span>
                            </div>
                            {{-- <div class="social-icon-style-3">
                                <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                <a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
                                <a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                            </div> --}}
                        </div>
                    </div>
                    <div class="product-details-col-28">
                        <div class="pro-details-sidebar-active slider-nav-style-3 owl-carousel">
                            <div class="single-pro-details-sidebar">
                                <a href="#"><img src="../assets/images/product-details/pro-details-sidebar-1.jpg" alt=""></a>
                                <div class="pro-details-sidebar-content">
                                    <h4><a href="#">NEW <br>LONDON</a></h4>
                                    <p>Off 20% for all</p>
                                </div>
                            </div>
                            <div class="single-pro-details-sidebar">
                                <a href="#"><img src="../assets/images/product-details/pro-details-sidebar-2.jpg" alt=""></a>
                                <div class="pro-details-sidebar-content">
                                    <h4><a href="#">NEW <br>LONDON</a></h4>
                                    <p>Off 20% for all</p>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-subscribe-wrap">
                            <div class="sidebar-subscribe-content text-center">
                                <i class="dlicon ui-1_email-84"></i>
                                <h5>Join Our Newsletter</h5>
                                <p>Sale up to 20% off for your next purchase in this month!</p>
                            </div>
                            <div id="mc_embed_signup" class="sidebar-subscribe-form">
                                <form id="mc-embedded-subscribe-form" class="validate subscribe-form-style" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="https://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                    <div id="mc_embed_signup_scroll" class="mc-form">
                                        <input class="email" type="email" required="" placeholder=" email address???" name="EMAIL" value="">
                                        <div class="mc-news" aria-hidden="true">
                                            <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                        </div>
                                        <div class="clear">
                                            <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Subscribe">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="description-review-area section-padding-7 pb-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="description-review-wrapper">
                    <div class="description-review-topbar nav">
                        <a class="active" data-bs-toggle="tab" href="#des-details1">Description</a>
                        <a data-bs-toggle="tab" href="#des-details2">Additional information</a>
                        <a data-bs-toggle="tab" href="#des-details3">Reviews (1)</a>
                        <a data-bs-toggle="tab" href="#des-details4"> Brands</a>
                        <a data-bs-toggle="tab" href="#des-details5">Shipping & Delivery</a>
                    </div>
                    <div class="tab-content description-review-bottom">
                        <div id="des-details1" class="tab-pane active">
                            <div class="product-description-wrapper">
                                <div class="row">
                                    {{-- <div class="product-dec-col-38">
                                        <div class="pro-details-banner">
                                            <a class="video-popup" href="https://player.vimeo.com/video/181061053?autoplay=1&amp;byline=0&amp;collections=0"><img src="../assets/images/product-details/pro-details-banner.jpg" alt=""></a>
                                        </div>
                                    </div> --}}
                                    <div class="product-dec-col-100">
                                        <div class="product-dec-content">
                                            <p>{{$product_detail->desc}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="des-details2" class="tab-pane">
                            <div class="additional-info">
                                <ul>
                                    <li><span>Size</span>L, S, XL, XXL</li>
                                    <li><span>Brands</span>Airi, Draven, Mango, Valentino, Zara</li>
                                    <li><span>Color</span> Blue, Brown, Green, Pink, Violet, White</li>
                                </ul>
                            </div>
                        </div>
                        <div id="des-details3" class="tab-pane ">
                            <div class="review-wrapper">
                                <h2>1 review for Sleeve Button Cowl Neck</h2>
                                <div class="single-review">
                                    <div class="review-img">
                                        <img src="../assets/images/product-details/client-1.jpg" alt="">
                                    </div>
                                    <div class="review-content">
                                        <div class="review-top-wrap">
                                            <div class="review-name">
                                                <h5><span>John Snow</span> - March 14, 2020</h5>
                                            </div>
                                            <div class="review-rating">
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class=" fa fa-star"></i>
                                            </div>
                                        </div>
                                        <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ratting-form-wrapper">
                                <span>Add a Review</span>
                                <p>Your email address will not be published. Required fields are marked <span>*</span></p>
                                <div class="ratting-form">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6">
                                                <div class="rating-form-style mb-20">
                                                    <label>Name <span>*</span></label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="rating-form-style mb-20">
                                                    <label>Email <span>*</span></label>
                                                    <input type="email">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="star-box-wrap">
                                                    <div class="single-ratting-star">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <div class="single-ratting-star">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <div class="single-ratting-star">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <div class="single-ratting-star">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <div class="single-ratting-star">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="rating-form-style mb-20">
                                                    <label>Your review <span>*</span></label>
                                                    <textarea name="Your Review"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-submit">
                                                    <input type="submit" value="Submit">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="des-details4" class="tab-pane ">
                            <div class="pro-dec-brand-wrap">
                                <div class="row">
                                    <div class="ms-auto me-auto col-lg-10">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 col-md-6 col-sm-5">
                                                <div class="pro-dec-brand-img text-center">
                                                    <img src="../assets/images/brand-logo/brand-logo-7.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-6 col-sm-7">
                                                <div class="pro-dec-brand-content">
                                                    <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu..</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="des-details5" class="tab-pane">
                            <div class="about-shiping-content">
                                <p>Nunc lacus elit, faucibus ac laoreet sed, dapibus ac mi. Maecenas eu ante a elit tempus fermentum. Aliquam commodo tincidunt semper. Phasellus accumsan, justo ac mollis pharetra, ex dui pharetra nisl, a scelerisque ipsum nulla ac sem. Cras eu risus urna. Duis lorem sapien, congue eget nisl sit amet, rutrum faucibus elit.</p>
                                <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.</p>
                                <p>Nunc lacus elit, faucibus ac laoreet sed, dapibus ac mi. Maecenas eu ante a elit tempus fermentum. Aliquam commodo tincidunt semper. Phasellus accumsan, justo ac mollis pharetra, ex dui pharetra nisl, a scelerisque ipsum nulla ac sem. Cras eu risus urna. Duis lorem sapien, congue eget nisl sit amet, rutrum faucibus elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="small-device-area d-block d-md-none">
    <div class="container-fluid">
        <div class="pro-dec-small-device">
            <div class="pro-details-sidebar-active slider-nav-style-3 owl-carousel">
                <div class="single-pro-details-sidebar">
                    <a href="#"><img src="../assets/images/product-details/pro-details-sidebar-1.jpg" alt=""></a>
                    <div class="pro-details-sidebar-content">
                        <h4><a href="#">NEW <br>LONDON</a></h4>
                        <p>Off 20% for all</p>
                    </div>
                </div>
                <div class="single-pro-details-sidebar">
                    <a href="#"><img src="../assets/images/product-details/pro-details-sidebar-2.jpg" alt=""></a>
                    <div class="pro-details-sidebar-content">
                        <h4><a href="#">NEW <br>LONDON</a></h4>
                        <p>Off 20% for all</p>
                    </div>
                </div>
            </div>
            <div class="sidebar-subscribe-wrap">
                <div class="sidebar-subscribe-content text-center">
                    <i class="dlicon ui-1_email-84"></i>
                    <h5>Join Our Newsletter</h5>
                    <p>Sale up to 20% off for your next purchase in this month!</p>
                </div>
                <div class="sidebar-subscribe-form">
                    <form class="validate subscribe-form-style" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="https://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                        <div class="mc-form">
                            <input class="email" type="email" required="" placeholder=" email address???" name="EMAIL" value="">
                            <div class="mc-news" aria-hidden="true">
                                <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                            </div>
                            <div class="clear">
                                <input class="button" type="submit" name="subscribe" value="Subscribe">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div class="related-product-area section-padding-1 pb-95">
    <div class="container-fluid">
        <div class="section-title-6 mb-50">
            <h2>You may also like</h2>
        </div>
        <div class="related-product-active owl-carousel">
            <div class="product-wrap">
                <div class="product-img default-overlay mb-25">
                    <a href="product-details.html">
                        <img class="default-img" src="../assets/images/product/product-3.jpg" alt="">
                        <img class="hover-img" src="../assets/images/product/product-3-2.jpg" alt="">
                    </a>
                    <div class="product-action product-action-position-1">
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                        <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                    </div>
                </div>
                <div class="product-content-2 title-font-width-400 text-center">
                    <h3><a href="product-details.html">Fashion sneaker winter</a></h3>
                    <div class="product-price">
                        <span class="new-price">$28.00</span>
                    </div>
                </div>
            </div>
            <div class="product-wrap">
                <div class="product-img default-overlay mb-25">
                    <a href="product-details.html">
                        <img class="default-img" src="../assets/images/product/product-4.jpg" alt="">
                        <img class="hover-img" src="../assets/images/product/product-4-2.jpg" alt="">
                    </a>
                    <div class="product-action product-action-position-1">
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                        <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                    </div>
                </div>
                <div class="product-content-2 title-font-width-400 text-center">
                    <h3><a href="product-details.html">News strappy sandals</a></h3>
                    <div class="product-price">
                        <span class="new-price">$26.00</span>
                    </div>
                </div>
            </div>
            <div class="product-wrap">
                <div class="product-img default-overlay mb-25">
                    <a href="product-details.html">
                        <img class="default-img" src="../assets/images/product/product-1.jpg" alt="">
                        <img class="hover-img" src="../assets/images/product/product-1-2.jpg" alt="">
                    </a>
                    <div class="product-action product-action-position-1">
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                        <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                    </div>
                </div>
                <div class="product-content-2 title-font-width-400 text-center">
                    <h3><a href="product-details.html">Check bermuda shorts</a></h3>
                    <div class="product-price">
                        <span class="new-price">$39.00</span>
                    </div>
                </div>
            </div>
            <div class="product-wrap">
                <div class="product-img default-overlay mb-25">
                    <a href="product-details.html">
                        <img class="default-img" src="../assets/images/product/product-5.jpg" alt="">
                        <img class="hover-img" src="../assets/images/product/product-5-2.jpg" alt="">
                    </a>
                    <div class="product-action product-action-position-1">
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                        <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                    </div>
                </div>
                <div class="product-content-2 title-font-width-400 text-center">
                    <h3><a href="product-details.html">Down puffer coat collar</a></h3>
                    <div class="product-price">
                        <span class="new-price">$55.00</span>
                    </div>
                </div>
            </div>
            <div class="product-wrap">
                <div class="product-img default-overlay mb-25">
                    <a href="product-details.html">
                        <img class="default-img" src="../assets/images/product/product-6.jpg" alt="">
                        <img class="hover-img" src="../assets/images/product/product-6-2.jpg" alt="">
                    </a>
                    <div class="product-action product-action-position-1">
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                        <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                    </div>
                </div>
                <div class="product-content-2 title-font-width-400 text-center">
                    <h3><a href="product-details.html">Bejewelled velvet sandals</a></h3>
                    <div class="product-price">
                        <span class="new-price">$49.00</span>
                    </div>
                </div>
            </div>
            <div class="product-wrap">
                <div class="product-img default-overlay mb-25">
                    <a href="product-details.html">
                        <img class="default-img" src="../assets/images/product/product-4.jpg" alt="">
                        <img class="hover-img" src="../assets/images/product/product-4-2.jpg" alt="">
                    </a>
                    <div class="product-action product-action-position-1">
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                        <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                    </div>
                </div>
                <div class="product-content-2 title-font-width-400 text-center">
                    <h3><a href="product-details.html">News strappy sandals</a></h3>
                    <div class="product-price">
                        <span class="new-price">$26.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="related-product-area section-padding-1 pb-95">
    <div class="container-fluid">
        <div class="section-title-6 mb-50">
            <h2>Related Products</h2>
        </div>
        <div class="related-product-active owl-carousel">
            @foreach($product_relate as $prod_relate)
            <div class="product-wrap">
                <div class="product-img default-overlay mb-25">
                    <a href="product-details.html">
                        <img class="default-img" src="/upload/products/{{$prod_relate->img}}" alt="">
                        <img class="hover-img" src="../assets/images/product/product-3-2.jpg" alt="">
                    </a>
                    <div class="product-action product-action-position-1">
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                        <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                    </div>
                </div>
                <div class="product-content-2 title-font-width-400 text-center">
                    <h3><a href="product-details.html">{{$prod_relate->name}}</a></h3>
                    <div class="product-price">
                        <span class="new-price">$28.00</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
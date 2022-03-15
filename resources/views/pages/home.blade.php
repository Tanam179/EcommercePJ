@extends('welcome')
@section('content')
    <div class="product-slider-area bg-gray-2">
        <div class="product-slider-active-5">
            @foreach($sliders as $slider)
            <div class="single-product-slider text-center">
                <a href="product-details.html"><img src="/upload/sliders/{{$slider->img}}" alt="product"></a>
                <h3>{{$slider->name}}</h3>
                {{-- <span>$ 49.99</span> --}}
            </div>
            {{-- <div class="single-product-slider text-center">
                <a href="product-details.html"><img src="/upload/sliders/{{$slider->img}}" alt="product"></a>
                <h3>Lace-up suede sneake</h3>
                <span>$ 49.99</span>
            </div>
            <div class="single-product-slider text-center">
                <a href="product-details.html"><img src="/upload/sliders/{{$slider->img}}" alt="product"></a>
                <h3>Lace-up suede sneake</h3>
                <span>$ 49.99</span>
            </div> --}}
            @endforeach
        </div>
    </div>
    <div class="banner-area section-padding-1 padding-70-row-col pt-100">
        <div class="container-fluid">
            <div class="row">
                <div class="section-title-9 text-center mb-50">
                    <h2>Sản phẩm giảm giá</h2>
                </div>
                @foreach($products_sale as $pro_sale)
                <div class="col-lg-4">
                    <div class="banner-wrap default-overlay-2 banner-zoom mb-30">
                        <div class="banner-img">
                            <a href="product-details.html"><img src="/upload/products/{{$pro_sale->img}}" height="500px"
                                    alt="banner"></a>
                        </div>
                        <div class="banner-content-9 banner-position-8 text-center">
                            <h3>{{$pro_sale->name}}</h3>
                            <h2>Sale {{$pro_sale->sale_percent}}%</h2>
                            <span style="top: 100px; right: 45px" class="banner-badge">
                                
                                <span>Only
                                    <strong style="font-size: 13px">{{number_format($pro_sale->price -  ($pro_sale->price * $pro_sale->sale_percent / 100))}}</strong>
                                </span>
                            </span>
                        </div>
                        <div class="btn-style-2 btn-style-2-position mt-25">
                            <a class="btn-2-border-black btn-2-bg-color" href="product-details.html">
                                Shop now
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="product-area pt-70 pb-45 section-padding-1">
        <div class="container-fluid">
            <div class="section-title-9 text-center">
                <h2>Danh sách sản phẩm</h2>
            </div>
            <div class="product-tab-list-5 nav mt-50 mb-45">
                <a style="padding: 0 20px" class="active" href="#product-6" data-bs-toggle="tab">
                    Tất cả
                </a>
                @foreach ($categories as $item)
                    <a style="padding: 0 20px" href="#product-{{ $item->id }}" data-bs-toggle="tab">
                        {{ $item->name }}
                    </a>
                @endforeach

            </div>

            <div class="tab-content jump-2">
                <div id="product-6" class="tab-pane active padding-20-row-col">
                    <div class="row">
                        
                        @foreach ($products as $product)
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-60">
                                    <div class="product-img default-overlay mb-25">
                                        <a href="product-details.html">
                                            <img class="default-img" src="/upload/products/{{ $product->img }}" alt="">
                                            {{-- <span
                                                class="badge-black badge-left-20 badge-top-20 badge-width-height-2 badge-border-radius-100">-14.3%</span> --}}
                                        </a>
                                        <div class="product-action product-action-position-1">
                                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                    class="fa fa-eye"></i><span>Quick Shop</span></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                    Wishlist</span></a>
                                            <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                    Cart</span></a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 title-font-width-400 text-center">
                                        <h3><a href="product-details.html">{{ $product->name }}</a></h3>
                                        <div class="product-price-3">
                                            @if($product->sale == 1)
                                            <span class="old-price">{{number_format($product->price , 0 , ',' , ',' )}} VNĐ</span>
                                            <span class="new-price">{{number_format($product->price -  ($product->price * $product->sale_percent / 100))}}VNĐ</span>
                                            @else
                                            <span class="old-price"></span>
                                            <span class="new-price">{{number_format($product->price , 0 , ',' , ',' )}} VNĐ</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-21.jpg" alt="">
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Libero ante elit shoes</a></h3>
                                    <div class="product-price-3">
                                        <span class="new-price">$32.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-22.jpg" alt="">
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Sed iaculis sed shoes</a></h3>
                                    <div class="product-price-3">
                                        <span class="new-price">$49.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-23.jpg" alt="">
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Maecenas elit shoes</a></h3>
                                    <div class="product-price-3">
                                        <span class="new-price">$35.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-24.jpg" alt="">
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Felis mauris elit shoes</a></h3>
                                    <div class="product-price-3">
                                        <span class="new-price">$38.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-25.jpg" alt="">
                                        <span
                                            class="badge-black badge-left-20 badge-top-20 badge-width-height-2 badge-border-radius-100">-7.7%</span>
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Leather boat shoes</a></h3>
                                    <div class="product-price-3">
                                        <span class="old-price">$42.00</span>
                                        <span class="new-price">$39.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-26.jpg" alt="">
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Leather sport shoes</a></h3>
                                    <div class="product-price-3">
                                        <span class="new-price">$19.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-27.jpg" alt="">
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Curabitur leather boots</a></h3>
                                    <div class="product-price-3">
                                        <span class="new-price">$22.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-28.jpg" alt="">
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Contrast sole leather sport shoes</a></h3>
                                    <div class="product-price-3">
                                        <span class="new-price">$25.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-29.jpg" alt="">
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Patent effect leather boots</a></h3>
                                    <div class="product-price-3">
                                        <span class="new-price">$28.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-30.jpg" alt="">
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Ankle-cuff sandals</a></h3>
                                    <div class="product-price-3">
                                        <span class="new-price">$36.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-31.jpg" alt="">
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Leather boat shoes</a></h3>
                                    <div class="product-price-3">
                                        <span class="new-price">$36.00</span>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                @foreach ($categories as $item)
                <div id="product-{{ $item->id}}" class="tab-pane padding-20-row-col">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-60">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-31.jpg" alt="">
                                        <span
                                            class="badge-black badge-left-20 badge-top-20 badge-width-height-2 badge-border-radius-100">-14.3%</span>
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Dapibus ac mi shoes</a></h3>
                                    <div class="product-price-3">
                                        <span class="old-price">$49.00</span>
                                        <span class="new-price">$42.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-30.jpg" alt="">
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Libero ante elit shoes</a></h3>
                                    <div class="product-price-3">
                                        <span class="new-price">$32.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-29.jpg" alt="">
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Sed iaculis sed shoes</a></h3>
                                    <div class="product-price-3">
                                        <span class="new-price">$49.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-28.jpg" alt="">
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Maecenas elit shoes</a></h3>
                                    <div class="product-price-3">
                                        <span class="new-price">$35.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-27.jpg" alt="">
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Felis mauris elit shoes</a></h3>
                                    <div class="product-price-3">
                                        <span class="new-price">$38.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-26.jpg" alt="">
                                        <span
                                            class="badge-black badge-left-20 badge-top-20 badge-width-height-2 badge-border-radius-100">-7.7%</span>
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Leather boat shoes</a></h3>
                                    <div class="product-price-3">
                                        <span class="old-price">$42.00</span>
                                        <span class="new-price">$39.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-25.jpg" alt="">
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Leather sport shoes</a></h3>
                                    <div class="product-price-3">
                                        <span class="new-price">$19.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-24.jpg" alt="">
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Curabitur leather boots</a></h3>
                                    <div class="product-price-3">
                                        <span class="new-price">$22.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-23.jpg" alt="">
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Contrast sole leather sport shoes</a></h3>
                                    <div class="product-price-3">
                                        <span class="new-price">$25.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-22.jpg" alt="">
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Patent effect leather boots</a></h3>
                                    <div class="product-price-3">
                                        <span class="new-price">$28.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-21.jpg" alt="">
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Ankle-cuff sandals</a></h3>
                                    <div class="product-price-3">
                                        <span class="new-price">$36.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-20.jpg" alt="">
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Leather boat shoes</a></h3>
                                    <div class="product-price-3">
                                        <span class="new-price">$36.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- <div id="product-" class="tab-pane padding-20-row-col">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-60">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-25.jpg" alt="">
                                        <span
                                            class="badge-black badge-left-20 badge-top-20 badge-width-height-2 badge-border-radius-100">-14.3%</span>
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Dapibus ac mi shoes</a></h3>
                                    <div class="product-price-3">
                                        <span class="old-price">$49.00</span>
                                        <span class="new-price">$42.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-26.jpg" alt="">
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Libero ante elit shoes</a></h3>
                                    <div class="product-price-3">
                                        <span class="new-price">$32.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-27.jpg" alt="">
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Sed iaculis sed shoes</a></h3>
                                    <div class="product-price-3">
                                        <span class="new-price">$49.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-28.jpg" alt="">
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Maecenas elit shoes</a></h3>
                                    <div class="product-price-3">
                                        <span class="new-price">$35.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-29.jpg" alt="">
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Felis mauris elit shoes</a></h3>
                                    <div class="product-price-3">
                                        <span class="new-price">$38.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-30.jpg" alt="">
                                        <span
                                            class="badge-black badge-left-20 badge-top-20 badge-width-height-2 badge-border-radius-100">-7.7%</span>
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Leather boat shoes</a></h3>
                                    <div class="product-price-3">
                                        <span class="old-price">$42.00</span>
                                        <span class="new-price">$39.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-31.jpg" alt="">
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Leather sport shoes</a></h3>
                                    <div class="product-price-3">
                                        <span class="new-price">$19.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-24.jpg" alt="">
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Curabitur leather boots</a></h3>
                                    <div class="product-price-3">
                                        <span class="new-price">$22.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-23.jpg" alt="">
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Contrast sole leather sport shoes</a></h3>
                                    <div class="product-price-3">
                                        <span class="new-price">$25.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-22.jpg" alt="">
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Patent effect leather boots</a></h3>
                                    <div class="product-price-3">
                                        <span class="new-price">$28.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-21.jpg" alt="">
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Ankle-cuff sandals</a></h3>
                                    <div class="product-price-3">
                                        <span class="new-price">$36.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-20.jpg" alt="">
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Leather boat shoes</a></h3>
                                    <div class="product-price-3">
                                        <span class="new-price">$36.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="product-" class="tab-pane padding-20-row-col">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-60">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-26.jpg" alt="">
                                        <span
                                            class="badge-black badge-left-20 badge-top-20 badge-width-height-2 badge-border-radius-100">-14.3%</span>
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Dapibus ac mi shoes</a></h3>
                                    <div class="product-price-3">
                                        <span class="old-price">$49.00</span>
                                        <span class="new-price">$42.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-25.jpg" alt="">
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Libero ante elit shoes</a></h3>
                                    <div class="product-price-3">
                                        <span class="new-price">$32.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-24.jpg" alt="">
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Sed iaculis sed shoes</a></h3>
                                    <div class="product-price-3">
                                        <span class="new-price">$49.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-27.jpg" alt="">
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Maecenas elit shoes</a></h3>
                                    <div class="product-price-3">
                                        <span class="new-price">$35.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-28.jpg" alt="">
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Felis mauris elit shoes</a></h3>
                                    <div class="product-price-3">
                                        <span class="new-price">$38.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-29.jpg" alt="">
                                        <span
                                            class="badge-black badge-left-20 badge-top-20 badge-width-height-2 badge-border-radius-100">-7.7%</span>
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Leather boat shoes</a></h3>
                                    <div class="product-price-3">
                                        <span class="old-price">$42.00</span>
                                        <span class="new-price">$39.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-30.jpg" alt="">
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Leather sport shoes</a></h3>
                                    <div class="product-price-3">
                                        <span class="new-price">$19.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-31.jpg" alt="">
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Curabitur leather boots</a></h3>
                                    <div class="product-price-3">
                                        <span class="new-price">$22.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-23.jpg" alt="">
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Contrast sole leather sport shoes</a></h3>
                                    <div class="product-price-3">
                                        <span class="new-price">$25.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-22.jpg" alt="">
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Patent effect leather boots</a></h3>
                                    <div class="product-price-3">
                                        <span class="new-price">$28.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-21.jpg" alt="">
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-4 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">Ankle-cuff sandals</a></h3>
                                    <div class="product-price-3">
                                        <span class="new-price">$36.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="../assets/images/product/product-20.jpg" alt="">
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i
                                                class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to
                                                Wishlist</span></a>
                                        <a class="icon-blod" title="Add to Compare" href="#"><i
                                                class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to
                                                Cart</span></a>
                                    </div>
                                    <div class="product-content-4 title-font-width-400 text-center">
                                        <h3><a href="product-details.html">Dapibus ac mi shoes</a></h3>
                                        <div class="product-price-3">
                                            <span class="old-price">$49.00</span>
                                            <span class="new-price">$42.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<<<<<<< HEAD
                @endforeach
=======
                </div> --}}
>>>>>>> 146515e4b30562986e90767b6740074523e87fdc
            </div>
        </div>
    </div>
    <div class="product-area section-padding-1 padding-20-row-col pb-95">
        <div class="container-fluid">
            <div class="section-title-9 mb-50 text-center">
                <h2>Sản phẩm bán chạy</h2>
            </div>
            <div class="featured-slider-active owl-carousel dot-style-2 dot-style-2-inc">
<<<<<<< HEAD
                @foreach ($products as $product)
                    <div class="banner-wrap default-overlay banner-zoom mb-10">
                        <div class="banner-img">
                            <a href="product-details.html"><img src="/upload/products/{{ $product->img }}"
                                    alt="banner"></a>
                        </div>
                        <div class="banner-content-10">
                            <h3><a href="#">{{ $product->name }}</a></h3>
                        </div>
                    </div>
                @endforeach

=======
                @foreach($products_best_seller as $best_sell)
                <div class="banner-wrap default-overlay banner-zoom mb-10">
                    <div class="banner-img">
                        <a href="product-details.html"><img src="/upload/products/{{$best_sell->img}}" width="50%" height="750px" style="object-fit: cover"
                                alt="banner"></a>
                    </div>
                    <div class="banner-content-10">
                        <h3><a href="#">{{$best_sell->name}}</a></h3>
                    </div>
                </div>
                {{-- <div class="banner-wrap default-overlay banner-zoom mb-10">
                    <div class="banner-img">
                        <a href="product-details.html"><img src="../assets/images/product/product-banner-2.jpg"
                                alt="banner"></a>
                    </div>
                    <div class="banner-content-10">
                        <h3><a href="#">Patent effect leather boots</a></h3>
                    </div>
                </div>
                <div class="banner-wrap default-overlay banner-zoom mb-10">
                    <div class="banner-img">
                        <a href="product-details.html"><img src="../assets/images/product/product-banner-1.jpg"
                                alt="banner"></a>
                    </div>
                    <div class="banner-content-10">
                        <h3><a href="#">Patent effect leather boots</a></h3>
                    </div>
                </div>
                <div class="banner-wrap default-overlay banner-zoom mb-10">
                    <div class="banner-img">
                        <a href="product-details.html"><img src="../assets/images/product/product-banner-2.jpg"
                                alt="banner"></a>
                    </div>
                    <div class="banner-content-10">
                        <h3><a href="#">Patent effect leather boots</a></h3>
                    </div>
                </div> --}}
                @endforeach
>>>>>>> 146515e4b30562986e90767b6740074523e87fdc
            </div>
        </div>
    </div>
    <div class="testimonial-area jarallax parallax-img pt-80 pb-80"
        style="background-image:url(../assets/images/bg/bg-6.jpg);">
        <div class="container">
            <div class="testimonial-active owl-carousel">
                <div class="single-testimonial text-center">
                    <img src="../assets/images/icon-img/testimonial-icon.png" alt="testimonial">
                    <p>I love all this theme and love the versatility of it. So many things just work the way they should
                        right out of the box! No complicated anything to deal with! Best of all is the great customer
                        support - every time I have contacted them for help with custom CSS issues I get a reply within 24
                        hours. That is fantastic!</p>
                    <div class="client-info">
                        <img src="../assets/images/testimonial/client-img-1.jpg" alt="testimonial">
                        <span>Mary Scott - Founder & CEO</span>
                    </div>
                </div>
                <div class="single-testimonial text-center">
                    <img src="../assets/images/icon-img/testimonial-icon.png" alt="testimonial">
                    <p>I love all this theme and love the versatility of it. So many things just work the way they should
                        right out of the box! No complicated anything to deal with! Best of all is the great customer
                        support - every time I have contacted them for help with custom CSS issues I get a reply within 24
                        hours. That is fantastic!</p>
                    <div class="client-info">
                        <img src="../assets/images/testimonial/client-img-1.jpg" alt="testimonial">
                        <span>Mary Scott - Founder & CEO</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="subscribe-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 ms-auto me-auto">
                    <div class="section-title-9 mb-50 text-center">
                        <h2>Stay with us</h2>
                        <p>Sale up to 20% off for your next purchase in this month!</p>
                    </div>
                    <div id="mc_embed_signup" class="subscribe-form-2">
                        <form id="mc-embedded-subscribe-form" class="validate" novalidate="" target="_blank"
                            name="mc-embedded-subscribe-form" method="post"
                            action="https://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                            <div id="mc_embed_signup_scroll" class="mc-form-2">
                                <input class="email" type="email" required="" placeholder="Your email address…"
                                    name="EMAIL" value="">
                                <div class="mc-news-2" aria-hidden="true">
                                    <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                </div>
                                <div class="clear-2">
                                    <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe"
                                        value="Subscribe">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

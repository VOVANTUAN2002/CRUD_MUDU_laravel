@extends('frontend.layouts.master')

@section('content')
<!--pos home section Left-->
<div class=" pos_home_section">

    <div class="row pos_home">
        <div class="col-lg-3 col-md-8 col-12">
            <!--sidebar banner-->
            <div class="sidebar_widget banner mb-35">
                <div class="banner_img mb-35">
                    <a href="#"><img src="assets\img\banner\banner5.jpg" alt=""></a>
                </div>
                <div class="banner_img">
                    <a href="#"><img src="assets\img\banner\banner6.jpg" alt=""></a>
                </div>
            </div>
            <!--sidebar banner end-->

            <!--categorie menu start-->

            <!--categorie menu end-->

            <!--wishlist block start-->
            <div class="sidebar_widget wishlist mb-35">
                <div class="block_title">
                    <h3><a href="#">List</a></h3>
                </div>
                @foreach($products as $product)
                <div class="cart_item">
                    <div class="cart_img">
                        <a href="#"><img src="{{$product->image}}" alt=""></a>
                    </div>
                    <div class="cart_info">
                        <a href="#">{{$product->name}}</a>
                        <span class="cart_price">{{$product->price}}</span>
                        <span class="quantity">Qty: 1</span>
                    </div>
                    <div class="cart_remove">
                        <a title="Remove this item" href="{{route('shop.destroyCart',$product->id)}}"><i class="fa fa-times-circle"></i></a>
                    </div>
                </div>
                @endforeach
                <div class="block_content">
                    <p>2 products</p>
                    <a href="#">» My wishlists</a>
                </div>
            </div>
            <!--wishlist block end-->

            <!--popular tags area-->
            <div class="sidebar_widget tags mb-35">
                <div class="block_title">
                    <h3>popular tags</h3>
                </div>
                <div class="block_tags">
                    <a href="#">ipod</a>
                    <a href="#">sam sung</a>
                    <a href="#">apple</a>
                    <a href="#">iphone 5s</a>
                    <a href="#">superdrive</a>
                    <a href="#">shuffle</a>
                    <a href="#">nano</a>
                    <a href="#">iphone 4s</a>
                    <a href="#">canon</a>
                </div>
            </div>
            <!--popular tags end-->

            <!--newsletter block start-->

            <!--newsletter block end-->

            <!--sidebar banner-->
            <div class="sidebar_widget bottom ">
                <div class="banner_img">
                    <a href="#"><img src="assets\img\banner\banner9.jpg" alt=""></a>
                </div>
            </div>
            <!--sidebar banner end-->
        </div>
        <div class="col-lg-9 col-md-12">
            <!--banner slider start-->
            <div class="banner_slider slider_1">
                <div class="slider_active owl-carousel">
                    <div class="single_slider" style="background-image: url(assets/img/slider/slider_3.png)">
                        <div class="slider_content">
                            <div class="slider_content_inner">
                                <h1>Best Collection</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                                <a href="#">shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class="single_slider" style="background-image: url(assets/img/slider/slider_2.png)">
                        <div class="slider_content">
                            <div class="slider_content_inner">
                                <h1>New Collection</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                                <a href="#">shop now</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--banner slider start-->

            <!--new product area start-->
            <div class="new_product_area">
                <div class="block_title">
                    <h3>New Products</h3>
                </div>

                <div class="row">
                    @foreach($products as $product)
                    <div class="col-lg-4">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a href="{{route('shop.product_detail', $product->id)}}">
                                    <img src="{{$product->image}}" width="250" height="300" alt="">
                                </a>
                                <div class="img_icone">
                                    <img src="assets\img\cart\span-new.png" alt="">
                                </div>
                                <div class="product_action">
                                    <a href="{{ route('add-to-cart', $product->id) }}"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                </div>
                            </div>
                            <div class="product_content">
                                <span class="product_price">{{$product->price}} VND</span>
                                <h3 class="product_title"><a href="single-product.html">{{$product->name}}</a></h3>
                            </div>
                            <div class="product_info">
                                <ul>
                                    <li><a href="{{route('shop.product_detail', $product->id)}}" title="Quick view">View Detail</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
   
    <!--new product area start-->

    <h1></h1>

    <!--featured product start-->

    <div class="featured_product">
        <div class="block_title">
            <h3>Featured Products 1</h3>
        </div>
        <div class="row">

            <div class="product_active owl-carousel">
                @foreach($products as $product)
                <div class="col-lg-3">
                    <div class="single_product">
                        <div class="product_thumb">
                            <a href="single-product.html"><img src="{{$product->image}}" alt=""></a>
                            <div class="hot_img">
                                <img src="assets\img\cart\span-hot.png" alt="">
                            </div>
                            <div class="product_action">
                                <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class="product_content">
                            <span class="product_price">{{$product->price}}</span>
                            <h3 class="product_title"><a href="single-product.html">{{$product->name}}</a></h3>
                        </div>
                        <div class="product_info">
                            <ul>
                                <li><a href="#" title="Quick view">View Detail</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

     
        <!--featured product end-->

        <!--banner area start-->
        <div class="banner_area mb-60">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner">
                        <a href="#"><img src="assets\img\banner\banner7.jpg" alt=""></a>
                        <div class="banner_title">
                            <p>Up to <span> 40%</span> off</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner">
                        <a href="#"><img src="assets\img\banner\banner8.jpg" alt=""></a>
                        <div class="banner_title title_2">
                            <p>sale off <span> 30%</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--banner area end-->

        <!--brand logo strat-->
        <div class="brand_logo mb-60">
            <div class="block_title">
                <h3>Brands</h3>
            </div>
            <div class="row">
                <div class="brand_active owl-carousel">
                    <div class="col-lg-2">
                        <div class="single_brand">
                            <a href="#"><img src="assets\img\brand\brand1.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="single_brand">
                            <a href="#"><img src="assets\img\brand\brand2.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="single_brand">
                            <a href="#"><img src="assets\img\brand\brand3.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="single_brand">
                            <a href="#"><img src="assets\img\brand\brand4.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="single_brand">
                            <a href="#"><img src="assets\img\brand\brand5.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="single_brand">
                            <a href="#"><img src="assets\img\brand\brand6.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--brand logo end-->
    </div>
</div>
</div>
<!--pos home section end-->
@endsection
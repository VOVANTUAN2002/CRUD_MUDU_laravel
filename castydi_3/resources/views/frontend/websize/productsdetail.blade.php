@extends('frontend.layouts.master')

@section('content')

<div class="breadcrumbs_area">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb_content">
                <ul>
                    <li><a href="index.html">home</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>single product</li>
                </ul>

            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--product wrapper start-->
<div class="product_details">
    <div class="row">
        <div class="col-lg-5 col-md-6">
            <div class="product_tab fix">
                <div class="tab-content produc_tab_c">
                    <div class="tab-pane fade show active" id="p_tab1" role="tabpanel">
                        <div class="modal_img">
                            <a href="#"><img src="{{$product->image}}" alt=""></a>
                            <div class="img_icone">
                                <img src="{{$product->image}}" alt="">
                            </div>
                            <div class="view_img">
                                <a class="large_view" href="assets\img\product\product13.jpg"><i class="fa fa-search-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="p_tab2" role="tabpanel">
                        <div class="modal_img">
                            <a href="#"><img src="assets\img\product\product14.jpg" alt=""></a>
                            <div class="img_icone">
                                <img src="assets\img\cart\span-new.png" alt="">
                            </div>
                            <div class="view_img">
                                <a class="large_view" href="assets\img\product\product14.jpg"><i class="fa fa-search-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="p_tab3" role="tabpanel">
                        <div class="modal_img">
                            <a href="#"><img src="assets\img\product\product15.jpg" alt=""></a>
                            <div class="img_icone">
                                <img src="assets\img\cart\span-new.png" alt="">
                            </div>
                            <div class="view_img">
                                <a class="large_view" href="assets\img\product\product15.jpg"> <i class="fa fa-search-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-7 col-md-6">
            <div class="product_d_right">
                <h1>Printed Summer Dress</h1>
                <div class="product_ratting mb-10">
                    <ul>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"> Write a review </a></li>
                    </ul>
                </div>
                <div class="product_desc">
                    <p>{{$product->des}}</p>
                </div>

                <div class="content_price mb-15">
                    <span>{{$product->price}} USD</span>
                    <span class="old-price"></span>
                </div>
                <div class="box_quantity mb-20">
                    <form action="{{route('add-to-cart',$product->id)}}">
                        <label>quantity</label>
                        <input min="1" max="100" value="1" type="number">                    
                    </form>
                    <a href="{{route('add-to-cart',$product->id)}}" title="add to wishlist">Cart<i class="fa fa-heart" aria-hidden="true"></i></a>
                </div>

                <div class="sidebar_widget color">
                    <h2>Choose Color</h2>
                    <div class="widget_color">
                        <ul>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li> <a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="product_stock mb-20">
                    <p>299 items</p>
                    <span> In stock </span>
                </div>
                <div class="wishlist-share">
                    <h4>Share on:</h4>
                    <ul>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                        <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<!--product details end-->

@endsection
@extends('frontend.layouts.master')

@section('content')

<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb_content">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>List of products</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--pos home section-->
<div class=" pos_home_section shop_section shop_fullwidth">

    <div class="row">
        <div class="col-12">
            <!--shop toolbar start-->
            <div class="shop_toolbar mb-35">
                <div class="list_button">
                    <ul class="nav" role="tablist">
                        <li>
                            <a class="active" data-toggle="tab" href="#large" role="tab" aria-controls="large" aria-selected="true"><i class="fa fa-th-large"></i></a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false"><i class="fa fa-th-list"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="page_amount">
                    <p>Showing 1–9 of 21 results</p>
                </div>

            </div>
            <!--shop toolbar end-->
        </div>
    </div>

    <!--shop tab product-->
    <div class="shop_tab_product shop_fullwidth">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="large" role="tabpanel">
                <div class="row">
                    @foreach($products as $product)
                    <div class="col-lg-4">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a href="{{route('shop.product_detail', $product->id)}}"><img src="{{$product->image}}" width="250" height="300" alt=""></a>
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
                                    <li><a href="{{route('shop.product_detail', $product->id)}}" data-toggle="modal" data-target="#modal_box" title="Quick view">View Detail</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="list" role="tabpanel">
                @foreach ($products as $product)
                <div class="product_list_item mb-35">

                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-5 col-sm-6">
                            <div class="product_thumb">
                                <a href=""><img src="{{asset('storage/app/public/images/'.$product->image)}}" alt=""></a>
                                <div class="hot_img">
                                    <img src="assets\img\cart\span-hot.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-7 col-sm-6">
                            <div class="list_product_content">
                                <div class="product_thumb">
                                    <span>{{$product->name}} </span>
                                </div>
                                <div class="product_ratting">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>

                                <p class="design">{{$product->des}}</p>

                                <div class="content_price">
                                    <span>{{$product->price}} đ</span>
                                    <span class="old-price">{{$product->price}} đ</span>
                                </div>
                                <div class="add_links">
                                    <ul>
                                        <li><a href="{{ route('add-to-cart', $product->id) }}" title="Thêm Vào Giỏ"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                        <li><a href="" title="Xem Chi Tiết"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                @endforeach
            </div>

        </div>
    </div>
    <!--shop tab product end-->


</div>

<!--pagination style start-->
<div class="pagination_style shop_page">
    <div class="item_page">
        <form action="#">
            <label for="page_select">Hiển thị</label>
            <select id="page_select">
                <option value="1">10</option>
                <option value="2">25</option>
                <option value="3">100</option>
            </select>
            <span>sản phẩm</span>
        </form>
    </div>
    <div class="page_number">
        {{ $products->links() }}
    </div>
</div>
<!--pagination style end-->
</div>
<!--pos home section end-->
</div>
<!--pos page inner end-->
</div>
</div>
<!--pos page end-->



@endsection
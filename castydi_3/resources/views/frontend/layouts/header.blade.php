<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Coron - Fashion eCommerce Bootstrap4 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img\favicon.png')}}">

    <!-- all css here -->
    <link rel="stylesheet" href="{{ asset('assets\css\bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets\css\plugin.css')}}">
    <link rel="stylesheet" href="{{ asset('assets\css\bundle.css')}}">
    <link rel="stylesheet" href="{{ asset('assets\css\style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets\css\responsive.css')}}">
    <script src="{{ asset('assets\js\vendor\modernizr-2.8.3.min.js')}}"></script>
</head>
<!--pos page start-->
<div class="pos_page">
    <div class="container">
        <!--pos page inner-->
        <div class="pos_page_inner">
            <!--header area -->
            <div class="header_area">
                <!--header top-->
                <div class="header_top">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="switcher">
                                <ul>
                                    <!-- <li class="languages"><a href="#"><img src="assets\img\logo\fontlogo.jpg" alt=""> English <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown_languages">
                                            <li><a href="#"><img src="assets\img\logo\fontlogo.jpg" alt=""> English</a></li>
                                            <li><a href="#"><img src="assets\img\logo\fontlogo2.jpg" alt=""> French </a></li>
                                        </ul>
                                    </li> -->

                                    <!-- <li class="currency"><a href="#"> Currency : $ <i class="fa fa-angle-down"></i></a> -->
                                        <ul class="dropdown_currency">
                                            <li><a href="#"> Dollar (USD)</a></li>
                                            <li><a href="#"> Euro (EUR) </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="header_links">
                                <!-- <ul>
                                    <li><a href="contact.html" title="Contact">Contact</a></li>
                                    <li><a href="wishlist.html" title="wishlist">My wishlist</a></li>
                                    <li><a href="my-account.html" title="My account">My account</a></li>
                                    <li><a href="cart.html" title="My cart">My cart</a></li>
                                    <li><a href="login.html" title="Login">Login</a></li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--header top end-->

                <!--header middel-->
                <div class="header_middel">
                    <div class="row align-items-center">
                        <!--logo start-->
                        <div class="col-lg-3 col-md-3">
                            <div class="logo">
                                <a href="index.html"><img src="assets\img\logo\logo.jpg.png" alt=""></a>
                            </div>
                        </div>
                        <!--logo end-->
                        <div class="col-lg-9 col-md-9">
                            <div class="header_right_info">
                                <div class="search_bar">
                                    <form  method="get">
                                    <input  type="text" placeholder="Search..." name="search" />
                                        <button type="submit"><i class="fa fa-search" ></i></button>
                                    </form>
                                </div>
                                <div class="shopping_cart">
                                    <a class="nav-link" href="{{route('shop.getCart')}}">Cart({{$count}})</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--header middel end-->
                <div class="header_bottom">
                    <div class="row">
                        <div class="col-12">
                            <div class="main_menu_inner" >
                                <div class="main_menu d-none d-lg-block">
                                    <nav>
                                        <ul>
                                            <li class="active"><a href="/">Home</a>
                                            </li>
                                            <li><a href="{{route('shop.category',2)}}">Trousers</a>
                                            </li>
                                            <li><a href="{{route('shop.category',1)}}">T-shirt</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header end -->
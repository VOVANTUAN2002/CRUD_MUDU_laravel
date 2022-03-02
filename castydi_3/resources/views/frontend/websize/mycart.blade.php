@extends('frontend.layouts.master')

@section('content')

<div class="shopping_cart_area">

    @if(!$cart)
    <h4 class="text-center">Không Có Sản Phẩm Nào.</h4>
    @else


    <div class="row">
        <div class="col-13">
            <div class="table_desc">
                <div class="cart_page table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th class="product_remove">Image</th>
                                <th class="product_thumb">Name</th>
                                <th class="product-price">Price</th>
                                <th class="product_quantity">Quantity</th>
                                <th class="product_total">Total</th>
                                <th class="product_name">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($cart->items))
                            @foreach($cart->items as $item)
                            <tr>
                                <form action="{{route('shop.update')}}" method="post">
                                    @csrf
                                    <td class="product_thumb"><a href="#"><img src="{{ asset($item['item']->image) }}" alt=""></a></td>
                                    <td class="product_name"><a href="#">{{ $item['item']->name }}</a></td>
                                    <td class="product-price">{{ $item['item']->price }}</td>
                                    <input type="hidden" class="hidden" value="{{$item['item']->id}}" name="product_id[]">
                                    <td class="product_quantity"><input min="1" max="100" value="{{ $item['totalQty'] }}" name="quantity[{{$item['item']->id}}]" type="number"></td>
                                    <td class="product_total">{{ $item['totalPrice'] }}</td>
                                    <td class="product_remove"><a href="{{route('shop.destroyCart',$item['item']->id)}}" type="button"><i class="fa fa-trash-o"></i></a></td>
                            </tr>
                            @endforeach
                            
                            @else
                            <tr>
                                <td>Không có sản phẩm</td>
                            </tr>
                            @endif

                        </tbody>
                    </table>
                </div>
                <div class="cart_submit">
                </div>
            </div>
        </div>
    </div>
    <!--coupon code area start-->
    <div class="coupon_area">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                @if (isset($item))
                <div class="coupon_code">
                    <h3>TOTAL</h3>
                    <div class="coupon_inner">
                        <div class="cart_subtotal">
                            <p>into money</p>
                            <p class="cart_amount"><span>:</span>{{ $cart->totalPrice }} USD</p>
                        </div>
                        <div class="checkout_btn">
                            <a href="{{route('shop.checkoutCart')}}">PAYMENT</a>
                            <button class="btn btn-dark">Update</button>
                        </div>
                    </div>
                </div>
                </form>
                @endif
            </div>
        </div>
    </div>
    <!--coupon code area end-->

    @endif
</div>
@endsection
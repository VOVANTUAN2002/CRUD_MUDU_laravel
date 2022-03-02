@extends('frontend.layouts.master')

@section('content')

<div class="error_section">
    <div class="row">
        <div class="col-12">
            <div class="error_form">
                <h2>ĐẶT HÀNG THÀNH CÔNG</h2>
                <a href="/">Tiếp tục mua hàng</a>
            </div>
        </div>

    </div>
</div>
<div class="shopping_cart_area">

    @if(count($orders) === 0)
    <h4 class="text-center">Không Có Sản Phẩm Nào.</h4>
    @else
    <form action="#">

        <div class="row">
            <div class="col-13">
                <div class="table_desc">
                    <div class="cart_page table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="product_remove">Image</th>
                                    <th class="product-price">Price</th>
                                    <th class="product_quantity">Quantity</th>
                                    <th class="product_total">Total</th>

                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($orders))
                                @foreach($orders as $item)
                                <tr>
                                    <td class="product_thumb"><a><img src="{{ asset($item->image) }}" width="100" height="100" alt=""></a></td>
                                    <td class="product-price">{{ $item->price }}</td>
                                    <td class="product_quantity"><input min="1" max="100" value="{{ $item->quantity }}" type="number"></td>
                                    <td class="product_total">{{ $item->price * $item->quantity}}</td>
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
                    <div class="orders_submit">
                    </div>
                </div>
            </div>
        </div>
        <!-- coupon code area start-->
       
        <!--coupon code area end -->
    </form>
    @endif
</div>



@endsection
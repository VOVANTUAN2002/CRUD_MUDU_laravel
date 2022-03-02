@extends('backend.layouts.master')

@section('content')
<div class="container" style="width:600px">
    <h1 class="text-center">Chi tiết Sản phẩm</h1>
    <div class="card">
        <div class="card-header" style="text-align: center;color:red">Thông tin <b style="color:black">{{ $product->name }}</b></div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title" style="color:red">ID : <b style="color:black"> {{$product->id}} </b> </h5>
                <p class="card-text" style="color:red"> Name : <b style="color:black"> {{$product->name}} </b></p>
                <p class="card-text" style="color:red">Price: <b style="color:black"> {{$product->price}} </b></p>
                <p class="card-text" style="color:red">Image : <b style="color:black"> {{$product->image}}</b></p>
                <p class="card-text" style="color:red">Des : <b style="color:black"> {{$product->des}}</b></p>
            </div>
            </hr>
        </div>
    </div>
    <div class="mt-2 text-end">
        <a href="{{route('products.index')}}" class="btn btn-success"> <i class="fas fa-backward"></i> Quay lại</a>
    </div>
</div>
@endsection
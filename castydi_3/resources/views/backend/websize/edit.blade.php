@extends('backend.layouts.master')

@section('content')
<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Chỉnh sửa khách hàng C10</h1>
        </div>
        <div class="col-12">
            <form method="post" action="{{route('products.update', $product->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{ $product->name }}">
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="form-control" name="price" placeholder="Price" value="{{ $product->price }}"  >
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="text" class="form-control" name="image" placeholder="Image link" value="{{ $product->image }}" >
                </div>
                <div class="form-group">
                    <label>Des</label>
                    <input type="text" class="form-control" name="des" placeholder="Enter Des"  value="{{ $product->des }}" >
                </div>
                <div class="form-group">
                    <label>Quantity</label>
                    <input type="text" class="form-control" name="quantity" placeholder="Enter Quantity"  value="{{ $product->quantity }}" >
                </div>
                <div class="form-group">
                <label >categories</label>
                    <select class="form-control"  name="categories_id" >
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Trở Lại</button>
            </form>
        </div>

    </div>
</div>
@endsection
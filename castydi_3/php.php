<?php
/*
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Order_Detail;
use App\Models\Customer;

use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function addToCart($idProduct)
    {
        $product = Product::findOrFail($idProduct);
        $oldCart = Session::get('cart');
        $newCart = new Cart($oldCart);
        $newCart->add($product);

        Session::put('cart', $newCart);
        Session::flash('add-to-cart-success', 'Thêm sản phẩm thành công');
        return back();
    }

    public function getCart() {
        $cart = Session::get('cart');
         return view('website.carts.cart', compact('cart'));
    }
    public function update(){
        $cart = Session::get('cart');
        return view('website.carts.cart', compact('cart'));
    }
    public function destroy($id){
        $oldCart = Session::get('cart');
        $newCart = new Cart($oldCart);
        $product = Product::findOrFail($id);
        $newCart->deleteProduct($product);
    
        Session::put('cart',$newCart);
        return redirect()->route('shop.getCart');
    }
    public function checkout(){
        $cart = Session::get('cart');
        return view('website.checkout.index',compact('cart'));
    }
    public function complete(Request $request)
    {
        $cart = Session::get('cart');
        $request->validate([
            'name' => 'required|max:255',
            'phone' =>'required|max:255',
            'address' => 'required|max:255',
            'email' => 'required|max:255',
            'password' => 'required|max:255',

        ],
        [
            'name.required' => 'Điền tên khách hàng',
            'phone.required' => 'Điền số điện thoại',
            'address.required' => 'Điền địa chỉ',
            'email.required' => 'Điền email',
            'password.required' => 'Điền mật khẩu',
        ]);
        // dd($cart);

        // foreach ($cart->items as $item){
        //     dd($item['item']);
        // }

        $customer_id = $this->checkCustomerExist($request->phone);

        if (!$customer_id) {
            $customer = new Customer();
            $customer->name = $request->input('name');
            $customer->phone = $request->input('phone');
            $customer->address = $request->input('address');
            $customer->email = $request->input('email');
            $customer->password = $request->input('password');
            $customer->save();
            $customer_id = $customer->id;
        }

        //Thêm dữ liệu vào bảng Orders
        $order = new Order();
        $order->customer_id = $customer_id;
        $order->payment_method = $request->pay_method;
        $order->total_price = $cart->totalPrice;
        $order->status = 0;
        $order->code = 123;
        $order->save();
        $order_id = $order->id;

        //Lưu vào bảng chi tiết đơn hàng
        foreach ($cart->items as $item){
            $order_detail = new Order_Detail();
            $order_detail->order_id = $order_id;
            $order_detail->product_id = $item['item']->id;
            $order_detail->qty = $item['totalQty'];
            $order_detail->price = $item['totalPrice'];
            $order_detail->save();
        }

     // Chuyển hướng sang trang thành công
    return redirect()->route('shop.success');
  
    }
    public function success(){
        return view('website.checkout.complete');
    }
    public function checkCustomerExist($phone){
        $customer = DB::table('customers')->where('phone','=',$phone)->first();
        if ($customer){ 
            return $customer->id;
        }else {
            return 0;
        }
    }
}
 */
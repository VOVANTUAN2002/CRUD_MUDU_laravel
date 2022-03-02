<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Order_Detail;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Stmt\Foreach_;

class CartController extends Controller
{

    public function addToCart($idProduct)
    {
        $product = Product::findOrFail($idProduct);
        $oldCart = Session::get('carts');
        $newCart = new Cart($oldCart);
        $newCart->add($product);
        Session::put('carts', $newCart);
        // dd($product);
        Session::flash('add-to-cart-success', 'Them sp vao gio hang thang cong');
        return back();
    }
    public function getCart()
    {
        $cart = Session::get('carts');
        return view('frontend.websize.mycart', compact('cart'));
    }

    public function destroy($id)
    {
        // echo $id;
        $cart = Session::get('carts');
        // echo '<pre>';
        // print_r($cart);
        // echo '</pre>';
        foreach ($cart->items as $item) {
            // echo '<pre>';
            if ($item['item']->id == $id) {
                $cart->totalPrice = $cart->totalPrice - $item['item']->price;
            }
            // echo($item['item']->price);
            // echo '</pre>';
        }
        // echo $cart->totalPrice;
        // $cart->totalPrice = $cart->totalPrice - $cart->items[$id];
        unset($cart->items[$id]);
        Session::put('carts', $cart);
        return back();
    }
    public function complete(Request $request)
    {
        $cart = Session::get('carts');

        // dd($request->all());

        $request->validate(
            [
                'name' => 'required|max:255',
                'phone' => 'required|max:255',
                'address' => 'required|max:255',
                'email' => 'required|max:255',
            ],
            [
                'name.required' => 'Điền tên khách hàng',
                'phone.required' => 'Điền số điện thoại',
                'address.required' => 'Điền địa chỉ',
                'email.required' => 'Điền email',
            ]
        );

        // dd($cart);

        // foreach ($cart->items as $item){
        //     dd($item['item']);
        // }

        $users_id = $this->checkCustomerExist($request->email);

        if (!$users_id) {
            $user = new User();
            $user->name = $request->input('name');
            $user->phone = $request->input('phone');
            $user->address = $request->input('address');
            $user->email = $request->input('email');
            $user->password = 123;

            $user->save();
            $users_id = $user->id;
        }

        //Thêm dữ liệu vào bảng Orders
        $order = new Order();
        $order->users_id = $users_id;
        $order->orders_name = $request->name;
        $order->orders_phone = $request->phone;
        $order->orders_address = $request->address;
        $order->orders_email = $request->email;
        $order->totalPrice = $cart->totalPrice;
        // dd($order);
        $order->save();
        $orders_id = $order->id;

        //Lưu vào bảng chi tiết đơn hàng
        foreach ($cart->items as $item) {
            $order_detail = new Order_Detail();
            $order_detail->orders_id = $orders_id;
            $order_detail->products_id = $item['item']->id;
            $order_detail->image = $item['item']->image;
            $order_detail->quantity = $item['totalQty'];
            $order_detail->price = $item['item']->price;
            $order_detail->save();
        }

        // Chuyển hướng sang trang thành công
        return redirect()->route('shop.success', $orders_id);
    }

    public function success($orders_id)
    {
        $orders = Order_Detail::where("orders_id", $orders_id)->get();
        $totalPrice = DB::table('orders_details')->select(DB::raw('sum(price*quantity) as total'))->where("orders_id", $orders_id)->first();
        echo  $totalPrice->total;
        // dd($orders);
        return view('frontend.websize.complete', compact('orders', 'totalPrice'));
    }

    public function checkCustomerExist($email)
    {
        $user = DB::table('users')->where('email', '=', $email)->first();
        if ($user) {
            return $user->id;
        } else {
            return 0;
        }
    }

    public function checkout()
    {
        $cart = Session::get('carts');
        return view('frontend.websize.checkout', compact('cart'));
    }
    public function update(Request $request)
    {
        echo '<pre>';
        print_r($request->all());
        echo '</pre>';

        

        $cart = Session::get('carts');
        // dd($cart);

        foreach ($request->quantity as $product_id => $qty) {
            $product_price = $cart->items[$product_id]['item']->price;
            $totalPrice = $product_price * $qty;
            // dd($totalPrice);
            $cart->items[$product_id]['totalQty'] = $qty;

            $cart->items[$product_id]['totalPrice'] = $totalPrice;
        }

        Session::put('carts', $cart);
        
        return redirect()->route('shop.getCart');
    }
}

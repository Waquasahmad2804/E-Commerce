<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\cart;
use App\Models\User;

class ProductController extends Controller
{
public function index(){
    $data=Product::all();
    return view('product',['products'=>$data]);
}
public function details($id){
    $details=Product::find($id);
    return view('detail', ['details'=>$details]);

}
public function addToCart(Request $request){
    if($request->session()->has('user')){
        $cart = new cart();
        $cart->user_id=$request->session()->get('user')['id'];
        $cart->product_id=$request->product_id;
        $cart->save();
        $request->session()->flash('success', 'Product added to cart successfully.');
        return redirect('/home');
    }
   else{
    return redirect('/login')->with('error','You must be logged in to add items to your cart.');
   }
}
public function cartItem(){
    $cartData=cart::Where('user_id',session('user')['id'])->get();
    $productIds = $cartData->pluck('product_id')->toArray();
    $productData=product::WhereIn('id',$productIds)->get();
    //return $productData;
    return view('/cartDetail',['cartitems' => $productData]);
}
public function deleteCartItem(Request $request){
    \Log::info('Deleting cart item:', ['product_id' => $request->cartitem]);
    cart:: Where('product_id',$request->cartitem)->delete();
    $cartitems = Cart::all();
    return redirect('cartDetail'); 
}
public function order($id)
{
  
    $product = Product::find($id);
    $price = $product->price;
    $tax = ($price * 9) / 100;
    $totalAmount = $price + $tax;
    $userId = session('user'); 
    $Address = User::where('id',$userId)->pluck('Address')->first();

    return view('orderDetail', compact('price', 'tax', 'totalAmount','Address'));

}

public function Search(Request $request)
{
    // Get the search query from the request
    $searchQuery = $request->input('name');

    // Fetch products from the database where the name is like the search query
    $data = Product::where('name', 'LIKE', '%' . $searchQuery . '%')->get();

    // Return the view with the data (search results)
    return redirect('product', compact('data'));
}

}

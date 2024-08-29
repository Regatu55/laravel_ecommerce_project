<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
{
    $products = Product::all();
    return view('product-list', compact('products'));
}
public function productCart()
{
    return view('cart-list'); 
}
    public function addproductToCart(Request $request)
    {
       
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity', 1);
        $cartItemId = $request->input('cart_item_id');

        $product = Product::find($productId);

        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            
      
            $cart[$productId]['quantity'] += $quantity;
        } else {
            // Add new item to the cart
            $cart[$productId] = [
               
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => $quantity,
                "image" => $product->image
            ];
        }
        session()->put('cart', $cart);

        
        $totalQuantity = 0;
        foreach ($cart as $item) {
            $totalQuantity += $item['quantity'];
        }
        return response()->json(['message' => 'Cart updated', 'cartCount' => $totalQuantity], 200);
    }

        
    public function deleteItem(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product successfully deleted.');


        }
    }

    //    to update quantity
    public function updateQuantity(Request $request)
{
    $cart = session()->get('cart');

    if($cart && isset($cart[$request->id])) {
        $cart[$request->id]['quantity'] = $request->quantity;
        session()->put('cart', $cart);

        return response()->json([
            'success' => true,
            'message' => 'Quantity updated successfully',
            'subtotal' => $cart[$request->id]['quantity'] * $cart[$request->id]['price'],
            'total' => $this->calculateTotal($cart)
        ]);
    }

    return response()->json(['success' => false, 'message' => 'Failed to update quantity']);
}

public  function calculateTotal($cart)
{
    $total = 0;
    foreach ($cart as $item) {
        $total += $item['price'] * $item['quantity'];
    }
    return $total;
}

}

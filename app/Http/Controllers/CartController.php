<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Electronicstore;
use Gloudemans\Shoppingcart\Facades\Cart;
 

class CartController extends Controller
{
     public function index()
    {
		$items=Cart::content();
        return view('store.cartItems',compact('items'));
    }
    public function addToCart($id)
    {
		
    $product = Electronicstore::find($id);
 
            $cartitem = Cart::add([
                        'id' =>$product->id ,
                        "name" => $product->title,
                        "price" => $product->price,
						"qty" => 1,
                        "imgpath" => $product->imgpath
                    ]);
               return back();
        
        
	}
	public function store(Request $request)
    {
                                         // get all items
     $products = Cart::content();
     
                                        // iterate through the products and store them into the database
     foreach($products as $product){
         Order::create([
             'product_id' => $product->id,
             'customer_id' => auth()->id(),
         ]);
     }
     
     return back();
 }
	public function cartupdate(Request $request,$rowId)
    {
		 
           Cart::update($rowId,$request->qty );
		    return back();
	}
	public function cartremove($rowId)
	{
		Cart::remove($rowId);
		 return back();
	}

    public function destroy()
    {
	 Cart::destroy();
	 return redirect('store');
    }
    
    }


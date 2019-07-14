<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Customer;
class CustomerController extends Controller

{   public function store(Request $request) //store customer data in customer table & order data in orders table
    {
		
        $customer = new Customer;
        $data = $this->validate($request, [
            'name'=>'required',
			'phone'=>'required',
            'email'=>'required',
            
        ]);
   
        $customer->saveCustomer($data);
		
		$id=$customer->id;
		$name=$customer->name;
		$phone=$customer->phone;
		$email=$customer->email;
		$subtotal=Cart::subtotal();
         DB::table('orders')->insert(
    array('customer_id' =>$id,'customer_name' => $name,'customer_phone' => $phone,'customer_email' => $email,'total_price'=>$subtotal)
);
   
	 $contents=Cart::content();
	 
	foreach($contents as $content)
	{
		 DB::table('orders')->insert(
    array('product_id'=>$content->id,'product_name'=>$content->name,'product_price'=>$content->price,'qty'=>$content->qty)
	);
	}                                  // after saving cart data destroy cart to get new cart 
	   Cart::destroy();
       return redirect('store')->with('success','your data successfully enrollrd');

    
	
	}
}
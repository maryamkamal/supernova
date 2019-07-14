<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Customer ;
class Order extends Model
{
	protected $fillable=['customer_id','customer_name','customer_phone','customer_email','product_id','product_name','product_price','total_price'];

     public function products()
    {
        return $this->hasMany('App\Product');
    }
	
	
}

<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
		'imgpath'=>$product['imgpath'],
		'title'=>$product['title'],
		'description'=>$product['description'],
		'price'=>$product['price']]);
		$product->save();
		
    }
}

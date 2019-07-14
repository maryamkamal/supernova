<?php
 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use DB;
use Illuminate\Http\Request;
use App\Electronicstore;

 
class ElectronicstoreController extends Controller
{
 
    public function index()
    {
		$products = DB::table('electronicstores')->paginate(15);
      
        return view('store.store', compact('products'));
    }
	                           // seaarch with product name 
	public function search()
{
	$products = Electronicstore::all();
	$search_item = Input::get ( 'search_item' );
    $item = Electronicstore::where('title','LIKE','%'.$search_item.'%')->get();
    if(count($item) > 0){
		$products=$item;
        return view('store.store',compact('products'))->withDetails($item)->withQuery ( $search_item );
	}
    else 
	{
		return view ('store.store',compact('products'))->withMessage('No Details found. Try to search again !');
}
}

}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
    	// \Session::forget('name1');
    	
    	$name =  \Session::get('name');
    	$extract =  \Session::get('extract');
    	$quantity =  \Session::get('quantity');
    	$price =  \Session::get('price');
    	// \Session::forget('name');
    	// \Session::forget('extract');
    	// \Session::forget('quantity');
    	// \Session::forget('price');

    	$data = array(
    			'name' => $name[0],
    			'extract' =>$extract[0],
    			'quantity' =>$quantity[0],
    			'price' => $price[0]
    	 );
    	// dd($data);
    	return view("cart",compact('data'));;
    }

    public function addtocart(Request $request)
    {
		// \Session::push('data',array());
    	
    		\Session::push('name',$request->name);
    		\Session::push('extract',$request->extract);
    		\Session::push('quantity',$request->quantity);
			\Session::push('price',$request->price);

    	// return \Session::get('name1');
    	// echo \Session::get('extract') ,"<br>";
    	// echo \Session::get('quantity') ,"<br>";
    	// echo \Session::get('price') ,"<br>";
    	 // \Session::forget('name');
    	 //  \Session::forget('extract');
    	 //   \Session::forget('quantity');
    	 //    \Session::forget('price');
    	
    }
}

// array("name" => $request->name,
//     		"extract" => $request->extract,
//     		"quantity" => $request->quantity,
//     		"price"		=> $request->price)
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Customer;

class CustomerController extends Controller
{
    public function index(){

    	$customers = \App\Customer::all();
    	return view('customers')->with('customers', $customers);
    }


    public function getCustomer($id){
    	$customer = \App\Customer::find($id);
    	//echo $customer->name;
    	return view('customer')->with('customer',$customer);

    	//{{ -- <li> {{ link_to_route( 'customer', $customer->name, array($customer->id) ) }} </br></br> </li> --}}
    }

    public function newCustomer(){
    	return view('newCustomer');
    }

    public function postCustomer(Request $request){

    	//dd(Input::all());

    	//$post = new Post;
    	//$name = Input::get('name');
    	//echo $request->name."</br>";
    	//echo $request->email."</br>";
    	//echo $request->address;
    	

    	$cust = new Customer;
    	$cust->name = $request->name;
    	$cust->email = $request->email;
    	$cust->address = $request->address;
    	$cust->save();
    	$customers = \App\Customer::all();
    	return view('customers')->with('customers', $customers);

    	return view('customers');

    }
}

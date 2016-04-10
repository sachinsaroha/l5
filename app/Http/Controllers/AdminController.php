<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Customer;

class AdminController extends Controller
{
	public $restful = true;
    
    public function index(){
    	
    	return view('index');
    	//echo "index method";
    }

    public function getData(){
    	
    	$dat=['hi', 'this', 'is', 'new', 'data1'];
    	return view('displayDataView')->with('data',$dat);
    }	

    public function displayID($id){
        
        $customer = Customer::find($id);
        //echo "Customer : ".$customer->name;
        $dat = $customer->name;
        return view('displayDataView')->with('data', $dat);
    }
}

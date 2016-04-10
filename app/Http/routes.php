<?php



Route::get('/data/{id}', [ 'uses' => 'AdminController@displayID']);






Route::get('/data', [ 'uses' => 'AdminController@getData']);

Route::get('datat/{id}', function($id){
	echo $id;
	//echo "hii";
	//$data = ['sumit','akshay','sachin'];
	//return view('displayDataView')->with('data', $data);
});


Route::get('/customer', function(){
	$customer= App\Customer::find(1);
	//echo "<pre>";
	//print_r($customer);
	echo $customer->name;
});

Route::get('/', function(){
	echo "Welcome";
});


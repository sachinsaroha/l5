<?php


Route::get('/', function(){
	echo "Welcome";
});

Route::get('/customers', [ 'as' => 'customers', 'uses' =>'CustomerController@index']);

Route::get('/customer/{id}', [ 'as' => 'customer','uses' =>'CustomerController@getCustomer']);

Route::get('/newcustomer', [ 'as' => 'newcustomer', 'uses' =>'CustomerController@newCustomer']);

Route::post('/postcustomer', [ 'as' => 'postcustomer', 'uses' =>'CustomerController@postCustomer']);

/*

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

*/
<!DOCTYPE html>
<html>
    <head>
        <title>Index</title>

        
    </head>
    <body>
        <div class="container">
            <div class="content">
                <h1>Test website</h1>
                @foreach($customers as $customer)
                    
                    <a href="{{ route('customer', array('id' => $customer->id)) }}"> {{$customer->name}}</a> </br></br>
                    
                @endforeach
                    <a href="{{ route('newcustomer') }}"> Add new customer </a> </br></br>
            </div>
        </div>
    </body>
</html>

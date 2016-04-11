<!DOCTYPE html>
<html>
    <head>
        <title>Index</title>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <h1>Test website new customer</h1>
                
                {!! Form::open(array('route' => 'postcustomer')) !!}

                {!! Form::label('namelabel', 'Name: '); !!}
                {!! Form::text('name',null); !!} </br>
                {!! Form::label('emaillabel', 'Email: '); !!}
                {!! Form::text('email',null); !!} </br>
                {!! Form::label('addresslabel', 'Address: '); !!}
                {!! Form::text('address',null); !!} </br>
                {!! Form::submit('Submit'); !!}
                {!! Form::close() !!}


            </div>
        </div>
    </body>
</html>

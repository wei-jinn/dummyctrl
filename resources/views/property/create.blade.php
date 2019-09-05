<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create</title>

    <style>

        body{
            font-family: "Century Gothic";
            text-align: center;
        }

        div{



        }
    </style>
</head>
<body>

<h1>You are in create page</h1>



    <h1>Create Property</h1>



    {!! Form::open(['method'=>'POST', 'action'=>'PropertiesController@store', 'files'=>true]) !!}
    {{csrf_field()}}
    <div class="'form-group">

        {!! Form::label('name', 'Property Name:') !!}
        {!! Form::text('name',null, ['class'=>'form-control'])!!}
        {{csrf_field()}}
    </div>

<div class="'form-group">

    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address',null, ['class'=>'form-control'])!!}
    {{csrf_field()}}

</div>

<div class="form-group">
    {!! Form::label('type', 'Type') !!}
    {!! Form::select('type',array( 0 =>'Condominium', 1 => 'Double Storey', 2 => 'Bungalow'), null, ['class'=>'form-control'])!!}
    {{csrf_field()}}

</div>

    <div class="form-group">
        {!! Form::label('file', 'Photo') !!}
        {!! Form::file('file', null,['class'=>'form-control'])!!}
        {{csrf_field()}}

    </div>

<div class="'form-group">

    {!! Form::label('price', 'Price:') !!}
    {!! Form::text('price',null, ['class'=>'form-control'])!!}
    {{csrf_field()}}

</div>



    <div>

        {!! Form:: submit('Create Property', ['class'=>'btn btn-primary'])!!}
        {{csrf_field()}}
        {!! Form::close() !!}

    </div>

    <div>


    </div>


</body>
</html>

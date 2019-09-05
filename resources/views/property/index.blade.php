<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index</title>

    <style>


        body{
            font-family: "Century Gothic";
        }
        table {
            table-layout: auto;
            width: 100%;
        }

    </style>
</head>
<body>
<h1>You are in index page</h1>

<h1>Properties Main Page</h1>

<table class="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Photo</th>
        <th>Price</th>
        <th>Type</th>
        <th>Created</th>
        <th>Updated</th>
    </tr>
    </thead>
    <tbody>

    @if($properties)

        @foreach($properties as $property)

            <tr>
                <td>{{$property->id}}</td>
                <td><a href="{{route('property.edit', $property->id)}}">{{$property->name}}</a></td>
                <td>{{$property->address}}</td>

                <td><img height="50" src="{{$property->file ? $property->file :"No photo displayed"}}" alt=""></td>
                <td>{{$property->price}}</td>
                @switch($property->type)
                    @case(0)
                    <td>Condominium</td>
                    @break

                    @case(1)
                    <td>Double Storey</td>
                    @break

                    @case(1)
                    <td>Bungalow</td>
                    @break

                    @default
                    <span>Undefined</span>
                @endswitch

                <td>{{$property->created_at->diffForHumans()}}</td>
                <td>{{$property->updated_at->diffForHumans()}}</td>
            </tr>

        @endforeach

    @endif

    </tbody>
</table>


</body>
</html>

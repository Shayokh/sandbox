@extends('layouts.dark')

@section('content')
    <div class="row">
        @foreach($bikes as $bike)
            <div class="col-md-3 col-xs-12">
                @if($bike->image)
                    <img class="img img-thumbnail" style="width: 200px; height: 200px" src="{{ 'images/bikes/'.$bike->image }}"><br/><br/>
                @endif
                <h4><strong>{{ $bike->brand }}</strong></h4>
                <p>Model: {{ $bike->model }}</p>
                <p>Stock: {{ $bike->quantity - $bike->sold_item }}</p>
                <p>Price: {{ $bike->price }}</p>
                <p>CC: {{ $bike->cc }}</p>
                <p>Color: {{ $bike->color }}</p>
                <p>Warranty: {{ $bike->warranty }}</p>
            </div>
        @endforeach
    </div>
@stop

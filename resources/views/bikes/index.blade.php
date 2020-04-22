@extends('adminlte::page')

@section('title') Bikes @stop

@section('content_header')
    <h1>Bikes</h1>
@stop

@section('content')
    <div class="panel">

        <div class="panel-heading">
            <a href="{{ route('bike.new') }}" class="btn btn-sm btn-success pull-right">Add Bike</a>
        </div>

        <div class="panel-body">
            <table class="table table-striped table-hover table-bordered">
                <tbody>
                    <thead>
                        <th>Brand</th>
                        <th>Model</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Country</th>
                        <th>Quality</th>
                        <th>Quantity</th>
                        <th>Sold Item</th>
                        <th>Stock</th>
                        <th>Income</th>
                        <th>CC</th>
                        <th>Color</th>
                        <th>Warranty</th>
                        <th>Comment</th>
                        <th>Image</th>
                    </thead>
                    @foreach($bikes as $bike)
                    <tr>
                        <th>{{ $bike->brand }}</th>
                        <th>{{ $bike->model }}</th>
                        <th>{{ $bike->category->name }}</th>
                        <th>{{ $bike->price }}</th>
                        <th>{{ $bike->country }}</th>
                        <th>{{ $bike->quality }}</th>
                        <th>{{ $bike->quantity }}</th>
                        <th>{{ $bike->sold_item }}</th>
                        <th>{{ $bike->quantity - $bike->sold_item }}</th>
                        <th>{{ $bike->price * $bike->sold_item }}</th>
                        <th>{{ $bike->cc }}</th>
                        <th>{{ $bike->color }}</th>
                        <th>{{ $bike->warranty }}</th>
                        <th>{{ $bike->comment }}</th>
                        <th>
                            @if ($bike->image)
                                <img class="img img-thumbnail" style="width: 50px;" src="{{ 'images/bikes/'. $bike->image }}">
                            @endif
                        </th>
                        <th>
                            <a href="{{ route('bike.form', $bike->id) }}" class="btn btn-primary btn-xs">Edit</a>
                            <a href="#" data-toggle="modal" data-target="#deleteModal{{ $bike->id }}" class="btn btn-xs btn-danger">Delete</a>
                        </th>
                    </tr>

                        <!-- modal starts -->
                        <div class="modal fade" id="deleteModal{{ $bike->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    {!! Form::open(['class' => 'form-horizontal', 'method' => 'post', 'route' => ['bike.delete', $bike->id]]) !!}
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"> Delete: {{ $bike->model }} </h4>
                                    </div>
                    
                                    <div class="modal-body">
                                        Are you sure you want to delete <code>{{ $bike->model }} ?</code>
                                    </div>
                    
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger', 'data-disable-with' => trans('Deleting...')]) !!}
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                        <!-- modal ends -->
                    @endforeach
                </tbody>
            </table>
        </div>
        {!! $bikes->render() !!}
    </div>
@stop

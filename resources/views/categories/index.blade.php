@extends('adminlte::page')

@section('title') Categories @stop

@section('content_header')
    <h1>Categories</h1>
@stop

@section('content')
    <div class="panel">

        <div class="panel-heading">
            <a href="{{ route('category.new') }}" class="btn btn-sm btn-success pull-right">Add Category</a>
        </div>

        <div class="panel-body">
            <table class="table table-striped table-hover table-bordered">
                <tbody>
                    <thead>
                        <th>Name</th>
                    </thead>
                    @foreach($categories as $category)
                    <tr>
                        <th>{{ $category->name }}</th>
                        <th>
                            <a href="{{ route('category.form', $category->id) }}" class="btn btn-primary btn-xs">Edit</a>
                            <a href="#" data-toggle="modal" data-target="#deleteModal{{ $category->id }}" class="btn btn-xs btn-danger">Delete</a>
                        </th>
                    </tr>

                        <!-- modal starts -->
                        <div class="modal fade" id="deleteModal{{ $category->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    {!! Form::open(['class' => 'form-horizontal', 'method' => 'post', 'route' => ['category.delete', $category->id]]) !!}
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"> Delete: {{ $category->name }} </h4>
                                    </div>
                    
                                    <div class="modal-body">
                                        Are you sure you want to delete <code>{{ $category->name }} ?</code>
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
    </div>
@stop

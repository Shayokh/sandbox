@extends('adminlte::page')

@section('title', 'Add/Edit Category')

@section('css')
    @parent
@stop

@section('content')
    {!! Form::open(['method' => 'post', 'route' => 'category.save']) !!}
    <div class="panel">
        
        <div class="panel-heading">
            <h3>@if ($category->exists) Editing Category: {{ $category->name }} @else Add New Cetgory @endif</h3>
        </div>

        <div class="panel-body">
            
            {!! Form::hidden('id', $category->id) !!}

            <div class="form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">
                <label>Name</label>
                <input class="form-control" type="text" name="name" value="{{ $category->name }}" placeholder="Category Name">
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="panel-footer">
                <input type="submit" name="submit" value="Save" class="btn btn-success btn-md">
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@stop

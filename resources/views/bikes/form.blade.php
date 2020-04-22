@extends('adminlte::page')

@section('title', 'Add/Edit Bike')

@section('css')
    @parent
@stop

@section('content')
    {!! Form::open(['method' => 'post', 'route' => 'bike.save', 'files'=>true]) !!}
    <div class="panel">
        
        <div class="panel-heading">
            <h3>@if ($bike->exists) Editing Bike: {{ $bike->model }} @else Add New Bike @endif</h3>
        </div>

        <div class="panel-body">
            
            {!! Form::hidden('id', $bike->id) !!}

            <div class="form-group has-feedback {{ $errors->has('brand') ? 'has-error' : '' }}">
                <label>Brand</label>
                <input class="form-control" type="text" name="brand" value="{{ $bike->brand }}" placeholder="Bike Brand">
                @if ($errors->has('brand'))
                    <span class="help-block">
                        <strong>{{ $errors->first('brand') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback {{ $errors->has('model') ? 'has-error' : '' }}">
                <label>Model</label>
                <input class="form-control" type="text" name="model" value="{{ $bike->model }}" placeholder="Bike Model">
                @if ($errors->has('model'))
                    <span class="help-block">
                        <strong>{{ $errors->first('model') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback {{ $errors->has('category_id') ? 'has-error' : '' }}">
                <label>Category</label>
                {!! Form::select('category_id', $categoryList, $bike->category_id, ['class' => 'form-control']) !!}
                @if ($errors->has('category_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('category_id') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback {{ $errors->has('price') ? 'has-error' : '' }}">
                <label>Price</label>
                <input class="form-control" type="text" name="price" value="{{ $bike->price }}" placeholder="Price">
                @if ($errors->has('price'))
                    <span class="help-block">
                        <strong>{{ $errors->first('price') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback {{ $errors->has('country') ? 'has-error' : '' }}">
                <label>Country</label>
                <input class="form-control" type="text" name="country" value="{{ $bike->country }}" placeholder="Country">
                @if ($errors->has('country'))
                    <span class="help-block">
                        <strong>{{ $errors->first('country') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label>Quality</label>
                <input class="form-control" type="text" name="quality" value="{{ $bike->quality }}" placeholder="Quality">
            </div>

            <div class="form-group has-feedback {{ $errors->has('quantity') ? 'has-error' : '' }}">
                <label>Quantity</label>
                <input class="form-control" type="text" name="quantity" value="{{ $bike->quantity }}" placeholder="Quantity">
                @if ($errors->has('quantity'))
                    <span class="help-block">
                        <strong>{{ $errors->first('quantity') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback {{ $errors->has('sold_item') ? 'has-error' : '' }}">
                <label>Sold Item</label>
                <input class="form-control" type="text" name="sold_item" value="{{ $bike->sold_item }}" placeholder="The item which is sold">
                @if ($errors->has('sold_item'))
                    <span class="help-block">
                        <strong>{{ $errors->first('sold_item') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback {{ $errors->has('cc') ? 'has-error' : '' }}">
                <label>CC</label>
                <input class="form-control" type="text" name="cc" value="{{ $bike->cc }}" placeholder="CC">
                @if ($errors->has('cc'))
                    <span class="help-block">
                        <strong>{{ $errors->first('cc') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback {{ $errors->has('color') ? 'has-error' : '' }}">
                <label>Color</label>
                <input class="form-control" type="text" name="color" value="{{ $bike->color }}" placeholder="Bike Color">
                @if ($errors->has('color'))
                    <span class="help-block">
                        <strong>{{ $errors->first('color') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback {{ $errors->has('warranty') ? 'has-error' : '' }}">
                <label>Warranty</label>
                <input class="form-control" type="text" name="warranty" value="{{ $bike->warranty }}" placeholder="Warranty">
                @if ($errors->has('warranty'))
                    <span class="help-block">
                        <strong>{{ $errors->first('warranty') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label>Comment</label>
                <input class="form-control" type="text" name="comment" value="{{ $bike->comment }}" placeholder="Comment (If any)">
            </div>

            <div class="form-group">
                <label>Image</label>
                <input type="file" name="image">
            </div>

            <div class="panel-footer">
                <input type="submit" name="submit" value="Save" class="btn btn-success btn-md">
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@stop

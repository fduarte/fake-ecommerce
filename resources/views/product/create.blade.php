@extends('layouts.app')

@section('title', 'Create Product')

@section('content')

    <h2>Create Product</h2>
    <p>In progress...</p>

    <form action="{{ route('product.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="product-name">Product Name</label>
            <input id="product-name" name="product_name" type="text" value="{{ old('product_name') }}" class="form-control" @error('product_name') is-invalid @enderror">
            @error('product_name')
            <span class="text-danger">{{ $errors->first('product_name') }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <input id="description" name="description" type="text" value="{{ old('description') }}" class="form-control" @error('description') is-invalid @enderror">
            @error('description')
            <span class="text-danger">{{ $errors->first('description') }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="style">Description</label>
            <input id="description" name="description" type="text" value="{{ old('description') }}" class="form-control" @error('description') is-invalid @enderror">
            @error('description')
            <span class="text-danger">{{ $errors->first('description') }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="brand">Description</label>
            <input id="description" name="description" type="text" value="{{ old('description') }}" class="form-control" @error('description') is-invalid @enderror">
            @error('description')
            <span class="text-danger">{{ $errors->first('description') }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="url">Description</label>
            <input id="description" name="description" type="text" value="{{ old('description') }}" class="form-control" @error('description') is-invalid @enderror">
            @error('description')
            <span class="text-danger">{{ $errors->first('description') }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="product_type">Description</label>
            <input id="description" name="description" type="text" value="{{ old('description') }}" class="form-control" @error('description') is-invalid @enderror">
            @error('description')
            <span class="text-danger">{{ $errors->first('description') }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="shipping_price">Description</label>
            <input id="description" name="description" type="text" value="{{ old('description') }}" class="form-control" @error('description') is-invalid @enderror">
            @error('description')
            <span class="text-danger">{{ $errors->first('description') }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="note">Description</label>
            <input id="description" name="description" type="text" value="{{ old('description') }}" class="form-control" @error('description') is-invalid @enderror">
            @error('description')
            <span class="text-danger">{{ $errors->first('description') }}</span>
            @enderror
        </div>

    </form>

@endsection

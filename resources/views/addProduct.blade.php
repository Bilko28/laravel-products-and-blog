@extends('layouts.app')

@section('content')
<form method="post" action="/product/add">
    @csrf
    <div>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" />

        @error('name')
            <p class="text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="description">Description</label>
        <input type="text" id="description" name="description" />

        @error('description')
            <p class="text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="image">Image URL</label>
        <input type="text" id="image" name="image" />

        @error('image')
            <p class="text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="quantity">Quantity</label>
        <input type="text" id="quantity" name="quantity" />

        @error('quantity')
            <p class="text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
       <label for="price">Price</label>
        <input type="text" id="price" name="price" />

        @error('price')
            <p class="text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <input type="submit" value="Add Product" />
</form>
@endsection

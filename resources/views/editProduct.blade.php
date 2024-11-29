@extends('layouts.app')

@section('content')
<form method="post" action="/product/edit/{{ $product->id }}">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Name</label>
        <input class="border-2" type="text" id="name" name="name" value="{{ $product->name }}" />

        @error('name')
        <p class="text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="description">Description</label>
        <input class="border-2" type="text" id="description" name="description" value="{{ $product->description }}" />

        @error('description')
        <p class="text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="image">Image URL</label>
        <input class="border-2" type="text" id="image" name="image" value="{{ $product->image }}" />

        @error('image')
        <p class="text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="quantity">Quantity</label>
        <input class="border-2" type="text" id="quantity" name="quantity" value="{{ $product->quantity }}" />

        @error('quantity')
        <p class="text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="price">Price</label>
        <input class="border-2" type="text" id="price" name="price" value="{{ $product->price }}" />

        @error('price')
        <p class="text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <input type="submit" value="Edit Product" />
</form>
@endsection

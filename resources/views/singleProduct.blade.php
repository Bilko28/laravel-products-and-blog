@extends('layouts.app')

@section('content')
<h1>{{ $product->name }}</h1>
<p>{{ $product->description }}</p>

<form method="post" action="/product/{{ $product->id }}">
    @method('DELETE')
    @csrf

    <input class="bg-red-700" type="submit" value="Delete Product" />
</form>

<a href="/product/edit/{{ $product->id }}">Edit Product</a>

@if (session('status'))
    <p>{{ session('status') }}</p>
@endif
@endsection

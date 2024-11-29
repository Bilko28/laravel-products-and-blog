@extends('layouts.app')

@section('content')
<h1 class="text-red-400">{{ $title }}</h1>
<h2>{{ $subtitle }}</h2>

<form method="get">
{{--    You do not need @csrf in a GET form - only post --}}
    <label for="search">Search:</label>
    <input class="border-2" type="text" id="search" name="search" />

    <input type="submit" value="Search" />
</form>

<main class="grid grid-cols-1 sm:grid-cols-3 gap-5">
    @forelse($products as $product)
        <a href="/product/{{ $product->id }}">
            <div class="border-2 p-2">
                <h3>{{ $product->name }}</h3>
                <p>£{{ $product->price }}</p>

                @if($product->quantity === 0)
                    <p>Out of stock! Sorry</p>
                @else
                    <p>Quantity in stock: {{ $product->quantity }}</p>
                @endif
            </div>
        </a>
    @empty
        <p>Oh no - no products found</p>
    @endforelse
</main>
@endsection

@extends('layouts.app')

@section('content')
@foreach($posts as $post)
    <a href="/blog/{{ $post->id }}">
        <div class="my-5">
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->author }}</p>
            <p>{{ $post->content }}</p>
        </div>
    </a>
@endforeach
@endsection

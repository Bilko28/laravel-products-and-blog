@extends('layouts.app')

@section('content')
<h1>{{ $post->title }}</h1>
<p>{{ $post->author }}</p>
<p>{{ $post->content }}</p>
@endsection

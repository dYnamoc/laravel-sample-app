@extends('layouts.app')

@section('content')
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->created_at->format('Y-m-d H:i') }}</p>
    <p>{{ $post->content }}</p>

    <a href="{{ route('posts.index') }}">← Back to list</a>
@endsection

@extends('layouts.app')

@section('content')
    <h2>Edit Post</h2>

    <form method="POST" action="{{ route('posts.update', $post) }}">
        @csrf
        @method('PUT')

        <label>
            Title
            <input type="text" name="title" value="{{ old('title', $post->title) }}">
        </label>
        @error('title')
            <small style="color:red;">{{ $message }}</small>
        @enderror

        <label>
            Content
            <textarea name="content" rows="5">{{ old('content', $post->content) }}</textarea>
        </label>
        @error('content')
            <small style="color:red;">{{ $message }}</small>
        @enderror

        <button type="submit">Update</button>
    </form>
@endsection

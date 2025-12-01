@extends('layouts.app')

@section('content')
    <h2>New Post</h2>

    <form method="POST" action="{{ route('posts.store') }}">
        @csrf

        <label>
            Title
            <input type="text" name="title" value="{{ old('title') }}">
        </label>
        @error('title')
            <small style="color:red;">{{ $message }}</small>
        @enderror

        <label>
            Content
            <textarea name="content" rows="5">{{ old('content') }}</textarea>
        </label>
        @error('content')
            <small style="color:red;">{{ $message }}</small>
        @enderror

        <button type="submit">Create</button>
    </form>
@endsection

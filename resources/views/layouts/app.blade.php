<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel Sample App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
</head>
<body>
    <main class="container">
        <header>
            <h1>Laravel Sample App</h1>
            <nav>
                <a href="{{ route('posts.index') }}">Posts</a>
                <a href="{{ route('posts.create') }}">New Post</a>
            </nav>
            <hr>
        </header>

        @if (session('success'))
            <article style="background:#e6ffed;padding:10px;margin-bottom:10px;">
                {{ session('success') }}
            </article>
        @endif

        @yield('content')
    </main>
</body>
</html>

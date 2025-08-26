@php
    use App\Models\Article;
    $articleCount = Article::count();
@endphp


<!DOCTYPE html>
<html lang="en" class="h-full w-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Articles</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="w-full h-full flex flex-col">
        <header class="bg-gray-200 text-gray-800 p-4 flex flex-row content-center items-center gap-4">
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="/" class="{{ Route::is('landing') ? 'text-gray-800' : 'text-gray-400 hover:text-gray-800 hover:underline' }}">Home</a></li>
                    <li><a href="/article" class="{{ Route::is('articles.index') ? 'text-gray-800' : 'text-gray-400 hover:text-gray-800 hover:underline' }}">Articles</a></li>
                </ul>
            </nav>
        </header>
        <main class="flex-1 min-h-0 p-4 bg-gray-200">
            @yield('content')
        </main>
        <footer class="bg-gray-200 text-gray-400 p-4">
            <p>articles count -> <span class="text-gray-800 pl-2">{{ $articleCount }}</span></p>
        </footer>
</body>
</html>

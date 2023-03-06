<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Data Api</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    </head>
    <body class="bg-gray-100 text-gray-700">
    <div class="mx-auto px-4">
    <h1 class="text-3xl font-bold mb-4 text-center text-gray-800">INFORMATION</h1>
        <div class="grid grid-cols-4 gap-4 my-10">
            @foreach($posts as $post)
                <div class="container bg-white border border-gray-200 p-5 rounded-lg shadow-md hover:shadow-lg transform hover:scale-105 transition duration-300 ease-in-out">
                    <h2 class="font-bold text-lg mb-4">{{ $post -> title}}</h2>
                    <p class="text-sm">{{ $post->excerpt}}</p>
                    <p class="text-sm text-right">{{ $post->published_at}}</p>
                    <p></p>
                </div>
            @endforeach
        </div>
        <div class="mb-10">
            {{ $posts->links() }}
        </div>      
    </div>            
</body>

</html>

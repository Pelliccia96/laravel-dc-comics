<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>laravel-dc-comics</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    @vite('resources/js/app.js')
</head>
<body class="bg-dark">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="text-white">{{ $title }}</h1>
        </div>
        <div class="py-5 text-center border rounded">
            <a href="{{route("comics.index")}}"><button class="btn btn-primary">Go to Index</button></a>
            <a href="{{route("comics.show")}}"><button class="btn btn-info mx-4">Go to Show</button></a>
            <a href="{{route("comics.create")}}"><button class="btn btn-success">Go to Create</button></a>
        </div>
    </div>
</body>
</html>

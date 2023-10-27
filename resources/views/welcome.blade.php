<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 g-3">

                @forelse ($movies as $movie)
                <div class="col">
                    <div class="card">
                        <img src="" class="card-img-top" alt="">
                        <div class="card-body">
                            <p>{{$movie->title}}</p>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col">
                    <p>No movies found!</p>
                </div>
                @endforelse
            </div>
        </div>
    </main>

</body>

</html>
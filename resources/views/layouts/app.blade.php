<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Bookstore - @yield('title')</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-100 grid grid-cols-[250px_1fr] p-4 gap-4">
        <div class="bg-gray-100 border-r border-gray-300">
            @section('sidebar')
                Menu
            @show
        </div>

        <div class="container mx-auto">
            @yield('content')
        </div>
    </body>
</html>
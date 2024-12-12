<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bookstore</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold">Bookstore</h1>
        <div class="grid gap-4 grid-cols-4">
        @foreach ($books as $book)

            <div class="border border-gray-300 rounded-md p-4 m-4">
                <h2 class="text-lg font-bold">{{ $book->title }}</h2>
                <p class="text-sm text-gray-500">{{ $book->author }}</p>
                <p class="text-sm text-gray-500">{{ $book->publisher }}</p>
                <p class="text-sm text-gray-500">{{ $book->publication_date }}</p>
                <p class="text-sm text-gray-500">{{ $book->isbn }}</p>
                <p class="text-sm text-gray-500">{{ $book->description }}</p>
                <img src="{{ $book->image_url }}" alt="{{ $book->title }}" class="w-full h-auto">
            </div>
            @endforeach
        </div>

    </div>
</body>
</html>

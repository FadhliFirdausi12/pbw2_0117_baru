<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
    <link rel="stylesheet" href="{{ asset('css/list.css') }}">
</head>
<body>
    <a href="/admin">
        <div class="back">
            <h1 class="teks-back">Back</h1>
        </div>
    </a>
    <div class="search">
        <form action="/search" method="get">
            <input type="text" placeholder="Search.." name="search">
        </form>
    </div>

    @foreach($tasks as $task)
    <div class="notes1">
        <h2 class="judul-notes">{{ $task->title }}</h2>
        <p class="desc-notes">{{ $task->end_date }} - {{ $task->notes }}</p>
        <p class="text-notes">Notes</p>
        <img class="logo-notes" src="{{ asset('storage/' . $task->photo) }}" alt="Task Image">
        <a href="{{ route('tasks.edit', $task->id) }}">
            <h4 class="edit">Edit</h4>
        </a>
    </div>
    @endforeach

    <footer>
        <a href="{{ route('tasks.create') }}"><img class="gambar-plus" src="./images2/foto-plus.png" alt=""></a>
    </footer>
</body>
</html>

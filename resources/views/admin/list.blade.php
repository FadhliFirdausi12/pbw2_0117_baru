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
        <form action="{{ route('tasks.index') }}" method="get">
            <input type="text" placeholder="Search.." name="search" value="{{ request('search') }}">
            <button type="submit"><img class="search-icon" src="{{ asset('images2/cari3.png') }}" alt="search"></button>
        </form>
    </div>

    @if($tasks->isEmpty())
    <div class="no-results">
        <p>No tasks found matching "{{ request('search') }}".</p>
    </div>
    @else

    @foreach($tasks as $task)
    <div class="notes1">
        <h2 class="judul-notes">{{ $task->title }}</h2>
        <p class="desc-notes">{{ $task->created_at->format('d/m/Y') }}</p>
        <p class="text-notes">{{ Str::limit($task->note, 50, '...') }}</p>

        <div class="photo">
            @if ($task->photo)
                <img class="photo-icon" src="{{ asset('images2/photo.png') }}" alt="photo" title="This task includes a photo">
                <span class="photo-name">{{ Str::limit($task->photo, 50, '...') }}</span>
            @else
                <span class="no-photo" style="color: grey;">No photo</span>
            @endif
        </div>
       
        
        <a href="{{ route('tasks.show', $task->id) }}">
            <img class="view" src="{{ asset('images2/view.jpg') }}" alt="view">
        </a>

        <div class="menu-container">
        <div class="menu">
            <button class="menu-button">☰</button>
            <div class="dropdown">
                <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this task?');">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>

    </div>
    @endforeach
    @endif

    <footer>
        <a href="{{ route('tasks.create') }}"><img class="gambar-plus" src="{{ asset('images2/foto-plus.png') }}" alt="add task"></a>
    </footer>
</body>
</html>

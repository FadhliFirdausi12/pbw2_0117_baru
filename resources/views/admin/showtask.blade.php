<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Details</title>
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
</head>
<body>
    <a href="{{ route('tasks.index') }}">
        <div class="back">
            <h1 class="teks-back">Back</h1>
        </div>
    </a>

    <div class="task-details">
        <h1 class="task-title">{{ $task->title }}</h1>
        <p class="task-date">Created At: {{ $task->created_at->format('d/m/Y') }}</p>
        <p class="task-note">{!! nl2br(e($task->note)) !!}</p>

        @if ($task->photo)
            <div class="photo-section">
                <h2>Attached Photo:</h2>
                <p>Photo Path: {{ $task->photo }}</p>
                <img class="task-photo" src="{{ asset('storage/' . $task->photo) }}" alt="Task Photo">
            </div>
        @else
            <p class="no-photo" style="color: grey;">No photo attached</p>
        @endif
    </div>

    <footer>
        <a href="{{ route('tasks.edit', $task->id) }}"><img class="edit" src="{{ asset('images2/pen.png') }}" alt="add task"></a>
    </footer>
</body>
</html>

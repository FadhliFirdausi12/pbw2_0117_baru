<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">

</head>
<body>
    <div class="my-task">
        <img class="foto" src="{{ asset('images2/pen.png') }}" alt="">
        <h1 class="teks">Edit</h1>
    </div>

    <a href="{{ route('tasks.list') }}">
        <div class="back">
            <h2 class="back-text">Back</h2>
        </div>
    </a>
    
    <div class="fitur">
        <form action="{{ route('tasks.update', $task->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <input type="text" name="title" id="title" placeholder="Task Title" value="{{ $task->title }}" style="font-size: 30px" required> 
            <textarea name="note" id="note" style="font-size: 30px">{{ $task->note }}</textarea>
            <input type="date" name="created_at" id="created_at" value="{{ $task->created_at ? $task->created_at->format('Y-m-d') : '' }}" style="font-size: 30px" required>
            <input type="file" name="photo" id="photo" placeholder="Add photo" style="font-size: 30px" readonly> 
            
            <button type="submit" style="font-size: 30px; margin-top: 20px;">DONE</button>
        </form>
    </div>
</body>
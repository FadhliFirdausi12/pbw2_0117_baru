<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Task</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/task.css') }}">

</head>
<body>
    <div class="my-task">
        <img class="foto" src="./images2/add-task.png" alt="">
        <h1 class="teks">TASK</h1>
    </div>

    <a href="{{ $hasTasks ? route('tasks.index') : route('mytask') }}">
        <div class="back">
            {{-- <img class="back-image" src="./images2/back-2.png" alt=""> --}}
            <a href="{{ $hasTasks ? route('tasks.index') : route('mytask') }}" class="back-text">Back</h2>
        </div>
    </a>

    
    <div class="fitur">
        <form action="{{ route('tasks.store') }}" method="POST" enctype="multipart/form-data" id="task-form">
            @csrf
            <input type="text" name="title" id="title" placeholder="Task Tittle" style="font-size: 30px"> 
            <textarea name="note" id="note" placeholder="Note" style="font-size: 30px"></textarea>
            <br>
            <p class="time">Time/Deadline:</p>
            <input type="date" name="created_at" id="created_at" style="font-size: 30px">
            <input type="file" name="photo" id="photo" placeholder="Add photo" style="font-size: 30px" readonly> 

            <div class="ceklis-lef" id="submit-task">
                <button type="submit" >
                <img src="{{ asset('images2/check.png') }}" alt="Submit Task">
                </button>
            </div>

        </form>
    </div>


    <script>

    document.getElementById('photo').addEventListener('change', function() {
        var fileName = this.files[0] ? this.files[0].name : '';
        document.getElementById('file-name').value = fileName; 
    });

    </script>

</body>
</html>
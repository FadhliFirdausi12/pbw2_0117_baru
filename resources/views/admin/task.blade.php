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

    <a href="dashboard">
        <div class="back">
            {{-- <img class="back-image" src="./images2/back-2.png" alt=""> --}}
            <a href="/mytask" class="back-text">Back</h2>
        </div>
    </a>

    
    <div class="fitur">
        <form action="{{ route('tasks.store') }}" method="POST" enctype="multipart/form-data" id="task-form">
            @csrf
            <input type="text" name="title" id="title" placeholder="Task Tittle" style="font-size: 30px"> 
            <input type="text" name="notes" id="notes" placeholder="Notes" style="font-size: 30px">
            <input type="date" name="end_date" id="end_date" style="font-size: 30px">
            <div style="display: flex;" >

              
                <input type="file" name="photo" id="photo" placeholder="Add photo" style="font-size: 30px" readonly> 
                <button type="button" style="width: 80px; background-color: #701414; border: none; border-radius: 10px; margin: 10px" ><img src="./images2/imade.png" alt="" style="height: 50px; width: 50px;"></button>

            </div>
           <!-- {{-- <input type="file"> --}} -->

            <div class="ceklis lef" id="submit-task">
                <button type="submit">
                <img src="./images2/check.png" alt="Submit Task">
                </button>
            </div>

        </form>
    </div>


    <script>
    document.getElementById('submit-task').addEventListener('click', function() {
        document.getElementById('task-form').submit(); // Trigger submit form
    });

    document.getElementById('photo').addEventListener('change', function() {
        var fileName = this.files[0] ? this.files[0].name : '';
        document.getElementById('file-name').value = fileName; 
    });

    // Set CSRF token di header semua request AJAX
    document.addEventListener("DOMContentLoaded", function () {
        let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        fetch('/tasks', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': token,
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                title: 'Test Task',
                notes: 'Some notes',
                end_date: '2024-01-01'
            })
        }).then(response => {
            console.log(response);
        }).catch(err => console.log(err));
    });

    </script>

</body>
</html>
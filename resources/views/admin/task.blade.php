<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <form action="POST">
            <input type="text" name="" id="" placeholder="Task Tittle" style="font-size: 30px"> 
            <input type="text" name="" id="" placeholder="Notes" style="font-size: 30px">
            <input type="date" name="" id="" placeholder="" style="font-size: 30px">
            <div style="display: flex;" >
                <input type="text" name="" id="" placeholder="Add photo" style="font-size: 30px" readonly> 
                <button style="width: 80px; background-color: #701414; border: none; border-radius: 10px; margin: 10px" ><img src="./images2/imade.png" alt="" style="height: 50px; width: 50px;"></button>
            </div>
            {{-- <input type="file"> --}}
        </form>
    </div>

    <div class="ceklis lef">
        <img  src="./images2/check.png" alt="">

    </div>

</body>
</html>
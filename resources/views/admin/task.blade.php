<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
    <link rel="stylesheet" href="{{ asset('css/task.css') }}">

</head>
<body>
    <div class="my-task">
        <img class="foto" src="./images2/foto-task.png" alt="">
        <h1 class="teks">TASK</h1>
    </div>

    <img class="logo" src="./images2/logo-apk.png" alt="">

    <a href="dashboard">
        <div class="back">
            <img class="back-image" src="./images2/back-2.png" alt="">
            <a href="/mytask" class="back-text">Back</h2>
        </div>
    </a>

    
    <div class="fitur">
        <form action="POST">
            <input type="text" name="" id="" placeholder="Task Tittle"> <br>
            <input type="text" name="" id="" placeholder="Notes">
            <input type="file">
            <input class="submit" type="submit" value="Submit">
        </form>
    </div>
    </div>
</body>
</html>
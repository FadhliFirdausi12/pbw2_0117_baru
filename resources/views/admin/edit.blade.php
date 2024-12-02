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
        <img class="foto" src="./images2/pen.png" alt="">
        <h1 class="teks">Edit</h1 >
    </div>

    <a href="dashboard">
        <div class="back">
            {{-- <img class="back-image" src="./images2/back-2.png" alt=""> --}}
            <a href="/mytask" class="back-text">Back</h2>
        </div>
    </a>

    
    <div class="fitur">
        <form action="POST">
            <input type="text" name="" id="" placeholder="List Bandung" style="font-size: 30px"> 
        </form>
        <form action="POST">
            <textarea class="isi" type="text" name="" id="" cols="80" rows="15" placeholder="Write here!!!" style="font-size: 30px"></textarea>
        </form>
        <form> 
            <input type="date" name="" id="" placeholder="Add photo" style="font-size: 30px" readonly>
        </form>
    </div>
    </div>

    <footer>
        <a href="list"><h1>DONE</h1></a>
    </footer>

</body>
</html>
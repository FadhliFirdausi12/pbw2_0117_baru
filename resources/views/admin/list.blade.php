<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <link rel="stylesheet" href="{{ asset('css/list.css') }}">
</head>
<body>
    <a href="task">
        <div class="back">
            {{-- <img class="foto-back" src="./images2/back-2.png" alt=""> --}}
            <h1 class="teks-back">Back</h1>
        </div>
    </a>
    <div class="search">
        <form action="/search" method="get">
            <input type="text" placeholder="Search.." name="search">
            {{-- <button class="submit-button" type="submit"><img class="logo-search" src="./immages2/search.png" alt=""></button> --}}
        </form>
    </div>
    <div class="notes1">
        <h2 class="judul-notes">List Bandung</h2>
        <p class="desc-notes">29/05/24 Wisata di Bandung</p>
        <p class="text-notes">Notes</p>
        <img class="logo-notes" src="./images2/foto-notes-1.png" alt="">
        <a href="edit.html">
            <h4 class="edit">Edit</h4>
        </a>
    </div>
    <div class="notes1">
        <h2 class="judul-notes">List Bandung</h2>
        <p class="desc-notes">29/05/24 Wisata di Bandung</p>
        <p class="text-notes">Notes</p>
        <img class="logo-notes" src="./images2/foto-notes-1.png" alt="">
        <a href="edit.html">
            <h4 class="edit">Edit</h4>
        </a>
    </div>
    <div class="notes1">
        <h2 class="judul-notes">List Bandung</h2>
        <p class="desc-notes">29/05/24 Wisata di Bandung</p>
        <p class="text-notes">Notes</p>
        <img class="logo-notes" src="./images2/foto-notes-1.png" alt="">
        <a href="edit.html">
            <h4 class="edit">Edit</h4>
        </a>
    </div>
    <div class="notes1">
        <h2 class="judul-notes">List Bandung</h2>
        <p class="desc-notes">29/05/24 Wisata di Bandung</p>
        <p class="text-notes">Notes</p>
        <img class="logo-notes" src="./images2/foto-notes-1.png" alt="">
        <a href="edit.html">
            <h4 class="edit">Edit</h4>
        </a>
    </div>

    <footer>
        <h1>MY TASK</h1>
    </footer>
        
    

</body>
</html>
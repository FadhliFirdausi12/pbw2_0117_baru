<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

</head>

<body>
    <div class="navigasi">
        {{-- <time class="jam"  id="clock"></time> --}}
        <ul>
            <li class="profile-menu">
                <img class="logo-profile" src="./images2/profile-logo.png" alt="Profile Photo" id="profile-photo">
                <div class="profile-options" id="profile-options">
                    <a href="editProfile" class="profile-option">Edit Profile</a>
                    <a href="setting" class="profile-option">Settings</a>
                    <a href="logout" class="profile-option">Log Out</a>
                </div>
            </li>
        </ul>
    </div>

    <div id="homepage" class="opening">
        <img class="gambar-opening" src="./images2/opening.png" alt="">
        <h2 class="welcome-text">Welcome To</h2>
        <img class="font" src="./images2/font.png" alt="">
        <p class="deskripsi">We will help you organize your to-do list.</p>
    </div>

    <div class="fitur">
        <a href="mytask">
            <div class="fitur-task">
                <img class="logo-task" src="./images2/logo-task.png" alt="">
                <h3 class="my-task">MY <br>TASK</h3>
            </div>
        </a>

        <a href="calendar.html">
            <div class="fitur-calender">
                <img class="logo-calender" src="./images2/logo-calender.png" alt="">
                <h3 class="task-calender">TASK <br>CALENDAR</h3>
            </div>
        </a>

        <div class="foto-line">
            <img class="garis" src="./images2/Line-2.png" alt="">
            <img class="garis-2" src="./images2/Line-2.png" alt="">
        </div>

        <div class="service1">
            <img class="foto-service1" src="./images2/foto-grup2.png" alt="">
            <h2 class="judul-service1">Kesempurnaan <br>Penjadwalan</h2>
            <p class="deskripsi-service1">Mengelola penjadwalan tugas <br>sehari hari hingga merencanakan <br>
                proyek-proyek besar.</p>
        </div>

        <div class="service2">
            <img class="foto-service2" src="./images2/foto-grup.png" alt="">
            <h2 class="judul-service2">Mengoptimalkan <br>Waktu</h2>
            <p class="deskripsi-service2">Menyesuaikan pengaturan waktu, <br>mengalokasikan waktu sesuai <br>kebutuhan
                individu.</p>
        </div>

        <div class="low">
            <div class="low-teks">
                <img class="foto-copyright" src="./images2/gambar-copyright.png" alt="">
            </div>
        </div>

    </div>

    <div class="footer">
        <div class=""></div>
        <img class="foto-copyright" src="./images2/gambar-copyright.png" alt="">
        <p class="cr-teks">Life Organizer</p>
    </div>

    <script>
        // Mendapatkan elemen gambar profile dan menu opsi
        const profilePhoto = document.getElementById('profile-photo');
        const profileOptions = document.getElementById('profile-options');

        // Menambahkan event listener untuk klik pada gambar profile
        profilePhoto.addEventListener('click', function(event) {
            event.stopPropagation();

            // Mengecek jika opsi profile sedang terlihat atau tidak
            if (profileOptions.style.display === 'block') {
                profileOptions.style.display = 'none';
            } else {
                profileOptions.style.display = 'block';
            }
        });

        // Menyembunyikan opsi jika klik di luar gambar profile
        window.addEventListener('click', function(event) {
            if (!profilePhoto.contains(event.target) && !profileOptions.contains(event.target)) {
                profileOptions.style.display = 'none';
            }
        });

        const clockElement = document.getElementById('clock');

        function updateClock() {
            const now = new Date();
            const hours = now.getHours().toString().padStart(2, '0');
            const minutes = now.getMinutes().toString().padStart(2, '0');
            const seconds = now.getSeconds().toString().padStart(2, '0');
            clockElement.textContent = `${hours}:${minutes}:${seconds}`;
            clockElement.setAttribute('datetime', `${hours}:${minutes}:${seconds}`);
        }

        setInterval(updateClock, 1000); // Update setiap detik
    </script>

</body>

</html>

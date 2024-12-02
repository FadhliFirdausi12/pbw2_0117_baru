<x-guest-layout>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/resetpw.css') }}">
    </head>
    <body>
        <h1>Reset Password</h1>
        <h3>Please write your new password</h3>

        <form action="POST">
            <input type="text"  name="" id="" placeholder="New Password" >
            <input type="text"  name="" id="" placeholder="Confirm New Password" >
        </form>

        <button type="submit">
            <a href="login">UPDATE PASSWORD </a>
        </button>

    </body>

</html>
</x-guest-layout>
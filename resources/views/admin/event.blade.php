<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>calender</title>
    <link rel="stylesheet" href="css/calender.css" />
    <div class="teks-bar"><a href="/admin">BACK</div></a>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        var calendarEl = document.getElementById("calendar");
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: "dayGridMonth",
        });
        calendar.render();
      });
    </script>
  </head>
  <body>
    <!-- Kalender -->
    <div id="calendar"></div>
  </body>
</html>

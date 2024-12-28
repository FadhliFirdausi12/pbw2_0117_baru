<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kalender Pengingat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.css" />
    <link rel="stylesheet" href="css/calender.css" />
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js"></script>
  </head>
  <body>
    <!-- Tombol Kembali -->
    <div class="teks-bar"><a href="/admin">BACK</a></div>

    <!-- Kalender -->
    <div id="calendar"></div>

    <!-- Modal untuk CRUD Event -->
    <div id="modal-overlay"></div>
    <div id="event-modal">
      <h3 id="modal-title">Tambah Pengingat</h3>
      <label for="event-title">Judul:</label>
      <input type="text" id="event-title" placeholder="Masukkan judul pengingat" />
      <label for="event-date">Tanggal:</label>
      <input type="date" id="event-date" />
      <label for="event-time">Waktu:</label>
      <input type="time" id="event-time" />
      <button id="save-event">Simpan</button>
      <button id="delete-event" style="display: none;">Hapus</button>
      <button id="close-modal">Batal</button>
    </div>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        // Periksa izin notifikasi
        if (Notification.permission !== "granted") {
          Notification.requestPermission();
        }

        // Elemen modal dan input
        const modal = document.getElementById("event-modal");
        const overlay = document.getElementById("modal-overlay");
        const titleInput = document.getElementById("event-title");
        const dateInput = document.getElementById("event-date");
        const timeInput = document.getElementById("event-time");
        const saveButton = document.getElementById("save-event");
        const deleteButton = document.getElementById("delete-event");
        const modalTitle = document.getElementById("modal-title");

        let selectedEvent = null; // Event yang sedang diedit
        let events = JSON.parse(localStorage.getItem("calendarEvents")) || [];

        // Inisialisasi Kalender
        const calendarEl = document.getElementById("calendar");
        const calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: "dayGridMonth",
          selectable: true,
          events: events,
          dateClick: function (info) {
            // Mode Tambah Event
            openModal("Tambah Pengingat", null, info.dateStr);
          },
          eventClick: function (info) {
            // Mode Edit Event
            selectedEvent = info.event;
            openModal(
              "Edit Pengingat",
              selectedEvent.title,
              selectedEvent.startStr.slice(0, 10),
              selectedEvent.startStr.slice(11, 16)
            );
          },
        });

        calendar.render();

        // Fungsi membuka modal
        function openModal(title, eventTitle = "", eventDate = "", eventTime = "") {
          modalTitle.textContent = title;
          titleInput.value = eventTitle;
          dateInput.value = eventDate;
          timeInput.value = eventTime;
          modal.style.display = "block";
          overlay.style.display = "block";

          // Tampilkan tombol hapus hanya pada mode edit
          deleteButton.style.display = selectedEvent ? "block" : "none";
        }

        // Fungsi menutup modal
        function closeModal() {
          modal.style.display = "none";
          overlay.style.display = "none";
          titleInput.value = "";
          dateInput.value = "";
          timeInput.value = "";
          selectedEvent = null;
        }

        // Simpan atau Perbarui Event
        saveButton.addEventListener("click", function () {
          const title = titleInput.value;
          const date = dateInput.value;
          const time = timeInput.value;

          if (title && date) {
            if (selectedEvent) {
              // Mode Edit
              selectedEvent.setProp("title", title);
              selectedEvent.setStart(`${date}T${time}`);

              // Perbarui localStorage
              events = events.map((event) =>
                event.title === selectedEvent.title
                  ? { ...event, title: title, start: `${date}T${time}` }
                  : event
              );
            } else {
              // Mode Tambah
              const newEvent = {
                title: title,
                start: `${date}T${time}`,
                allDay: !time,
              };
              events.push(newEvent);
              calendar.addEvent(newEvent);
            }

            // Simpan ke localStorage
            localStorage.setItem("calendarEvents", JSON.stringify(events));
            closeModal();
          } else {
            alert("Harap isi judul dan tanggal pengingat.");
          }
        });

        // Hapus Event
        deleteButton.addEventListener("click", function () {
          if (selectedEvent) {
            selectedEvent.remove();
            events = events.filter((event) => event.title !== selectedEvent.title);
            localStorage.setItem("calendarEvents", JSON.stringify(events));
            closeModal();
          }
        });

        // Tutup modal dengan klik overlay atau tombol Batal
        overlay.addEventListener("click", closeModal);
        document.getElementById("close-modal").addEventListener("click", closeModal);

        // Notifikasi Pengingat
        setInterval(function () {
          const now = new Date().toISOString().slice(0, 16); // Format YYYY-MM-DDTHH:mm
          events.forEach((event) => {
            if (event.start.slice(0, 16) === now) {
              if (Notification.permission === "granted") {
                new Notification("Pengingat", {
                  body: event.title,
                });
              } else {
                alert(`Pengingat: ${event.title}`);
              }
            }
          });
        }, 60000); // Periksa setiap menit
      });
    </script>
  </body>
</html>

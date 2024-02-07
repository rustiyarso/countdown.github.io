<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countdown Website</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            text-align: center;
            padding: 50px;
            background-color: #f4f4f4;
        }

        h1 {
            color: #333;
        }

        p {
            color: #555;
        }

        #countdown {
            font-size: 3em;
            font-weight: bold;
            color: #fff;
            background-color: #3498db;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <h1>Countdown </h1>
    <p>Special Event:</p>
    <div id="countdown"></div>

    <script>
        // Tanggal target untuk countdown (ganti dengan tanggal yang diinginkan)
        var targetDate = new Date('2024-02-07T23:59:59');

        // Fungsi untuk menghitung sisa waktu dan memperbarui tampilan
        function updateCountdown() {
            var currentDate = new Date();
            var timeDifference = targetDate - currentDate;

            var days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
            var hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

            // Memperbarui tampilan countdown di elemen dengan id "countdown" tanpa animasi
            $('#countdown').html(days + 'd ' + hours + 'h ' + minutes + 'm ' + seconds + 's');

            // Jika waktu target telah tercapai, tambahkan pesan atau tindakan lain sesuai kebutuhan
            if (timeDifference <= 0) {
                $('#countdown').html('Event telah berakhir!');
                // Anda dapat menambahkan tindakan lain di sini jika diperlukan
            }
        }

        // Memanggil fungsi updateCountdown setiap detik
        setInterval(updateCountdown, 1000);

        // Memanggil fungsi untuk pertama kali
        updateCountdown();
    </script>

</body>

</html>
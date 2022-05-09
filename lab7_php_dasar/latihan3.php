<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
    <style>
        * {
            font-family: sans-serif
        }

        form {
            margin-bottom: 10px
        }
    </style>
</head>

<body>
    <h2>Form Input</h2>
    <form method="post">
        <label for="nama">Nama</label>
        <input type="text" name="nama" placeholder="Reza Riyaldi Irawan">
        <button type="submit">Kirim</button>
    </form>

    <?php
    echo "Selamat Datang " . $_POST['nama'];
    ?>
</body>

</html>
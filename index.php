<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <h1>Tugas PHP Dasar</h1>

    <form action="" method="post" class="container">
        <div class="form-control">
            <label for="nama">Nama</label>
            <input type="text" name="nama" placeholder="Masukan nama">
        </div>
        <div class="form-control">
            <label for="nama">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir">
        </div>
        <div class="form-control">
            <label for="nama">Pekerjaan</label>
            <select name="pekerjaan">
                <option value="">- Pilih Pekerjaan -</option>
                <option value="Network">Network Engineer</option>
                <option value="Programmer">Programmer</option>
                <option value="DevOps">DevOps</option>
                <option value="Data">Data Engineer</option>
            </select>
        </div>

        <button type="submit">Kirim</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
    ?>
    <div class="container">
        <h3>Hasil</h3>
        <hr>
        <table>
            <tr>
                <td>Nama</td>
                <td>: Reza</td>
            </tr>

            <tr>
                <td>Tanggal Lahir</td>
                <td>: </td>
            </tr>

            <tr>
                <td>Umur</td>
                <td>: </td>
            </tr>

            <tr>
                <td>Pekerjaan</td>
                <td>: </td>
            </tr>

            <tr>
                <td>Gaji</td>
                <td>: Rp.</td>
            </tr>
        </table>
    </div>
    <?php
    }
    ?>

</body>

</html>
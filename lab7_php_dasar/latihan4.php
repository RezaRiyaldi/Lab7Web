<style>
    * {
        font-family: sans-serif;
    }

    code {
        color: orange;
    }
</style>

<h1>PHP Dasar</h1>

<?php
$gaji = 1000000;
$pajak = 0.1;
$thp = $gaji - ($gaji * $pajak);

// echo "Gaji sebelum kena pajak = Rp. $gaji </br>";
// echo "Gaji yang dibawa pulang = Rp. $thp </br>";

date_default_timezone_set("Asia/Jakarta");
$nama_hari = date('l');
$hari_ini = "";

if ($nama_hari == "Sunday") {
    $hari_ini = "Minggu";
} else if ($nama_hari == "Monday") {
    $hari_ini = "Senin";
} else if ($nama_hari == "Tuesday") {
    $hari_ini = "Selasa";
} else if ($nama_hari == "Wednesday") {
    $hari_ini = "Rebu";
} else if ($nama_hari == "Thursday") {
    $hari_ini = "Kamis";
} else if ($nama_hari == "Friday") {
    $hari_ini = "Jum\'at";
} else if ($nama_hari == "Saturday") {
    $hari_ini = "Sabtu";
}

echo "Hari ini adalah hari $hari_ini";









// switch ($nama_hari) {
//     case "Sunday":
//         $hari_ini = "Minggu";
//         break;

//     case "Monday":
//         $hari_ini = "Senin";
//         break;
// }

// for ($i = 1; $i <= 10; $i++) {
//     echo "<br>Perulangan ke: " . $i;
// }

// echo "<br>";

// for ($i = 10; $i >= 1; $i--) {
//     echo "<br>Perulangan ke: " . $i;
// }

// while ($i <= 10) {
//     echo "<br>Perulangan ke: " . $i;
//     $i++;
// }

// echo "<br>";

// $i = 10;

// while ($i >= 1) {
//     echo "<br>Perulangan ke: " . $i;
//     $i--;
// }

// echo "Perulangan <code>do while</code> 1 sampai 10 </br>";

// $i = 1;
// do {
//     echo "<br>Perulangan ke: $i";
//     $i++;
// } while ($i <= 10);

// echo "<br>";

// $i = 10;
// do {
//     echo "<br>Perulangan ke: $i";
//     $i--;
// } while ($i >= 1);

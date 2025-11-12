<?php
// Mengambil angka bulan saat ini (1 s/d 12)
$angka_bulan = (int)date("n");

// Mengambil nama bulan saat ini
$nama_bulan = date("F"); 

// Mengambil tahun saat ini
$tahun = (int)date("Y");

$jumlah_hari = "";

switch ($angka_bulan) {
    case 1:  // Januari
    case 3:  // Maret
    case 5:  // Mei
    case 7:  // Juli
    case 8:  // Agustus
    case 10: // Oktober
    case 12: // Desember
        $jumlah_hari = 31;
        break;

    case 4:  // April
    case 6:  // Juni
    case 9:  // September
    case 11: // November
        $jumlah_hari = 30;
        break;

    case 2:  // Februari
        // Cek kabisat untuk Februari
        if (($tahun % 400 == 0) || (($tahun % 4 == 0) && ($tahun % 100 != 0))) {
            $jumlah_hari = 29; // Tahun Kabisat
        } else {
            $jumlah_hari = 28; // Bukan Tahun Kabisat
        }
        break;

    default:
        $jumlah_hari = "tidak valid";
        break;
}

echo "<h1>Jumlah Hari dalam Bulan Ini</h1>";
echo "Saat ini adalah bulan: <b>$nama_bulan (Tahun $tahun)</b>.<br>";
echo "Jumlah hari dalam bulan ini adalah <b>$jumlah_hari hari</b>.";
?>
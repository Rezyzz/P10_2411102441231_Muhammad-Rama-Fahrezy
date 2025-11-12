<?php
if (isset($_POST['jam_kerja']) && isset($_POST['golongan'])) {
    $jam_kerja = (int)$_POST['jam_kerja'];
    $golongan = $_POST['golongan'];
    
    $upah_per_jam = 0;
    $upah_lembur_per_jam = 3000;
    $batas_jam_normal = 48;

    // Menentukan upah per jam berdasarkan golongan
    if ($golongan == "A") {
        $upah_per_jam = 4000;
    } else if ($golongan == "B") {
        $upah_per_jam = 5000;
    } else if ($golongan == "C") {
        $upah_per_jam = 6000;
    } else if ($golongan == "D") {
        $upah_per_jam = 7500;
    }

    // Logika perhitungan gaji (sama seperti soal 2)
    $total_upah = 0;
    if ($jam_kerja > $batas_jam_normal) {
        $jam_normal = $batas_jam_normal;
        $jam_lembur = $jam_kerja - $batas_jam_normal;
        
        $upah_normal = $jam_normal * $upah_per_jam;
        $upah_lembur = $jam_lembur * $upah_lembur_per_jam;
        
        $total_upah = $upah_normal + $upah_lembur;
        
    } else {
        $total_upah = $jam_kerja * $upah_per_jam;
    }

    echo "<h1>Total Upah Karyawan</h1>";
    echo "Golongan: <b>$golongan</b><br>";
    echo "Jumlah jam kerja: <b>$jam_kerja jam</b><br>";
    echo "Total upah yang diterima: <b>Rp. " . number_format($total_upah, 0, ',', '.') . ",-</b>";
}
?>
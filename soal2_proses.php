<?php
if (isset($_POST['jam_kerja'])) {
    $jam_kerja = (int)$_POST['jam_kerja'];
    
    $upah_per_jam = 2000;
    $upah_lembur_per_jam = 3000;
    $batas_jam_normal = 48;
    
    $total_upah = 0;

    if ($jam_kerja > $batas_jam_normal) {
        $jam_normal = $batas_jam_normal;
        $jam_lembur = $jam_kerja - $batas_jam_normal;
        
        $upah_normal = $jam_normal * $upah_per_jam;
        $upah_lembur = $jam_lembur * $upah_lembur_per_jam;
        
        $total_upah = $upah_normal + $upah_lembur;
        
    } else {
        // Jika jam kerja tidak lebih dari 48
        $total_upah = $jam_kerja * $upah_per_jam;
    }

    echo "<h1>Total Upah Karyawan</h1>";
    echo "Jumlah jam kerja: <b>$jam_kerja jam</b><br>";
    echo "Total upah yang diterima: <b>Rp. " . number_format($total_upah, 0, ',', '.') . ",-</b>";
}
?>
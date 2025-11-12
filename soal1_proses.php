<?php
if (isset($_POST['tahun'])) {
    $tahun = (int)$_POST['tahun'];
    $status = "";

    // Logika tahun kabisat
    if (($tahun % 400 == 0) || (($tahun % 4 == 0) && ($tahun % 100 != 0))) {
        $status = "adalah tahun kabisat.";
    } else {
        $status = "BUKAN tahun kabisat.";
    }

    echo "<h1>Hasil Pengecekan</h1>";
    echo "Tahun <b>$tahun</b> $status";
} else {
    echo "Silakan masukkan tahun melalui form.";
}
?>
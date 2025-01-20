<?php
$kd_matakuliah = $_GET['kd_matakuliah'];
//include class transkrip
include "class/transkrip_class.php";
//object transkrip
$trp = new transkrip();
$exec = $trp->deleteTranskrip($kd_matakuliah);

if ($exec) {
    echo "<script>alert('Data berhasil dihapus'); window.location = 'datatranskrip.php'; </script>";
} else {
    echo "<script>alert('Data gagal dihapus'); window.location = 'datatranskrip.php'; </script>";
}
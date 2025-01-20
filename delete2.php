<?php
$id = $_GET['id'];
//include class tabelkrs
include "class/tabelkrs_class.php";
//object tabelkrs
$kartu = new krs();
$exec = $kartu->deleteTabelKrs($id);

if ($exec) {
    echo "<script>alert('Data berhasil dihapus'); window.location = 'matkul.php'; </script>";
} else {
    echo "<script>alert('Data gagal dihapus'); window.location = 'matkul.php'; </script>";
}
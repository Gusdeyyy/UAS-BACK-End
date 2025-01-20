<?php

$kd_matakuliah= $_POST['kd_matakuliah'];
$nama_mk = $_POST['nama_mk'];
$semester = $_POST['semester'];
$sks = $_POST['sks'];
$nilai = $_POST['nilai'];

//include class transkrip
include "class/transkrip_class.php";
//object transkrip
$trp = new transkrip();

$data_update = [
    "kd_matakuliah" => $kd_matakuliah,
    "nama_mk" => $nama_mk,
    "semester" => $semester,
    "sks" => $sks,
    "nilai" => $nilai
];

$exec = $trp->updateTranskrip($data_update);

if($exec){
    echo "<script>alert('Data berhasil diupdate'); window.location = 'datatranskrip.php'; </script>";
}else{
    echo "<script>alert('Data gagal diupdate'); window.location = 'form3.php';</script>";
}

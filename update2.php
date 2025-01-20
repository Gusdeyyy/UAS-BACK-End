<?php
$id= $_POST['id'];
$nama_matkul= $_POST['nama_matkul'];
$kelas = $_POST['kelas'];
$sks = $_POST['sks'];

//include class tabel_krs
include "class/tabelkrs_class.php";
//object tabel_krs
$kartu = new krs();

$data_update = [
    "id" => $id,
    "nama_matkul" => $nama_matkul,
    "kelas" => $kelas,
    "sks" => $sks
];

$exec = $kartu->updateTabelKrs($data_update);

if($exec){
    echo "<script>alert('Data berhasil diupdate'); window.location = 'matkul.php'; </script>";
}else{
    echo "<script>alert('Data gagal diupdate'); window.location = 'matkul.php';</script>";
}

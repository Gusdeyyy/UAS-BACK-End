<?php

    $kd_matakuliah = $_POST['kd_matakuliah'];
    $nama_mk = $_POST['nama_mk'];
    $semester = $_POST['semester'];
    $sks = $_POST['sks'];
    $nilai = $_POST['nilai'];

    include "class/transkrip_class.php";
    $krs = new transkrip();

    $data_insert = [
        "kd_matakuliah" => $kd_matakuliah,
        "nama_mk" => $nama_mk,
        "semester" => $semester,
        "sks" => $sks,
        "nilai" => $nilai
    ];
    
    $exec = $krs->insertTranskrip($data_insert);
    
    if($exec){
        echo "<script>alert('Data berhasil disimpan'); window.location = 'datatranskrip.php'; </script>";
    }else{
        echo "<script>alert('Data gagal disimpan'); window.location = 'form3.php'; </script>";
    }
    
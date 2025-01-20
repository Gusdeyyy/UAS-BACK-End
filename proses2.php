<?php
    $id = $_POST['id'];
    $kelas = $_POST['kelas'];
    $nama_matkul = $_POST['nama_matkul'];
    $sks = $_POST['sks'];

    include "class/tabelkrs_class.php";
    $kartu = new krs();

    $data_insert = [
        "id" => $id,
        "kelas" => $kelas,
        "nama_matkul" => $nama_matkul,
        "sks" => $sks
    ];
    
    $exec = $kartu->insertTabelKrs($data_insert);
    
    if($exec){
        echo "<script>alert('Data berhasil disimpan'); window.location = 'form2.php'; </script>";
    }else{
        echo "<script>alert('Data gagal disimpan'); window.location = 'form2.php'; </script>";
    }
    
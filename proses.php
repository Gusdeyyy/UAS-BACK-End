<?php

$nim = $_POST['nim'];
$nama_mhs = $_POST['nama_mhs'];
$kode_jurusan = $_POST['kode_jurusan'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];
$foto = $_FILES['foto']['name'];

include "class/mahasiswa_class.php";
$mhs = new mahasiswa();

$data_insert = [
    "nim" => $nim,
    "nama_mhs" => $nama_mhs,
    "kode_jurusan" => $kode_jurusan,
    "gender" => $gender,
    "alamat" => $alamat,
    "no_hp" => $no_hp,
    "email" => $email,
    "foto" => $foto
];

$exec = $mhs->insertMahasiswa($data_insert);

if($exec){
    echo "<script>alert('Data berhasil disimpan'); window.location = 'mahasiswa.php'; </script>";
}else{
    echo "<script>alert('Data gagal disimpan'); window.location = 'mahasiswa.php'; </script>";
}

if($_SERVER['REQUEST_METHOD'] == "POST") {

    //nama file, target dir, target file
    $file_nama = basename($_FILES['foto']['name']);
    $target_dir = "foto/";
    $target_file = $target_dir . $file_nama;
    $uploadOK = 1;

    //ambil type file
    $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    //cek file sudah ada ato blm
    if(file_exists($target_file)){
        echo "<script>alert ('file sudah ada')</script>";
        $uploadOK = 0;
    }

    //batasi file hanya (png,jpg,jpeg)
    if($file_type != "png" && $file_type != "jpg" && $file_type != "jpeg"){
        echo "<script>alert(' maaf format file yg anda masukan tidak valid (png,jpg,jpeg)')(</script>";;
        $uploadOK = 0;
    }
    
    //cek boleh upload atau tidak
    if($uploadOK == 1){;
       if (move_uploaded_file($_FILES['foto']['tmp_name'], $target_file)) {
        $qry = mysqli_query($conn, "INSERT INTO mahasiswa (file_nama) VALUES ('$file_nama')");
        if ($qry) {
            echo "<script>alert('foto berhasil di upload'); window.location='form.php';</script>";
        } else {
        echo "<script>alert('Foto Berhasil di-Upload, gagal insert'); window.location='form.php';</script>";
        }
       }else{
       echo "<script>alert('Foto Gagal Di-Upload')</script>";
       }
    }else{
        echo " YAHH.. Anda Tidak Boleh Upload File ini Dikarenakan Berisikan Virus Jombie";
    }
}
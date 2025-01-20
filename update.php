<?php

$nim = $_POST['nim'];
$nama_mhs = $_POST['nama_mhs'];
$kode_jurusan = $_POST['kode_jurusan'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];
$foto = $_FILES['foto']['name'];

//include class mahasiswa
include "class/mahasiswa_class.php";
//object mahasiswa
$mhs = new mahasiswa();

// Cek apakah ada file gambar yang diupload
if(isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
    $foto = $_FILES['foto']['name'];
    
    // Ambil type file
    $file_type = strtolower(pathinfo($foto, PATHINFO_EXTENSION));
    
    // Validasi tipe file
    $allowed_types = ['png', 'jpg', 'jpeg'];
    if(!in_array($file_type, $allowed_types)) {
        echo "<script>
                alert('Format file tidak valid. Hanya PNG, JPG, JPEG yang diperbolehkan.');
                window.location = 'mahasiswa.php';
              </script>";
        exit;
    }
    
    // Cari foto lama untuk dihapus
    $result = $mhs->getFotoMhs($nim);
    if ($result) {
        $old_file_path = "foto/" . $result['foto'];
        // Jika file lama ada, hapus file tersebut
        if (file_exists($old_file_path)) {
            unlink($old_file_path);
        }
    }

    // Generate unique filename untuk mencegah conflict
    $unique_filename = uniqid() . '.' . $file_type;
    $target_file = "foto/" . $unique_filename;
    
    // Upload file baru
    if(move_uploaded_file($_FILES['foto']['tmp_name'], $target_file)) {
        $foto = $unique_filename; // Gunakan nama file baru
    } else {
        echo "<script>
                alert('Gagal mengupload foto');
                window.location = 'mahasiswa.php';
              </script>";
        exit;
    }   
} else {
    // Jika tidak ada file baru di-upload, gunakan foto lama
    $result = $mhs->getFotoMhs($nim);
    $foto = $result['foto'];  // Menggunakan foto lama jika tidak di-upload
}

$data_update = [
    "nim" => $nim,
    "nama_mhs" => $nama_mhs,
    "kode_jurusan" => $kode_jurusan,
    "gender" => $gender,
    "alamat" => $alamat,
    "no_hp" => $no_hp,
    "email" => $email,
    "foto" => $foto
];

$exec = $mhs->updateMahasiswa($data_update);

if($exec){
    echo "<script>alert('Data berhasil diupdate'); window.location = 'mahasiswa.php'; </script>";
}else{
    echo "<script>alert('Data gagal diupdate'); window.location = 'mahasiswa.php';</script>";
}

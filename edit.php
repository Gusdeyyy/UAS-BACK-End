<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="form.php">BA231</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="mahasiswa.php">Mahasiswa</a>
          <link rel="stylesheet" href=" ">
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="form2.php">Input Krs</a>
          <link rel="stylesheet" href=" ">
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Krs.php">Krs</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="form3.php">Transkrip Nilai</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="datatranskrip.php"> Data Transkrip</a>
          <link rel="stylesheet" href=" ">
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</head>
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f0f2f5;
            padding: auto;
        }

        fieldset {
            background: white;
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            padding: 30px;
            max-width: 800px;
            margin: 20px auto;
        }

        h2 {
            color: #333;
            margin-bottom: 25px;
            text-align: center;
            font-size: 24px;
        }

        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 15px;
        }

        td {
            padding: 8px;
            vertical-align: middle;
        }

        td:first-child {
            width: 120px;
            font-weight: 500;
            color: #444;
        }

        td:nth-child(2) {
            width: 20px;
            color: #666;
        }

        input[type="number"],
        input[type="text"],
        input[type="email"],
        select {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
            color: #333;
            transition: all 0.3s ease;
        }

        input[type="number"]:read-only {
            background-color: #f5f5f5;
            cursor: not-allowed;
        }

        input[type="number"]:focus,
        input[type="text"]:focus,
        input[type="email"]:focus,
        select:focus {
            outline: none;
            border-color: #1a73e8;
            box-shadow: 0 0 0 3px rgba(26,115,232,0.2);
        }

        select {
            appearance: none;
            background-image: url('data:image/svg+xml;utf8,<svg fill="%23333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/></svg>');
            background-repeat: no-repeat;
            background-position: right 10px center;
            padding-right: 30px;
        }

        .radio-group {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .radio-option {
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
        }

        input[type="radio"] {
            width: 16px;
            height: 16px;
            margin: 0;
            cursor: pointer;
        }

        input[type="submit"] {
            background-color: #1a73e8;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 6px;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #1557b0;
        }

        @media (max-width: 600px) {
            fieldset {
                padding: 20px;
            }

            table, tr, td {
                display: block;
            }

            td:first-child {
                padding-bottom: 5px;
            }

            td:nth-child(2) {
                display: none;
            }

            td:last-child {
                padding-bottom: 15px;
            }

            .radio-group {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
        }
    </style>
</head>

<?php
$nim = $_GET['nim'];
include "class/mahasiswa_class.php";
$mhs = new mahasiswa();
$data = $mhs->getUpdateMahasiswa($nim);
?>

<form action="update.php" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Form edit data mahasiswa</legend>
            <h2>Lengkapi biodata dengan benar</h2>
            <table>
                <tr>
                    <td>NIM (Nomor induk mahasiswa)</td>
                    <td>:</td>
                    <td><input type="number" name="nim" value="<?= $data['nim'] ?>" readonly></td>
                </tr>
                <tr>
                    <td>Nama mahasiswa</td>
                    <td>:</td>
                    <td><input type="text" name="nama_mhs" value="<?= $data['nama_mhs'] ?>"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><select name="kode_jurusan">
                        <option value="J01">Sistem Komputer</option>
                        <option value="J02">Sistem Informasi</option>
                        <option value="J03">Teknologi Informasi</option>
                        <option value="j04">Bisnis Digital</option>
                        <option value="j05">Manajemen Informatika</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>:</td>
                    <td>
                        <?php
                            if($data['gender'] == 1) {
                        ?>
                            <input type="radio" name="gender" value="1" checked> laki-laki
                            <input type="radio" name="gender" value="2"> Perempuan
                        <?php } else { ?>
                            <input type="radio" name="gender" value="1"> laki-laki
                            <input type="radio" name="gender" value="2" checked> Perempuan
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" value="<?= $data['alamat'] ?>"></td>
                </tr>
                <tr>
                    <td>No. HP</td>
                    <td>:</td>
                    <td><input type="text" name="no_hp" value="<?= $data['no_hp'] ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="email" name="email" value="<?= $data['email'] ?>"></td>
                </tr>
                <tr>
                <td>Upload Foto</td>
                <td>:</td>
                 <td><input type="file" name="foto" value="<?= $data['foto'] ?>"></td>
                        </tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="simpan"></td>
                </tr>
            </table>
        </fieldset>
</form>
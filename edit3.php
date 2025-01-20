<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Transkrip Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f0f2f5;
        }

        .navbar {
            margin-bottom: 20px; /* Memberi jarak antara navbar dan elemen di bawahnya */
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

        input[type="text"],
        input[type="number"],
        input[type="email"],
        select {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
            color: #333;
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
    </style>
</head>
<body>
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
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="form2.php">Input KRS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Krs.php">KRS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="form3.php">Transkrip Nilai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="datatranskrip.php">Data Transkrip</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <a class="btn btn-primary ms-2" href="form.php">Kembali</a>
            </div>
        </div>
    </nav>

    <!-- Form -->
<?php
$kd_matakuliah = $_GET['kd_matakuliah'];
include "class/transkrip_class.php";
$trp = new transkrip();
$data = $trp->getUpdateTranskrip($kd_matakuliah);
?>

        <form action="update3.php" method="POST">
            <fieldset>
                <h2>UPDATE NILAI MAHASISWA</h2>
                <table>
                    <tr>
                        <td>Kode Mata Kuliah</td>
                        <td>:</td>
                        <td><input type="text" name="kd_matakuliah" value="<?= $data['kd_matakuliah'] ?? '' ?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Nama Mata Kuliah</td>
                        <td>:</td>
                        <td><input type="text" name="nama_mk" value="<?= $data['nama_mk']  ?? '' ?>"></td>
                    </tr>
                    <tr>
                        <td>Semester</td>
                        <td>:</td>
                        <td><input type="text" name="semester" value="<?= $data['semester']  ?? '' ?>"></td>
                    </tr>
                    <tr>
                        <td>SKS</td>
                        <td>:</td>
                        <td><input type="text" name="sks" value="<?= $data['sks']  ?? '' ?>"></td>
                    </tr>
                    <tr>
                        <td>Nilai</td>
                        <td>:</td>
                        <td><input type="text" name="nilai" value="<?= $data['nilai']  ?? '' ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" value="Simpan"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
</body>
</html>

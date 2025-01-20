<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Biodata</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
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
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
        </li>
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
<body>
<div class="container p-5 my-5 border border-dark">
            <h3>TRANSKRIP NILAI</h3>
            <hr>
            <table class="table">
        <tr>
            <th>KODE MATAKULIAH</th>
            <th>NAMA MATAKULIAH</th>
            <th>SEMESTER</th>
            <th>SKS</th>
            <th>NILAI</th>
            <th></th>
        </tr>
        <?php
        //menambahkan file class transkrip
        include "class/transkrip_class.php";
        //membuat object class transkrip
        $trp = new transkrip();
        $data = $trp->getTranskrip();
        //tampilkan data transkrip dngn perulangan
        foreach ($data as $trp) {
        ?>
        <tr>
            <td><?= $trp['kd_matakuliah'] ?></td>
            <td><?= $trp['nama_mk'] ?></td>
            <td><?= $trp['semester'] ?></td>
            <td><?= $trp['sks'] ?></td>
            <td><?= $trp['nilai'] ?></td>
            

            <td>
               <a href="edit3.php?kd_matakuliah=<?= $trp['kd_matakuliah'] ?>"><button class="btn btn-warning">Edit</button></a>
               <a href="delete3.php?kd_matakuliah=<?= $trp['kd_matakuliah'] ?>"><button class="btn btn-danger">Delete</button></a>
            </td>
        </tr>
        <?php } ?>
    </table>
    </div>
</body>
</html>
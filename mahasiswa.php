<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mahasiswa</title>
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
            <a class="nav-link" href="logout.php">logout</a>
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
            <h3>Data Mahasiswa</h3>
            <hr>
            <table class="table">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Kode Jurusan</th>
            <th>Gender</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Email</th>
            <th>Foto</th>
            <th></th>
            <?php
        //menambahkan file class mahasiswa
        include "class/mahasiswa_class.php";
        //membuat object class mahasiswa
        $mhs = new mahasiswa();
        $data = $mhs->getMahasiswa();
        //tampilkan data mahasiswa dngn perulangan
        foreach ($data as $mhs) {
        ?>
        <tr>
        <td><?= $mhs['nim'] ?></td>
            <td><?= $mhs['nama_mhs'] ?></td>
            <td><?= $mhs['kode_jurusan'] ?></td>
            <td><?= $mhs['gender'] == 1 ? "Laki-Laki" : "Perempuan" ?></td>
            <td><?= $mhs['alamat'] ?></td>
            <td><?= $mhs['no_hp'] ?></td>
            <td><?= $mhs['email'] ?></td>
            <td>
        <?php if(!empty($mhs['foto'])): ?>
            <img src="foto/<?= $mhs['foto'] ?>" alt="Foto Mahasiswa" style="max-width: 100px; max-height: 200px; object-fit: cover;">
        <?php else: ?>
            <p>Tidak ada foto</p>
        <?php endif; ?>
    </td>
            <td>
               <a href="edit.php?nim=<?= $mhs['nim'] ?>"><button class="btn btn-warning">Edit</button></a>
               <a href="delete.php?nim=<?= $mhs['nim'] ?>"><button class="btn btn-danger">Delete</button></a>
            </td>
        </tr>
        <?php } ?>
    </table>
    </div>
    
</body>

</html>
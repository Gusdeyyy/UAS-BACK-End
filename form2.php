<!DOCTYPE html>
<html lang="en">

<head>
    <title>Latian Form</title>
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
    <div class="container-fluid">
        <div class="container p-5 my-5 bg-dark text-white">
            <h2>Selamat datang</h2>
        </div>
        <div class="container p-5 my-5 border border-dark">
            <h2>Input Mahasiswa</h2>
            <form action="proses2.php" method="POST">
            <div class="mb-3 mt-3">
                    <label for="id">ID :</label>
                    <input type="number" class="form-control" placeholder="Input Id" name="id" required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="kelas">Kelas :</label>
                    <input type="text" class="form-control" placeholder="Input kelas" name="kelas" required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="nama_matkul">Nama Matkul :</label>
                    <input type="text" class="form-control" placeholder="Input nama_matkul" name="nama_matkul" required>
                </div>
                
                <div class="mb-3">
                    <label for="sks">SKS :</label>
                    <input type="text" class="form-control" placeholder="Input sks" name="sks" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>

</body>

</html>

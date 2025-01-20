<!DOCTYPE html>
<html lang="en">

<head>
    <title>Transkip Nilai Mahasiswa</title>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Transkrip</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Input Data Transkrip</h1>
        <form action="proses3.php" method="post">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <td><label for="kd_matakuliah" class="form-label">Kode Mata Kuliah:</label></td>
                        <td><input type="text" class="form-control" id="kd_matakuliah" name="kd_matakuliah" required></td>
                    </tr>
                    <tr>
                        <td><label for="nama_mk" class="form-label">Nama Mata Kuliah:</label></td>
                        <td><input type="text" class="form-control" id="nama_mk" name="nama_mk" required></td>
                    </tr>
                    <tr>
                        <td><label for="semester" class="form-label">Semester:</label></td>
                        <td><input type="number" class="form-control" id="semester" name="semester" min="1" required></td>
                    </tr>
                    <tr>
                        <td><label for="sks" class="form-label">SKS:</label></td>
                        <td><input type="number" class="form-control" id="sks" name="sks" min="1" required></td>
                    </tr>
                    <tr>
                        <td><label for="nilai" class="form-label">Nilai:</label></td>
                        <td><input type="text" class="form-control" id="nilai" name="nilai" required></td>
                    </tr>
                </tbody>
            </table>
            <div class="text-center">
                <button type="submit" class="btn btn-primary mt-3">Simpan</button>
            </div>
        </form>
    </div>
</body>
</html>
 

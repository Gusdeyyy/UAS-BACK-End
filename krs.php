<!DOCTYPE html>
<html>
<head>
  <title>Kartu Rencana Studi</title>
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
</head>
<body class=" bg-transparent text-dark ">

<div class="container p-5 my-5 border border-dark bg-light text-dark">

  <h2>Kartu Rencana Studi</h2>
  <hr>

      <div class="mb-3">
      <label for="semester" class="form-label">Semester</label>
      <select name="semester" id="semester" class="form-control">
        <option value="reguler">Semester Reguler</option>
        <option value="pendek">Semester Pendek</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="semester_ke" class="form-label">Semester Ke-</label>
      <select name="semester_ke" id="semester_ke" class="form-control">
        <option value="1">I</option>
        <option value="2">II</option>
        <option value="3">III</option>
        <option value="4">IV</option>
        <option value="5">V</option>
        <option value="6">VI</option>
        <option value="7">VII</option>
        <option value="8">VIII</option>
      </select>
    </div>


    <a href="matkul.php"><button class="btn btn-info">Lihat KRS</button></a>
  </form>
</div>

</body>
</html>
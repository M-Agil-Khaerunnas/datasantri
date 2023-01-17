<?php 

require 'function.php';

$santri = query("SELECT * FROM tb_santri");

//tombol cari ditekan
if( isset($_POST["cari"]) ) {
  $santri = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Santri</title>

    <!-- Link -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="global.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>
<body>

<nav class="navbar navbar-expand-lg" style="background-color: #55A2EA;" data-bs-theme="dark">
  <div class="container">
    <a class="navbar-brand">British Boarding School</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php" style="margin-right: 55px;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#" style="margin-right: 35px;">Data</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    
    <div class="container">
        <div class="tittle">Data Santri</div>
        <div class="row">
          <div class="col-md-12">
          <nav class="navbar button mt-3">
        <form action="" method="post" class="d-flex" role="search">
          <input class="form-control me-2" type="text" name="keyword" placeholder=" Search" aria-label="Search">
          <button type="submit" name="cari" class="btn btn-success">Cari!</button>
        </form>
      
      <a class="btn btn-primary" href="tambah.php"
          style="--bs-btn-padding-y: .45rem; --bs-btn-padding-x: .3rem; --bs-btn-font-size: .990rem; font-family: 'Poppins', sans-serif;">
          Tambah Data</a>

    </nav>

    <table class="table table-striped mt-4">
        <tr>
            <th>No</th>
            <th>Nama Santri</th>
            <th>Alamat Santri</th>
            <th>No-Telp</th>
            <th>Nama Ayah</th>
            <th>Nama Ibu</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach( $santri as $row ) : ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $row["nama_santri"]; ?></td>
            <td><?= $row["alamat_santri"]; ?></td>
            <td><?= $row["no_telp"]; ?></td>
            <td><?= $row["nama_ayah"]; ?></td>
            <td><?= $row["nama_ibu"]; ?></td>
            <td> 
                <a href="edit.php?id=<?= $row["id"]; ?>" ><i class="bi bi-pencil-square"></i></a> |
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin');"><i class="bi bi-trash3"></i></a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

    </table>
          </div>
        </div>
    </div>

</body>
</html>
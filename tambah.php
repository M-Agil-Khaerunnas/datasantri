<?php 

require 'function.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

    // cek apakah data berhasil di tambahkan atau tidak
    if( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'data.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan!');
                document.location.href = 'data.php';
            </script>
        ";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>

    <!-- Kumpulan Link -->

    <link rel="stylesheet" href="global.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>
<body>
    
    <div class="container col-md-5">
        <div class="tittle">Tambah Data Santri</div>
            <div class="shadow p-5 mt-3">
                <form class="mt-5" action="" method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Santri</label>
                        <input type="text" class="form-control"  name="nama_santri" id="nama_santri" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat Santri</label>
                        <input type="text" class="form-control" name="alamat_santri" id="alamat_santri">
                     </div>
                    <div class="mb-3">
                        <label for="telpon" class="form-label">No-Telp</label>
                         <input type="text" class="form-control" name="no_telp" id="no_telp">
                    </div>
                    <div class="mb-3">
                        <label for="ayah" class="form-label">Nama Ayah</label>
                        <input type="text" class="form-control" name="nama_ayah" id="nama_ayah">
                    </div>
                    <div class="mb-3">
                        <label for="ibu" class="form-label">Nama Ibu</label>
                        <input type="text" class="form-control" name= "nama_ibu" id="nama_ibu">
                    </div>
                    <div class="button d-flex justify-content-center mt-4" style="font-family: 'Poppins';">
                        <button type="submit" name="submit" class="btn btn-primary">Tambah Data!</button>
                    </div>
                </form>
            </div>
                
    </div>

</body>
</html>
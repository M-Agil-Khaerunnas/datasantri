<?php 

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "db_santri");
 

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return  $rows;
}


function tambah($data) {
    global $conn;
    // ambil data dari tiap elemen dalam form
    $nama = htmlspecialchars ($data["nama_santri"]);
    $alamat = htmlspecialchars ($data["alamat_santri"]);
    $telpon = htmlspecialchars ($data["no_telp"]);
    $ayah = htmlspecialchars ($data["nama_ayah"]);
    $ibu = htmlspecialchars ($data["nama_ibu"]);

    // query insert data
    $query = "INSERT INTO tb_santri VALUES
            ('', '$nama', '$alamat', '$telpon', '$ayah',
                '$ibu')
            ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}


function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_santri WHERE id = $id");

    return mysqli_affected_rows($conn);
}


function edit($data) {
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars ($data["nama_santri"]);
    $alamat = htmlspecialchars ($data["alamat_santri"]);
    $telpon = htmlspecialchars ($data["no_telp"]);
    $ayah = htmlspecialchars ($data["nama_ayah"]);
    $ibu = htmlspecialchars ($data["nama_ibu"]);

    // query insert data
    $query = "UPDATE tb_santri SET
                nama_santri = '$nama',
                alamat_santri = '$alamat',
                no_telp = '$telpon',
                nama_ayah = '$ayah',
                nama_ibu = '$ibu'
              WHERE id = $id
            ";
    
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM tb_santri
                WHERE
              nama_santri LIKE '%$keyword%' OR
              alamat_santri LIKE '%$keyword%' OR
              nama_ayah LIKE '%$keyword%' OR
              nama_ibu LIKE '%$keyword%'
            ";
    return query($query);
}

?>
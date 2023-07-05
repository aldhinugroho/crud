<?php
    include "koneksi.php";
    //mendapatkan data dari form
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $jk = $_POST['jk'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];

    //query update data mahasiswa
    $sql = "UPDATE mahasiswa SET nim='$nim',nama='$nama',no_hp='$no_hp',jk='$jk',jurusan='$jurusan',alamat='$alamat' WHERE id='$id'";
    if(mysqli_query($link, $sql)) {
        header("location:tampil_data.php");
    }
?>
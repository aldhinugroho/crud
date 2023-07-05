<?php
        include "koneksi.php";
            //mendapatkan data dari form
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $no_hp = $_POST['no_hp'];
            $jk = $_POST['jk'];
            $jurusan = $_POST['jurusan'];
            $alamat = $_POST['alamat'];

            //query tambah data mahasiswa
            $sql = "INSERT INTO mahasiswa (nim, nama, no_hp, jk, jurusan, alamat) VALUES ('$nim','$nama','$no_hp','$jk','$jurusan','$alamat')";
            if(mysqli_query($link, $sql)) {
               header("location: tampil_data.php");
            } else{
                header("location: form_tambah.php");
            } 
?>
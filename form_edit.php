<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="mt-4 mb-4">Edit Mahasiswa</h1>
        <?php
        //koneksi ke database
        include "koneksi.php";
        //mendapatkan data mahasiswa berdasarkan ID
        $id = $_GET['id'];
        $sql = "SELECT * FROM mahasiswa WHERE id='$id'";
        $result = mysqli_query($link, $sql);
        $data = mysqli_fetch_assoc($result);
        ?>
        <form method="post" action="aksi_edit.php">
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $data['nim']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">No HP</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo $data['no_hp']; ?>" required>
            </div>
            <div class="mb-3">
                <span>Jenis Kelamin</span> <br>
                <label for="Laki-laki" class="form-label">Laki-laki</label>
                <input type="radio" value="Laki-laki" id="Laki-laki" name="jk" <?php if($data['jk'] === 'Laki-laki') echo 'checked'; ?>>
                <label for="Perempuan" class="form-label">Perempuan</label>
                <input type="radio" value="Perempuan" id="perempuan" name="jk" <?php if($data['jk'] === 'Perempuan') echo 'checked'; ?>>               
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <select class="form-select" name="jurusan" id="jurusan" required>
                    <option value="Informatika" <?php if($data['jurusan'] === 'Informatika') echo 'selected'; ?>>Informatika</option>
                    <option value="Sistem Informasi" <?php if($data['jurusan'] === 'Sistem Informasi') echo 'selected'; ?>>Sistem Informasi</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-control">Alamat</label>
                <textarea class="form-control" name="alamat" id="alamat" rows="3" required><?php echo $data['alamat']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="tampil_data.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
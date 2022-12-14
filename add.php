<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <?php
        include 'connect.php';

        

        if(isset($_POST['submit'])){
            //menangkap data yang dikirim dari form oleh user
            $nama = $_POST['nama'];
            $nrp = $_POST['nrp'];
            $alamat = $_POST['alamat'];
            mysqli_query($koneksi, "INSERT INTO tbl_maha VALUES('','$nama','$nrp','$alamat')");

            header('location:index.php');
        }
        
        
        
    ?>
    <h2>Tambah Data Mahasiswa</h2>

    <form action="add.php" method="post" >
        <ul>
            <li>
                <label for="">Nama: </label>
                <input type="text" name="nama">
            </li>
            <li>
                <label for="">Nrp: </label>
                <input type="text" name="nrp">
            </li>
            <li>
                <label for="">Alamat: </label>
                <input type="text" name="alamat">
            </li>

            <button type="submit" name="submit">Tambah</button>
        </ul>
    </form>
    <a href="index.php">Kembali</a>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <?php
        include 'connect.php';
        $id_mhs = $_GET['id'];
        $datas = mysqli_query($koneksi, "SELECT * FROM tbl_maha WHERE id='$id_mhs' ");
        while($d = mysqli_fetch_assoc($datas)):
    ?>

    <h2>EDIT DATA MAHASISWA</h2>
    <form action="update.php" method="post" >
        <ul>
            <li>
                <label for="">Nama: </label>
                <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                <input type="text" name="nama" value="<?php echo $d['nama_mahasiswa']; ?>">
            </li>
            <li>
                <label for="">Nrp: </label>
                <input type="text" name="nrp" value="<?php echo $d['nrp']; ?>">
            </li>
            <li>
                <label for="">Alamat: </label>
                <input type="text" name="alamat" value="<?php echo $d['alamat']; ?>">
            </li>

            <button type="submit" name="submit">Edit</button>
        </ul>
    </form>
    <?php endwhile ?>

    <?php
    if(isset($_POST['submit'])){
        //menangkap data yang dikirim dari form oleh user
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $nrp = $_POST['nrp'];
        $alamat = $_POST['alamat'];
        mysqli_query($koneksi, "UPDATE tbl_maha set nama_mahasiswa ='$nama', nrp = '$nrp', alamat = '$alamat' where id = '$id'");

        header('location:index.php');
    }
    ?>
    
</body>
</html>
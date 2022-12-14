<?php
    include 'connect.php';

    if(isset($_POST['submit'])){
        //menangkap data yang dikirim dari form oleh user
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $nrp = $_POST['nrp'];
        $alamat = $_POST['alamat'];
        mysqli_query($koneksi, "UPDATE tbl_maha SET nama_mahasiswa ='$nama', nrp = '$nrp', alamat = '$alamat' WHERE id = '$id'");

        header('location:index.php');
    }
?>
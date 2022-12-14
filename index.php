<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<?php
    
    include 'connect.php';
    $datas = mysqli_query($koneksi,"select * from tbl_maha ");
?>

    <h2 class="text-center mb-5">Tabel Mahasiswa</h2>
    <table  class="mb-5 table table-striped">
        <thead>
            <tr class="table-dark">
                <th scope="col" >No</th>
                <th scope="col" >Nama Mahasiswa</th>
                <th scope="col" >NRP</th>
                <th scope="col" >Alamat</th>
                <th scope="col" >Ket</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $n = 1;
        while($d = mysqli_fetch_array($datas)){
            echo '<tr>
                <td>'.$n++.'</td>
                <td>'.$d['nama_mahasiswa'].'</td>
                <td>'.$d['nrp'].'</td>
                <td>'.$d['alamat'].'</td>
                <td><a href="edit.php?id='.$d['id'].'">Edit</a> <a href="#">Hapus</a></td>
            </tr>';
        }
        ?>

        </tbody>
        
    </table>
    
    <div class="row d-flex justify-content-center">
        <div class="col-5 d-flex justify-content-center">
            <a class="btn bg-primary text-light btn-add"  href="add.php">Tambah Data Mahasiswa</a>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
</body>
</html>
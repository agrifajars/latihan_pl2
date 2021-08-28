<h1>Input Dosen</h2>
<?php

    //Insert Connection Script
    include 'Koneksi.php';
    
    //Click isset event 
    if(isset($_POST['proses'])){
        //Query Insert Data
        $query = mysqli_query($conn,"insert into tbl_dosen values(
            '',
            '".$_POST['id_dosen']."',
            '".$_POST['nama_dosen']."'
        )");
    header('Location: Latihan5.php');
    }
?>

<!-- Simple Html TAG -->
<form action="" method="POST">
    <b>ID Dosen : </b>
    <input type="text" name="id_dosen">
    <br>
    <br>
    <b>Nama Dosen : </b>
    <input type="text" name="nama_dosen">
    <br>
    <br>
    <input type="submit" name="proses" value="Simpan">
</form>
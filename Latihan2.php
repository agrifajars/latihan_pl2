<h1>Input Mahasiswa</h2>
<?php

    //Insert Connection Script
    include 'Koneksi.php';
    
    //Click isset event 
    if(isset($_POST['proses'])){
        //Query Insert Data
        $query = mysqli_query($conn,"insert into tbl_mahasiswa values(
            '',
            '".$_POST['npm']."',
            '".$_POST['nama_mahasiswa']."'
        )");
    header('Location: Latihan1.php');
    }
?>

<!-- Simple Html TAG -->
<form action="" method="POST">
    <b>NPM : </b>
    <input type="text" name="npm">
    <br>
    <br>
    <b>Nama Mahasiswa : </b>
    <input type="text" name="nama_mahasiswa">
    <br>
    <br>
    <input type="submit" name="proses" value="Simpan">
</form>
<h1>Input Matakuliah</h2>
<?php

    //Insert Connection Script
    include 'Koneksi.php';
    
    //Click isset event 
    if(isset($_POST['proses'])){
        //Query Insert Data
        $query = mysqli_query($conn,"insert into tbl_matakuliah values(
            '',
            '".$_POST['kode_mata_kuliah']."',
            '".$_POST['nama_mata_kuliah']."'
        )");
    header('Location: Latihan9.php');
    }
?>

<!-- Simple Html TAG -->
<form action="" method="POST">
    <b>Kode Matakuliah : </b>
    <input type="text" name="kode_mata_kuliah">
    <br>
    <br>
    <b>Nama Matakuliah : </b>
    <input type="text" name="nama_mata_kuliah">
    <br>
    <br>
    <input type="submit" name="proses" value="Simpan">
</form>
<h1>Update Mahasiswa</h2>
<?php

    //Insert Connection Script
    include 'Koneksi.php';
    
    //Click isset event 
    if(isset($_POST['proses'])){
        //Query Update Data
        $query = mysqli_query($conn,"update tbl_mahasiswa 
            set nama = '".$_POST['nama']."' 
            where npm = '".$_POST['npm']."'
        ");
    header('Latihan1.php');
    }
?>

<!-- Simple HTML Tag -->
<form action="" method="POST">
    <b>NPM : </b>
    <input type="text" name="npm">
    <br>
    <br>
    <b>NAMA : </b>
    <input type="text" name="nama">
    <br>
    <br>
    <input type="submit" name="proses" value="Update">
</form>
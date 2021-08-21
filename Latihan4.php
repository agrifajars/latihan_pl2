<h1>Hapus Mahasiswa</h2>
<?php

    //Insert Connection Script
    include 'Koneksi.php';
    
    //Click isset event 
    if(isset($_POST['proses'])){
        //Query Delete Data
        $query = mysqli_query($conn,"delete from tbl_mahasiswa 
            where npm = '".$_POST['npm']."'
        ");
    header('Latihan1.php');
    }
?>

<!-- Simple HTML tag -->
<form action="" method="POST">
    <b>NPM : </b>
    <input type="text" name="npm">
    <br>
    <br>
    <input type="submit" name="proses" value="Hapus">
</form>
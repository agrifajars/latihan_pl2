<h1>Hapus Mahasiswa</h2>
<?php

    //Insert Connection Script
    include 'Koneksi.php';

    //Get Value Url Params
    $id = $_GET['id'];
    $npm = $_GET['npm'];
    $nama_mahasiswa = $_GET['nama_mahasiswa'];
    
    //Click isset event 
    if(isset($_POST['proses'])){
        //Query Delete Data
        $query = mysqli_query($conn,"
            delete from tbl_mahasiswa where id = $id
        ");
    header('Location: Latihan1.php');
    }
?>

<!-- Simple HTML tag -->
<form action="" method="POST">
    <b>NPM : </b>
    <input type="text" name="npm" value="<?php echo $npm; ?>" disabled>
    <br>
    <br>
    <b>NAMA : </b>
    <input type="text" name="nama" value="<?php echo $nama_mahasiswa; ?>" disabled>
    <br>
    <br>
    <input type="submit" name="proses" value="Hapus">
</form>
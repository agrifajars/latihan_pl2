<h1>Hapus Matakuliah</h2>
<?php

    //Insert Connection Script
    include 'Koneksi.php';

    //Get Value Url Params
    $id = $_GET['id'];
    $kode_mata_kuliah = $_GET['kode_mata_kuliah'];
    $nama_mata_kuliah = $_GET['nama_mata_kuliah'];
    
    //Click isset event 
    if(isset($_POST['proses'])){
        //Query Delete Data
        $query = mysqli_query($conn,"
            delete from tbl_matakuliah where id = $id
        ");
    header('Location: Latihan9.php');
    }
?>

<!-- Simple HTML tag -->
<form action="" method="POST">
    <b>Kode Matakuliah : </b>
    <input type="text" name="kode_mata_kuliah" value="<?php echo $kode_mata_kuliah; ?>" disabled>
    <br>
    <br>
    <b>Nama Matakuliah : </b>
    <input type="text" name="nama_mata_kuliah" value="<?php echo $nama_mata_kuliah; ?>" disabled>
    <br>
    <br>
    <input type="submit" name="proses" value="Hapus">
</form>
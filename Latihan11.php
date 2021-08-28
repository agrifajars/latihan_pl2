<h1>Update Dosen</h2>
<?php

    //Insert Connection Script
    include 'Koneksi.php';

    //Get Value Url Params
    $id = $_GET['id'];
    $kode_mata_kuliah = $_GET['kode_mata_kuliah'];
    $nama_mata_kuliah = $_GET['nama_mata_kuliah'];
    
    //Click isset event 
    if(isset($_POST['proses'])){
        //Query Update Data
        $query = mysqli_query($conn,"update tbl_matakuliah 
        set 
        kode_mata_kuliah = '".$_POST['kode_mata_kuliah']."',
        nama_mata_kuliah = '".$_POST['nama_mata_kuliah']."'
        where id = $id
        ");
    header('Location: Latihan9.php');
    }
?>

<!-- Simple HTML Tag -->
<form action="" method="POST">
    <b>Kode Matakuliah : </b>
    <input type="text" name="kode_mata_kuliah" value="<?php echo $kode_mata_kuliah; ?>">
    <br>
    <br>
    <b>Nama Matakuliah : </b>
    <input type="text" name="nama_mata_kuliah" value="<?php echo $nama_mata_kuliah; ?>">
    <br>
    <br>
    <input type="submit" name="proses" value="Update">
</form>
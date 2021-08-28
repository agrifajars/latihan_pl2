<h1>Hapus Dosen</h2>
<?php

    //Insert Connection Script
    include 'Koneksi.php';

    //Get Value Url Params
    $id = $_GET['id'];
    $id_dosen = $_GET['id_dosen'];
    $nama_dosen = $_GET['nama_dosen'];
    
    //Click isset event 
    if(isset($_POST['proses'])){
        //Query Delete Data
        $query = mysqli_query($conn,"
            delete from tbl_dosen where id = $id
        ");
    header('Location: Latihan5.php');
    }
?>

<!-- Simple HTML tag -->
<form action="" method="POST">
    <b>ID Dosen : </b>
    <input type="text" name="id_dosen" value="<?php echo $id_dosen; ?>" disabled>
    <br>
    <br>
    <b>Nama Dosen : </b>
    <input type="text" name="nama_dosen" value="<?php echo $nama_dosen; ?>" disabled>
    <br>
    <br>
    <input type="submit" name="proses" value="Hapus">
</form>
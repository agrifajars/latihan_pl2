<h1>Update Dosen</h2>
<?php

    //Insert Connection Script
    include 'Koneksi.php';

    //Get Value Url Params
    $id = $_GET['id'];
    $id_dosen = $_GET['id_dosen'];
    $nama_dosen = $_GET['nama_dosen'];
    
    //Click isset event 
    if(isset($_POST['proses'])){
        //Query Update Data
        $query = mysqli_query($conn,"update tbl_dosen 
        set 
        nama_dosen = '".$_POST['nama_dosen']."',
        id_dosen = '".$_POST['id_dosen']."'
        where id = $id
        ");
    header('Location: Latihan5.php');
    }
?>

<!-- Simple HTML Tag -->
<form action="" method="POST">
    <b>ID Dosen : </b>
    <input type="text" name="id_dosen" value="<?php echo $id_dosen; ?>">
    <br>
    <br>
    <b>Nama Dosen : </b>
    <input type="text" name="nama_dosen" value="<?php echo $nama_dosen; ?>">
    <br>
    <br>
    <input type="submit" name="proses" value="Update">
</form>
<h1>Update Mahasiswa</h2>
<?php

    //Insert Connection Script
    include 'Koneksi.php';

    //Get Value Url Params
    $id = $_GET['id'];
    $npm = $_GET['npm'];
    $nama_mahasiswa = $_GET['nama_mahasiswa'];
    
    //Click isset event 
    if(isset($_POST['proses'])){
        //Query Update Data
        $query = mysqli_query($conn,"update tbl_mahasiswa 
        set 
        nama_mahasiswa = '".$_POST['nama_mahasiswa']."',
        npm = '".$_POST['npm']."'
        where id = $id
        ");
    header('Location: Latihan1.php');
    }
?>

<!-- Simple HTML Tag -->
<form action="" method="POST">
    <b>NPM : </b>
    <input type="text" name="npm" value="<?php echo $npm; ?>">
    <br>
    <br>
    <b>NAMA : </b>
    <input type="text" name="nama_mahasiswa" value="<?php echo $nama_mahasiswa; ?>">
    <br>
    <br>
    <input type="submit" name="proses" value="Update">
</form>
<h1>Input Nilai</h2>
<?php

    //Insert Connection Script
    include 'Koneksi.php';
    
    //Click isset event 
    if(isset($_POST['proses'])){
        //Query Insert Data
        $query = mysqli_query($conn,"insert into tbl_nilai values(
            '',
            '".$_POST['nama_mata_kuliah']."',
            '".$_POST['nama_mahasiswa']."',
            '".$_POST['uts']."',
            '".$_POST['uas']."',
            '".$_POST['quiz']."',
            '".$_POST['tugas']."'
        )");
    header('Location: Latihan13.php');
    }
?>

<!-- Simple Html TAG -->
<form action="" method="POST">
    <table>
        <tr>
            <td>Nama Mahasiswa </td>
            <td>
                <select name="nama_mahasiswa">
                <option disabled selected> Pilih </option>
                <?php 
                    $sql = mysqli_query($conn, "SELECT * FROM tbl_mahasiswa");
                    while ($data=mysqli_fetch_array($sql)) {
                ?>
                <option value="<?=$data['nama_mahasiswa']?>"><?=$data['nama_mahasiswa']?></option> 
                <?php } ?>
            </select>
            </td>
        </tr>
        <tr>
            <td>Nama Matakuliah </td>
            <td>
                <select name="nama_mata_kuliah">
                <option disabled selected> Pilih </option>
                <?php 
                    $sql = mysqli_query($conn, "SELECT * FROM tbl_matakuliah");
                    while ($data=mysqli_fetch_array($sql)) {
                ?>
                <option value="<?=$data['nama_mata_kuliah']?>"><?=$data['nama_mata_kuliah']?></option> 
                <?php } ?>
            </select>
            </td>
        </tr>
        <tr>
            <td>UTS</td>
            <td>
                <Input type="text" name="uts">
            </td>
        </tr>
        <tr>
            <td>UAS</td>
            <td>
                <Input type="text" name="uas">
            </td>
        </tr>
        <tr>
            <td>quiz</td>
            <td>
                <Input type="text" name="quiz">
            </td>
        </tr>
        <tr>
            <td>tugas</td>
            <td>
                <Input type="text" name="tugas">
            </td>
        </tr>
    </table>
    <input type="submit" name="proses" value="Simpan">
</form>
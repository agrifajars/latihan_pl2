<h1>Hapus Nilai</h2>
<?php

    //Insert Connection Script
    include 'Koneksi.php';

    //Get Value Url Params
    $id = $_GET['id'];
    $nama_mata_kuliah = $_GET['nama_mata_kuliah'];
    $nama_mahasiswa = $_GET['nama_mahasiswa'];
    $uts = $_GET['uts'];
    $uas = $_GET['uas'];
    $quiz = $_GET['quiz'];
    $tugas = $_GET['tugas'];
    
    //Click isset event 
    if(isset($_POST['proses'])){
        //Query Insert Data
        $query = mysqli_query($conn,"delete from tbl_nilai where id = $id");
    header('Location: Latihan13.php');
    }
?>

<!-- Simple Html TAG -->
<form action="" method="POST">
    <table>
        <tr>
            <td>Nama Mahasiswa </td>
            <td>
                <Input type="text" name="nama_mahasiswa" value="<?php echo $nama_mahasiswa; ?>" disabled>
            </td>
        </tr>
        <tr>
            <td>Nama Matakuliah </td>
            <td>
                <input type="text" name="nama_mata_kuliah" value="<?php echo $nama_mata_kuliah; ?>" disabled>
            </td>
        </tr>
        <tr>
            <td>UTS</td>
            <td>
                <Input type="text" name="uts" value="<?php echo $uts; ?>" disabled>
            </td>
        </tr>
        <tr>
            <td>UAS</td>
            <td>
                <Input type="text" name="uas" value="<?php echo $uas; ?>" disabled>
            </td>
        </tr>
        <tr>
            <td>quiz</td>
            <td>
                <Input type="text" name="quiz" value="<?php echo $quiz; ?>" disabled>
            </td>
        </tr>
        <tr>
            <td>tugas</td>
            <td>
                <Input type="text" name="tugas" value="<?php echo $tugas; ?>" disabled>
            </td>
        </tr>
    </table>
    <input type="submit" name="proses" value="Hapus">
</form>
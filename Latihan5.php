
<a href="Latihan1.php">Mahasiswa</a> |
<a href="Latihan5.php">Dosen</a> |
<a href="Latihan9.php">Matakuliah</a> |
<a href="Latihan13.php">Nilai</a> |
<hr size="5" color="black">

<h1>Daftar Dosen</h2>
<?php
    //Insert Connection Script
    include 'Koneksi.php';

    //Create Script connection to table
    $query = mysqli_query($conn,'select * from tbl_dosen');
?>

<a href="Latihan6.php">Tambah Data</a>
<br>
<br>

<table border="1">
    <tr>
        <td>NO</td>
        <td>ID Dosen</td>
        <td>Nama Dosen</td>
        <td>Aksi</td>
    </tr>
    <?php while($data = mysqli_fetch_array($query)) : ?>
    <tr>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['id_dosen']; ?></td>
        <td><?php echo $data['nama_dosen']; ?></td>
        <td>
            <a href="Latihan7.php?id=<?php echo $data['id']; ?>&id_dosen=<?php echo $data['id_dosen']; ?>&nama_dosen=<?php echo $data['nama_dosen']; ?>">Edit</a>
            <a href="Latihan8.php?id=<?php echo $data['id']; ?>&id_dosen=<?php echo $data['id_dosen']; ?>&nama_dosen=<?php echo $data['nama_dosen']; ?>">Hapus</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
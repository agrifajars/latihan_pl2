
<a href="Latihan1.php">Mahasiswa</a> |
<a href="Latihan5.php">Dosen</a> |
<a href="Latihan9.php">Matakuliah</a> |
<a href="Latihan13.php">Nilai</a> |
<hr size="5" color="black">

<h1>Daftar Matakuliah</h2>
<?php
    //Insert Connection Script
    include 'Koneksi.php';

    //Create Script connection to table
    $query = mysqli_query($conn,'select * from tbl_matakuliah');
?>

<a href="Latihan10.php">Tambah Data</a>
<br>
<br>

<table border="1">
    <tr>
        <td>NO</td>
        <td>Kode Matakuliah</td>
        <td>Nama Matakuliah</td>
        <td>Aksi</td>
    </tr>
    <?php while($data = mysqli_fetch_array($query)) : ?>
    <tr>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['kode_mata_kuliah']; ?></td>
        <td><?php echo $data['nama_mata_kuliah']; ?></td>
        <td>
            <a href="Latihan11.php?id=<?php echo $data['id']; ?>&kode_mata_kuliah=<?php echo $data['kode_mata_kuliah']; ?>&nama_mata_kuliah=<?php echo $data['nama_mata_kuliah']; ?>">Edit</a>
            <a href="Latihan12.php?id=<?php echo $data['id']; ?>&kode_mata_kuliah=<?php echo $data['kode_mata_kuliah']; ?>&nama_mata_kuliah=<?php echo $data['nama_mata_kuliah']; ?>">Hapus</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>

<a href="Latihan1.php">Mahasiswa</a> |
<a href="Latihan5.php">Dosen</a> |
<a href="Latihan9.php">Matakuliah</a> |
<a href="Latihan13.php">Nilai</a> |
<hr size="5" color="black">

<h1>Daftar Nilai</h2>
<?php
    //Insert Connection Script
    include 'Koneksi.php';

    //Create Script connection to table
    $query = mysqli_query($conn,'select * from tbl_nilai');
?>

<a href="Latihan14.php">Tambah Data</a>
<br>
<br>

<table border="1">
    <tr>
        <td>NO</td>
        <td>Nama Matakuliah</td>
        <td>Nama Mahasiswa</td>
        <td>uts</td>
        <td>uas</td>
        <td>quiz</td>
        <td>tugas</td>
        <td>Aksi</td>
    </tr>
    <?php while($data = mysqli_fetch_array($query)) : ?>
    <tr>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['nama_mata_kuliah']; ?></td>
        <td><?php echo $data['nama_mahasiswa']; ?></td>
        <td><?php echo $data['uts']; ?></td>
        <td><?php echo $data['uas']; ?></td>
        <td><?php echo $data['quiz']; ?></td>
        <td><?php echo $data['tugas']; ?></td>
        <td>
            <a href="Latihan15.php?id=<?php echo $data['id']; ?>&nama_mata_kuliah=<?php echo $data['nama_mata_kuliah']; ?>&nama_mahasiswa=<?php echo $data['nama_mahasiswa']; ?>&uts=<?php echo $data['uts']; ?>&uas=<?php echo $data['uas']; ?>&quiz=<?php echo $data['quiz']; ?>&tugas=<?php echo $data['tugas']; ?>">Edit</a>
            <a href="Latihan16.php?id=<?php echo $data['id']; ?>&nama_mata_kuliah=<?php echo $data['nama_mata_kuliah']; ?>&nama_mahasiswa=<?php echo $data['nama_mahasiswa']; ?>&uts=<?php echo $data['uts']; ?>&uas=<?php echo $data['uas']; ?>&quiz=<?php echo $data['quiz']; ?>&tugas=<?php echo $data['tugas']; ?>">Hapus</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
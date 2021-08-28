
<a href="Latihan1.php">Mahasiswa</a> |
<a href="Latihan5.php">Dosen</a> |
<a href="Latihan9.php">Matakuliah</a> |
<a href="Latihan13.php">Nilai</a> |
<hr size="5" color="black">

<h1>Daftar Mahasiswa</h2>
<?php
    //Insert Connection Script
    include 'Koneksi.php';

    //Create Script connection to table
    $query = mysqli_query($conn,'select * from tbl_mahasiswa');
?>

<a href="Latihan2.php">Tambah Data</a>
<br>
<br>

<table border="1">
    <tr>
        <td>NO</td>
        <td>NPM</td>
        <td>Nama Mahasiswa</td>
        <td>Aksi</td>
    </tr>
    <?php while($data = mysqli_fetch_array($query)) : ?>
    <tr>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['npm']; ?></td>
        <td><?php echo $data['nama_mahasiswa']; ?></td>
        <td>
            <a href="Latihan3.php?id=<?php echo $data['id']; ?>&npm=<?php echo $data['npm']; ?>&nama_mahasiswa=<?php echo $data['nama_mahasiswa']; ?>">Edit</a>
            <a href="Latihan4.php?id=<?php echo $data['id']; ?>&npm=<?php echo $data['npm']; ?>&nama_mahasiswa=<?php echo $data['nama_mahasiswa']; ?>">Hapus</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
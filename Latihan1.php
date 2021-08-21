<h1>Daftar Mahasiswa</h2>
<?php

    //Insert Connection Script
    include 'Koneksi.php';

    //Create Script connection to table
    $query = mysqli_query($conn,'select * from tbl_mahasiswa');
    
    //Fetch Data From DB
    while($data = mysqli_fetch_array($query)){
        echo "<br>";
        echo $data['npm'];
        echo "<br>";
        echo $data['nama'];
        echo "<br>";
    }

?>
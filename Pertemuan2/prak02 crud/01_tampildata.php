<h2>Data Mahasiswa</h2>
<form action="02_tambahdata.php">
    <input type="submit" value="tambah data baru">
</form>
<?php
    include "koneksi.php";
    $r=mysqli_query($kon,"SELECT * FROM mahasiswa");
    $i=1;
    while($brs=mysqli_fetch_assoc($r)){
        // print_r($brs);
        echo $i++.". ".$brs["nama"]."<br>"; 
    }
?>
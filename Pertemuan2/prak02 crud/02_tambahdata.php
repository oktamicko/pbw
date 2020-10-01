<h2>FORM ISIAN DATA BARU</h2>
<form>
    nama: <input type="text" name="nm">
    <input type="submit" name="sub" value="simpan data baru">
    <input type="submit" name="sub" value="kembali ke tampil data">
    <?php
        if (isset($_GET['sub'])){
            if ($_GET['sub']=="kembali ke tampil data"){
                header("location:01_tampildata.php");
            }
            else {
                if (strlen($_GET['nm'])){
                    include "koneksi.php";
                    mysqli_query($kon,"INSERT INTO `mahasiswa` (`id`, `nama`) 
                                       VALUES (NULL, '".$_GET['nm']."')");
                    echo "<br>Data <b>".$_GET['nm']."</b> telah disimpan ke database";                       
                }
                else 
                    echo "<br>Data nama tidak boleh kosong";
            }
        }
    ?>
</form>
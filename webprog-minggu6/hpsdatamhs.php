<?php
    /**
     * Menghapus Data mhs berdasarkan NIM
     * 1. Buka koneksi
     * 2. Buat sql
     * 3. Execute sql
     * 4. Tutup koneksi
     * 5. Kembali ke list data mhs
     */
    include_once("dbkoneksi02.php");

    if(isset($_GET["n"])){
        $sql = "DELETE FROM mhs WHERE NIM='".$_GET["n"]."'";
        $hsl = mysqli_query($cnn,$sql);
    }
    mysqli_close($cnn);
    header("location: tampilkantabel.php");
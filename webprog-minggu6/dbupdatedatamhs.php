<?php
    /**
     * Update Data
     * 1. Buka koneksi dan buka database mhs
     * 2. Buat query update data
     * 3. Execute
     * 4. Tutup Koneksi
     * 5. Kembali ke list data mhs
     */

     include_once("dbkoneksi02.php");

     if(isset($_POST["txNIM"])){
        $nim = $_POST["txNIM"];
        $nama = $_POST["txNAMA"];
        $talag = $_POST["txTALAG"];
        $jk = $_POST["txJK"];
        $jur = $_POST["txJUR"];
        $passs = $_POST["txPASSS"];

        $sql = "UPDATE mhs SET 
            NIM='$nim', 
            NAMA='$nama',
            TGLLAHIR='$talag',
            JK='$jk',
            JURUSAN='$jur',
            PASSCODE='$passs',
            WHERE NIM='$nim';";

        $hsl = mysqli_query($cnn,$sql);
        mysqli_close($cnn);
     }
     header("location: tampilkantabel.php");
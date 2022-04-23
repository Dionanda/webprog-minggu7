<?php
    /**
     * Membaca data mhs berdasarkan NIM
     * 1. Ambil parameter NIM
     * 2. Membuat query baca data mhs berdasarkan NIM
     * 3. Execute
     * 4. Simpan ke variabel
     */
    if(isset($_GET["n"])){
        $nim = $_GET["n"];
        $sql = "SELECT NIM, NAMA, JURUSAN, JK, TGLLAHIR, PASSCODE FROM mhs WHERE NIM='".$nim."';";
        $hsl = mysqli_query($cnn,$sql);
        $h = mysqli_fetch_Array($hsl);
    }
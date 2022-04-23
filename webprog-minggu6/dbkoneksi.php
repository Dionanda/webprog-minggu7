<?php
    /*
    membuat koneksi
    */
    include_once("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASCODE) or die("Koneksi ke DBMS MYSql gagal");
    echo("Koneksi ke DBMS MYSql Sukses");

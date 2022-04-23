<?php
    include_once("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASCODE,DBNAME,DBPORT) or die("Koneksi ke DBMS MYSql gagal");
    echo("Koneksi ke DBMS MYSql Sukses");
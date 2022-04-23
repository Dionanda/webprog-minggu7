<?php
    include_once("dbkoneksi.php");
    if($cnn){
        $sql = 'CREATE DATABASE mahasiswa;';
        $hsl = mysqli_query($cnn,$sql);
        if($hsl){
            echo("<br>Pembuatan database mahasiswa <strong>sukses<strong> dibuat<br>");
        } else{
            echo("<br>Database mahasiswa <strong>gagal<strong> dibuat<br>");
        }
        mysqli_close($cnn);
    }   
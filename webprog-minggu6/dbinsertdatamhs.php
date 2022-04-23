<?php
    /**
     * Menambahkan data ke tabel mhs
     * 1. buat koneksi
     * 2. buat script sql untuk insert data ke tabel mhs
     *    NIM, NAMA, Jurusan, tgl lahir, jk, passcode 
     * 3. execute point 2
     * 4. cek status
     * 5. close connection
     */

if(isset($_POST["txNIM"])){
     include_once("dbkoneksi02.php");

     $nim = $_POST["txNIM"];
     $nama = $_POST["txNAMA"];
     $talag = $_POST["txTALAG"];
     $jk = $_POST["txJK"];
     $jur = $_POST["txJUR"];
     $passs = $_POST["txPASSS"];

     $sqlINSERT = "INSERT INTO mhs(NIM, NAMA, JURUSAN, JK, TGLLAHIR, PASSCODE) VALUES
     ('".$nim."','".$nama."','".$jur."','".$jk."','".$talag."','".$passs."');";

    //echo "SQL: ". $sqlINSERT . "<br>";

     $hsl = mysqli_query($cnn, $sqlINSERT);

     if($hsl){
         echo "<br>Insert Data sukses<br>";
     }else{
         echo "<br>Insert Data gagal<br>";
     }

     mysqli_close($cnn);
}
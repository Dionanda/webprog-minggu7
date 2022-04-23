<?php
    include_once("dbkoneksi02.php");
    include_once("dbbdmhs.php");
    if($h["JK"]=="L"){
        $seLaki = " selected";
        $sePerempuan = " ";
    } else{
        $seLaki = " ";
        $sePerempuan = " selected";
    }
    if($h["JURUSAN"]=="MTI"){
        $seMTI = " selected";
        $seKAB = " ";
    } else{
        $seMTI = " ";
        $seKAB = " selected";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Mahasiswa</title>
</head>
<body>

    <h3>Edit Data Mahasiswa</h3>
    <form action="dbupdatedatamhs.php" method="POST">
        NIM
        <div>
        <input type="text" name="txNIM" value="<?=$h["NIM"];?>">
        </div>
        NAMA
        <div>
        <input type="text" name="txNAMA" value="<?=$h["NAMA"];?>">
        </div>
        Jenis Kelamin
        <div>
            <select name="txJK">
                <option value="L"<?=$seLaki;?>>Laki-Laki</option>
                <option value="P"<?=$sePerempuan;?>>Perempuan</option>
            </select>
        </div>
        TGL Lahir
        <div>
            <input type="date" name="txTALAG" value="<?=$h["TGLLAHIR"];?>">
        </div>
        Jurusan
        <div>
        <select name="txJUR" >
            <option value="MTI"<?=$seMTI;?>>MTI</option>
            <option value="KAB"<?=$seKAB;?>>KAB</option>
        </select>
        </div>
        Passcode
        <div>
            <input type="password" name="txPASSS">
        </div>
        <div>
            <button type="submit">Simpan Data</button>
        </div>
    </form>

</body>
</html>
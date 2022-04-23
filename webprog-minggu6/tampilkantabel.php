<?php

    include_once("dbkoneksi02.php");
    echo ("<br><br>");
    $sql = "SELECT NIM, NAMA, JURUSAN, JK, TGLLAHIR, PASSCODE FROM mhs;";
    
    $hsl = mysqli_query($cnn,$sql);


    echo "<table>
            <theader>
                <tr>
                <th>NO</th>
                <th>NIM</th>
                <th>NAMA</th>
                <th>JURUSAN</th>
                <th>JK</th>
                <th>TGLLAHIR</th>
                <th>PASSCODE</th>
                <th><a href='insertdatamhs.php'>TambahData</a></th>
                </tr>
            </theader>
            <tbody>";
            $no = 1;
            while($h = mysqli_fetch_Array($hsl) ){
                if($h["JK"] == "L"){
                    $jk = "Laki-laki";
                } else{
                    $jk = "Perempuan";
                }
                echo "    <tr>
                    <td>".$no."</td>
                    <td>".$h["NIM"]."</td>
                    <td>".$h["NAMA"]."</td>
                    <td>".$h["JURUSAN"]."</td>
                    <td>".$jk."</td>
                    <td>".$h["TGLLAHIR"]."</td>
                    <td>".$h["PASSCODE"]."</td>
                    <td><a href='editdatamhs.php?n=".$h["NIM"]."'>Edit</a> | <a href='hpsdatamhs.php?n=".$h["NIM"]."'>DELETE</a></td>
                    </tr>";
                    $no++;
            }
    echo "          </tbody>
    </table>";
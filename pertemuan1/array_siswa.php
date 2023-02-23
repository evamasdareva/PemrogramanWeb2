<?php
$ns1 = ['id'=>1,'nim'=>'01101','uts'=>90,'uas'=>90,'tugas'=>90];
$ns2 = ['id'=>2,'nim'=>'01102','uts'=>80,'uas'=>90,'tugas'=>80];
$ns3 = ['id'=>3,'nim'=>'01103','uts'=>90,'uas'=>80,'tugas'=>80];
$ns4 = ['id'=>4,'nim'=>'01104','uts'=>60,'uas'=>90,'tugas'=>70];

$ar_nilai = [$ns1, $ns2, $ns3, $ns4];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <meta name="description" content="css">
    <style>
        body{
            background-color: ivory;
        }

        h3{
            text-align: center;
            font: 1em Verdana;
        }

        #brown{
            background-color: #DEB887;
        }

        #khaki{
            background-color: khaki;
        }
    
    </style>
</head>
<body>

<h3>Daftar Nilai Siswa</h3>
<table border = "1" width = "100%">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Tugas</th>
            <th>Nilai Akhir</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $nomor = 1;
        foreach($ar_nilai as $ns){
            echo '<tr><td id="khaki">' . $nomor . '</td>';
            echo '<td id="brown">' . $ns['nim'] . '</td>';
            echo '<td id="khaki">' . $ns['uts'] . '</td>';
            echo '<td id="brown">' . $ns['uas'] . '</td>';
            echo '<td id="khaki">' . $ns['tugas'] . '</td>';
            $nilai_akhir = ($ns['uts']+$ns['uas']+$ns['tugas'])/3;
            echo '<td id="brown">' . number_format($nilai_akhir,2,',','.').'</td>';
            $nomor++;
        }
        ?> 
    </tbody>
</table>
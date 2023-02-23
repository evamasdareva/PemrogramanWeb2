<?php
$profileArray = [
    [
        "nama" => "Eva Masdareva", //string
        "kelas" => "TI06", //string
        "nim" => 0110222043, //integer
        "sudah_lulus" => false //boolean, true dan false
    ], [
        "nama" => "Eva Masdareva", //string
        "kelas" => "TI06", //string
        "nim" => 0110222043,//integer
        "sudah_lulus" => false //boolean, true dan false
    ]
    
];

foreach ($profileArray as $profile) {
    echo $profile['nama'];
}
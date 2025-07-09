<?php
// *Only support php ^8.0 +
// Call func with named parameter


function testNama($nama, $umur, $gender){
    echo "Nama : $nama";
    echo "Umur : $umur";
    echo "Gender : $gender";
    return;
}

testNama(umur: 19, nama: "Rahmat", gender: "Pria");

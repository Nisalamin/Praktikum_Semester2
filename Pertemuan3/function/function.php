<?php
// Cara Membuat Fungsi
// function namafungsi(parameter){
// code disini
// }

function luaspersegi($sisi){
    $rumus = $sisi * $sisi;
    return $rumus;

}

echo "Hasilnya adalah :" . luaspersegi(10);
echo "<br>";

// Bikin Fungsi Nama 

function nama(){
    echo "Nama saya adalah nisa;
}

nama();
echo "<br>";

// Fungsi Menggunakan Parameter
// Parameter Default

function perkenalan($nama = "nisa"){
    echo "Perkenalan Nama Saya : " .$nama;

}

perkenalan("nisa");


?>

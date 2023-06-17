<?php
function koneksi(){
    $ip = "localhost";
    $user = "root";
    $password = "";
    $database = "web_dasar_a2";
    $koneksi = mysqli_connect($ip,$user,$password,$database);
    return $koneksi;   
}

function q($nilai){
    $koneksi = koneksi();
    return mysqli_query($koneksi,$nilai);
}

function prodi(){
    return q("SELECT * FROM prodi ORDER BY id ASC");
}
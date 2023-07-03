<?php
date_default_timezone_set("Asia/Jakarta");

function koneksi()
{
    $ip = "localhost";
    $user = "root";
    $password = "";
    $database = "web_dasar_a2";
    $koneksi = mysqli_connect($ip, $user, $password, $database);
    return $koneksi;
}

function q($nilai)
{
    $koneksi = koneksi();
    return mysqli_query($koneksi, $nilai);
}

function prodi()
{
    return q("SELECT * FROM prodi_umsu ORDER BY id ASC");
}

function prodi_satu($id, $isi_tabel)
{
    $x = mysqli_fetch_assoc(
        q("SELECT * FROM prodi_umsu WHERE id = '$id'")
    );
    return $x[$isi_tabel];
}

function prodi_satu_jumlah($id)
{
    return mysqli_num_rows(q("SELECT * FROM prodi_umsu WHERE id = '$id'"));
}

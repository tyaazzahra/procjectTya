<?php
// koneksi database
include 'koneksi.php';

// menangkap dta yang dikirim dari from
$id = $_POST['id'];
$nama = $_POST['nama'];
$NIP = $_POST['NIP'];
$alamat = $_POST['alamat'];


// menginput data ke database
mysqli_query($koneksi,"INSERT INTO tb_guru values('$id','$nama','$NIP','$alamat')");

// mengalihkan halaman kembali ke anggota.php
header("location:anggota.php");

?>

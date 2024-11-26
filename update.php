<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nip = $_POST['NIP'];
$alamat = $_POST['alamat'];
 
// update data ke database
mysqli_query($koneksi,"UPDATE tb_guru SET nama='$nama', NIP='$nip', alamat='$alamat' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:anggota.php");
 
?>
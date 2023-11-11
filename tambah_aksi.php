<?php
// koneksi database
include "koneksi.php";

// menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];

// insert data ke database
mysqli_query($koneksi, "INSERT INTO mahasiswa (nama, nim, alamat) VALUES ('$nama', '$nim', '$alamat')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>

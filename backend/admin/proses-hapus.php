<?php
include '../koneksi.php';

$id = $_GET["id_berita"];
//mengambil id yang ingin dihapus

//jalankan query DELETE untuk menghapus data
$query = "DELETE FROM tbl_berita WHERE id_berita='$id' ";
$hasil_query = mysqli_query($konek, $query);

//periksa query, apakah ada kesalahan
if(!$hasil_query) {
  die ("Gagal menghapus data: ".mysqli_errno($konek).
   " - ".mysqli_error($konek));
} else {
	header("location:layout.php?page=informasi");
}
?>
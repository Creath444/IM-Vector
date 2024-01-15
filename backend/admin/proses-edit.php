<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include '../koneksi.php';

  // membuat variabel untuk menampung data dari form
  $id = $_POST['id_berita'];
  $judul   = $_POST['judul'];
  $tanggal   = $_POST['tanggal'];
  $content   = $_POST['content'];
  $kategori   = $_POST['kategori'];
  $gambar = $_POST['file-gambar'];
  $file_gambar = $_FILES['file-gambar-baru']['name'];
  //cek dulu jika merubah gambar produk jalankan coding ini
  if($file_gambar != "") {
    $ekstensi_diperbolehkan = array('png','jpg','jpeg','gif'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $file_gambar); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['file-gambar-baru']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $gambar_baru = $angka_acak.'-'.$file_gambar; //menggabungkan angka acak dengan nama file sebenarnya
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  //menghapus gambar
                  unlink("gambar/".$gambar);
                  move_uploaded_file($file_tmp, 'gambar/'.$gambar_baru); //memindah file gambar ke folder gambar
                      
                    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
                   $query  = "UPDATE tbl_berita SET kategori = '$kategori', judul = '$judul', tanggal = '$tanggal', isi = '$content', gambar = '$gambar_baru'";
                    $query .= "WHERE id_berita = '$id'";
                    $result = mysqli_query($konek, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($konek).
                             " - ".mysqli_error($konek));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil diubah.');window.location='layout.php?page=informasi';</script>";
                    }
              } else {     
               //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg, png,jpeg dan gif.');window.location='layout.php?page=informasi';</script>";
              }
    } else {
 // jalankan query UPDATE berdasarkan ID yang produknya kita edit
   $query  = "UPDATE tbl_berita SET kategori = '$kategori', judul = '$judul', tanggal = '$tanggal', isi = '$content', gambar = '$gambar_baru'";
    $query .= "WHERE id_berita = '$id'";
    $result = mysqli_query($konek, $query);
    // periska query apakah ada error
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($konek).
             " - ".mysqli_error($konek));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>alert('Data berhasil diubah.');window.location='layout.php?page=informasi';</script>";
    }
}
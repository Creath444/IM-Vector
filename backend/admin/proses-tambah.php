	<?php 

	include '../koneksi.php';

	$judul 		= $_POST['judul'];
	$tanggal 	= $_POST['tanggal'];
	$content	= $_POST['content'];
	$kategori	= $_POST['kategori'];

// ambil data file
	$rand = rand(1,999);
	$file_gambar 	= $_FILES['file-gambar']['name'];
	$tmp_name 		= $_FILES['file-gambar']['tmp_name'];
	$ukuran 		= $_FILES['file-gambar']['size'];
	$ext 			= pathinfo($file_gambar, PATHINFO_EXTENSION);

// tentukan lokasi file akan dipindahkan		
	$dirUpload = 'gambar/'.$rand.'_'.$file_gambar;


	if($ext != "jpg" && $ext != "png" && $ext != "jpeg"	&& $ext != "gif" ) {
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	}else{
		if($ukuran < 1044070){		
		// membuat format nama random file
			$gambar = $rand.'_'.$file_gambar;

		// memindahkan file ke folder
			if (move_uploaded_file($tmp_name,$dirUpload)) {
			// memasukan file ke database
				$insert = mysqli_query($konek, "INSERT INTO tbl_berita VALUES('','$kategori','$judul','$content','$tanggal','$gambar')");
				if(!$insert){
					die ("Query gagal dijalankan: ".mysqli_errno($konek)." - ".mysqli_error($konek));
				} else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
					echo "<script>alert('Data berhasil diubah.');window.location='layout.php?page=informasi';</script>";
				}
			}

		}else{
			header("location:layout.php?page=informasi");
		}
	}
	?>

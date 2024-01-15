<?php
if(isset($_GET['id_berita'])){
	$id_berita   =$_GET['id_berita'];
}
else {
	die ("Error. No ID Selected!");    
}
include "../koneksi.php";
$query    =mysqli_query($konek, "SELECT * FROM tbl_berita WHERE id_berita='$id_berita'");
$berita    =mysqli_fetch_array($query);
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Detail Data</h1>

</div>
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header bg-danger text-white">
				Detail Informasi
			</div>
			<?php
       	 //Validasi untuk menampilkan pesan pemberitahuan
			if (isset($_GET['page'])) {

				if ($_GET['page']=='berhasil'){
					echo"<div class='alert alert-success'><strong>Berhasil!</strong> File telah diupload!</div>";
				}else if ($_GET['page']=='gagal'){
					echo"<div class='alert alert-danger'><strong>Gagal!</strong> File gagal diupload!</div>";
				}    
			}

			
			?>
			
			<div class="card-body">
				<h1 style="text-align: center;"><?php echo $berita['judul'] ?></h1>
				<?php 
				include 'format_tanggal.php';
				$date 		= $berita['tanggal'];
				$tanggal 	= tgl_indo("$date");
				?>
				<h6 style="text-align: center;"><?php echo $tanggal ?></h6>
				<div class="text-center">				
					<a  href="gambar/<?php echo $berita['gambar'] ?>"><img style="text-align: center;width:80%;"src="gambar/<?php echo $berita['gambar'] ?>"></a>
				</div>
				<p><?php echo $berita['isi'] ?></p> 				
				<a href="layout.php?page=informasi"><button type="button" class="btn btn-secondary">Close</button></a>
			</div>
		</div>
	</div>
</div>
 

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script type="text/javascript">
	tinymce.init({
		selector: "textarea",
		plugins: [
		"advlist autolink lists link image charmap print preview anchor",
		"searchreplace visualblocks code fullscreen",
		"insertdatetime media table contextmenu paste"
		],
		toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
	});

</script>
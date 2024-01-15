<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Artikel</h1>
</div>
<div class="row">
	<!-- <a href="layout.php?page=tambah-data" class="ml-3 mb-2 btn btn-sm btn-primary"></a> -->
	<!-- Button trigger modal -->
	<button type="button" class="m-3 btn btn-secondary" data-toggle="modal" data-target="#tambah-data">
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
			<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
			<path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
		</svg>
		Tambah Artikel
	</button>
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header bg-danger text-white">
				Daftar Artikel
			</div>
			<?php 	
 			// if (isset($_GET['hapus'])) {
 			// 	if ($_GET['hapus']=='berhasil'){
 			// 		echo"<div class='alert alert-success'><strong>Berhasil!</strong> File gambar telah dihapus!</div>";
 			// 	}else if ($_GET['hapus']=='gagal'){
 			// 		echo"<div class='alert alert-danger'><strong>Gagal!</strong> File gambar gagal dihapus!</div>";
 			// 	}    
			?>
			<div class="card-body">
				<table class="table table-striped">
					<thead class="table-danger">
						<tr>
							<th scope="col">No</th>
							<th scope="col">Gambar</th>
							<th scope="col">Tanggal</th>
							<th scope="col">Judul</th>
							<th scope="col">Kategori Artikel</th>
							<th class="col-lg-3">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						include '../koneksi.php';
						$sql = "SELECT * FROM tbl_berita";
						$no ="1";
						$result = mysqli_query($konek, $sql);
						include 'format_tanggal.php';
						while($berita = mysqli_fetch_array($result)){
							$date 		= $berita['tanggal'];
							$tanggal 	= tgl_indo("$date");
							?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><a href="gambar/<?php echo $berita['gambar']?>" target="_blink"><?php echo "<img src='gambar/$berita[gambar]' width='50' height='50' />";?></a></td>
								<td><?php echo $tanggal ?></td>
								<td><?php echo $berita['judul']; ?></td>
								<td><?php echo $berita['kategori']; ?></td>
								<td>
									<!-- Modal Detail data -->
									<a class="btn btn-primary btn-sm" href="layout.php?page=view&id_berita=<?php echo $berita['id_berita'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
										<path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
										<path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
									</svg> View</a>

									<a type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit-data<?php echo $berita['id_berita']?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
										<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
										<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
									</svg> Edit</a>
									<!-- Modal tambah data-->
									<div class="modal fade" id="edit-data<?php echo $berita['id_berita'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
										<div class="modal-dialog  rotateInDownLeft animated">
											<div class="modal-content" style="width: 750px;">
												<div class="modal-header">
													<h5 class="modal-title" id="staticBackdropLabel">Daftar Artikel</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<form method="POST" action="proses-edit.php" enctype="multipart/form-data">
														<div class="form-group">
															<input name="id_berita" value="<?php echo $berita['id_berita']; ?>"  hidden>
															<label for="exampleInputEmail1">Judul Berita</label>
															<input type="text" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Judul Berita" value="<?php echo $berita['judul'] ?>">
															<label for="exampleInputEmail1">Tanggal Berita</label>
															<input type="date" name="tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $berita['tanggal'] ?>">
															<label for="exampleInputEmail1">Kategori Artikel</label>
															<select class="form-control" name="kategori">
																<option value="<?php echo $berita['kategori'] ?>" hidden><?php echo $berita['kategori'] ?></option>															
															</select>	
															<label for="exampleInputEmail1">Isi Berita</label>
															<textarea name="content" id="content" class="form-control"><?php echo $berita['isi'] ?>"</textarea>
															<label for="exampleInputEmail1">Gambar</label>
															<div> 							
																<img src="gambar/<?php echo $berita['gambar'] ?>" id="preview" class="img-thumbnail" width="200" height="200" >
																<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
																<input value="gambar/<?php echo $berita['gambar'] ?>" type="file" name="file-gambar" class="form-control file" id="exampleInputEmail1"
																aria-describedby="emailHelp" hidden>
																<input type="file" name="file-gambar-baru" class="form-control file" id="exampleInputEmail1"
																aria-describedby="emailHelp">
															</div>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
															<input class="btn btn-success m-2" type="submit" name="submit" value="Uploud">
														</div>
													</form> 				
												</div>
											</div>
										</div>
									</div>

									<a href="proses-hapus.php?id_berita=<?php echo $berita['id_berita']?>" class='btn btn-danger btn-sm' onclick="return confirm('Apakah anda ingin menghapus ?')"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
										<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
										<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
									</svg> Hapus</a>
								</td>								
							</tr>							
						<?php  }?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<!-- Modal tambah data-->
	<div class="modal fade" id="tambah-data" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
		<div class="modal-dialog  rotateInDownLeft animated">
			<div class="modal-content" style="width: 750px;">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Daftar Informasi</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php
					 //Validasi untuk menampilkan pesan pemberitahuan
					// if (isset($_GET['alert'])) {
					// 	if ($_GET['alert']=='berhasil'){
					// 		echo"<div class='alert alert-success'><strong>Berhasil!</strong> Berita telah diupload!</div>";
					// 	}else if ($_GET['alert']=='gagal'){
					// 		echo"<div class='alert alert-danger'><strong>Gagal!</strong> Berita gagal diupload!</div>";
					// 	}    
					// }
					?>
					<form method="POST" action="proses-tambah.php" enctype="multipart/form-data">
						<div class="form-group">
							<label for="exampleInputEmail1">Judul Berita</label>
							<input type="text" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Judul Berita">
							<label for="exampleInputEmail1">Tanggal Berita</label>
							<input type="date" name="tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
							<label for="exampleInputEmail1">Kategori Artikel</label>
							<select class="form-control" name="kategori">
								<option value="" hidden>Pilih Kategori</option>
								<option value="Nature Style">Nature Style</option>
								<option value="line Art">line Art</option>
								<option value="BigHead Style">BigHead Style</option>
								<option value="Pop Art">Pop Art</option>
								<option value="Obama Hope Style">Obama Hope Style</option>
								<option value="Automotive">Automotive</option>
								<option value="Tutorial Vektor Art">Tutorial Vektor Art</option>
							</select>	
							<label for="exampleInputEmail1">Isi Berita</label>
							<textarea name="content" id="mytextarea" class="form-control"></textarea>
							<label for="exampleInputEmail1">Gambar</label>
							<div> 	
								<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>						
								<input type="file" name="file-gambar" class="form-control file" id="exampleInputEmail1"
								aria-describedby="emailHelp">
								<!-- <img src="gambar/80x80.png" id="preview" class="img-thumbnail"> -->
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<input class="btn btn-primary" type="submit" name="upload" value="Upload" />
						</div>
					</form> 				
				</div>
			</div>
		</div>
	</div>
</tr>
<script>
	tinymce.init({
		selector: 'textarea',
		plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
		toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
	});
</script>
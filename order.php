<?php include 'header.php' ?>
<style src="css/pengertian.css" type="text/css"></style>
<!-- content -->
<main role="main" class="container mt-5 mb-2">
  <div class="row">
    <div class="col-md-12 blog-main p-5 bg-dark rounded">
      <div class="row">
        <?php 
        include 'backend/koneksi.php'; 
        $cek = mysqli_query($konek,"SELECT * FROM tbl_berita");
        include 'backend/admin/format_tanggal.php';
        while ($row = mysqli_fetch_assoc($cek)) {
          $ambil = $row['isi'];
          $content = strip_tags(html_entity_decode($ambil,ENT_QUOTES,"ISO-8859-1"));
          ?>
          <div class="col-md-12">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="width:100%;">
              <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary"><?php echo $row['kategori'] ?></strong>
                <h3 class="mb-0"><?php echo $row['judul'] ?></h3>
                <?php 
                
                $date     = $row['tanggal'];
                $tanggal  = tgl_indo("$date");
                ?>
                <div class="mb-1 text-muted"><?php echo $tanggal ?></div>
                <p class="card-text mb-auto"><?php echo $row['isi'] ?></p>
                <a href="isi_content.php?page=<?php echo $row['kategori'] ?>&id=<?php echo $row['id_berita'] ?>" class="stretched-link">Continue reading</a>
              </div>
              <div class="col-auto d-none d-lg-block" style="margin-top: 60px">
                <img src="backend/admin/gambar/<?php echo $row['gambar'] ?>" class="bd-placeholder-img" width="250" height="200" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
              </div>
            </div>
          </div>
        <?php } ?>
      </div><!-- /.blog-main -->
    </div>
  </div><!-- /.row -->
</main><!-- /.container -->

<?php include 'footer.php' ?>

</body>
</html>

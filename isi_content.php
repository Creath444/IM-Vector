<?php
include 'header.php'; 
include 'backend/koneksi.php';
$id = $_GET['id'];
$cek = mysqli_query($konek,"SELECT * FROM db_login");
$username = mysqli_fetch_array($cek);
$cek = mysqli_query($konek,"SELECT * FROM tbl_berita WHERE id_berita='$id'");
$row = mysqli_fetch_array($cek);
?>

<!-- content -->
<main role="main" class="container mb-3">
  <div class="row">
    <div class="col-md-12 blog-main p-5 bg-dark mt-3 rounded">
      <div class="blog-post ">
        <h2 class="blog-post-title"><?php echo $row['judul'] ?></h2>
        <?php 
        include 'backend/admin/format_tanggal.php';
        $date     = $row['tanggal'];
        $tanggal  = tgl_indo("$date");
        ?>
        <p class="blog-post-meta"><?php echo $tanggal ?> by <a href="about.php"><?php echo $username['nama']  ?></a></p>
        <hr>
        <img src="backend/admin/gambar/<?php echo $row['gambar'] ?>" class="card-img-top" alt="...">
        <div class="card-body text-justify">
          <p class="card-text"><?php echo $row['isi'] ?></p>
          <?php           
          $kategori = $_GET['page'];
          $cek = mysqli_query($konek,"SELECT * FROM `tbl_berita` WHERE `kategori` = '$kategori'");
          $row = mysqli_fetch_array($cek);
          if (isset($kategori)) {            
            if ($kategori=='Nature Style') {
              echo '<img src="assets/img/kontent/nature.jpg" class="card-img-top" alt="...">';
              include 'isi_content_bawah.php';
            }elseif ($kategori=='Line Art') {
              echo '<img src="assets/img/kontent/line.jpg" class="card-img-top" alt="...">';
              include 'isi_content_bawah.php';
            }elseif ($kategori=='BigHead Style') {
              echo '<img src="assets/img/kontent/head.jpg" class="card-img-top" alt="...">';
              include 'isi_content_bawah.php';
            }elseif ($kategori=='Pop Art') {
              echo '<img src="assets/img/kontent/pop.jpg" class="card-img-top" alt="...">';
              include 'isi_content_bawah.php';
            }elseif ($kategori=='Obama Hope Style') {
              echo '<img src="assets/img/kontent/obama.jpg" class="card-img-top" alt="...">';
              include 'isi_content_bawah.php';
            }elseif ($kategori=='Automotive') {
              echo '<img src="assets/img/kontent/auto.jpg" class="card-img-top" alt="...">';
              include 'isi_content_bawah.php';
            }elseif ($kategori=='Tutorial Vektor Art') {
              include 'art.php';
            }else{
              echo '';
            }
          }
          
          ?>
        </div>
      </div>
    </div><!-- /.blog-main -->

 <!--      <div class="col-md-2 blog-sidebar mt-3">
        <div class="shadow bg-dark text-white card p-4 border-0">
          <img width="100%" src="assets/img/sat.png" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <p class="card-text" style="font-size: 10px ">Halo! Perkenalkan saya Satria. Mahasiswa dan Seniman Vektor, Desainer Grafis sejak 2020.</p>
            <button type="button" class="btn btn-outline-light" onclick="location.href='about.php'">About Me</button>
          </div>
        </div>      
        <div class="mt-3 bg-dark rounded shadow p-4" width="300px">
          <h4 class="font-italic">Sosial Media</h4>
          <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div>
      </div> --><!-- /.blog-sidebar -->
    </div><!-- /.row -->
  </main><!-- /.container -->

  <?php include 'footer.php' ?>

</body>
</html>
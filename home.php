<?php   
include 'header.php'
?>
<main role="main" class="m-0">
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/t-1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/img/t-2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/img/t-3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button style="border: none;" class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button style="border: none;" class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
<main role="main" class="mt-md-3">
  <div class="row">
    <div class="container bg-secondary">
      <div class="row">
        <!-- Portfolio item 1-->
        <?php 
        include 'backend/koneksi.php'; 
        $cek = mysqli_query($konek,"SELECT * FROM tbl_berita");
        while ($row = mysqli_fetch_assoc($cek)) {
          $ambil = $row['isi'];
          $content = strip_tags(html_entity_decode($ambil,ENT_QUOTES,"ISO-8859-1"));
          ?>
          <div class="col-lg-4 col-sm-6 mb-4">
            <div class="portfolio-item">
              <div class="card border-0 shadow mt-2 p-3 bg-secondary rounded" style="width: 100%;">
                <img src="backend/admin/gambar/<?php echo $row['gambar']?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text text-justify child"><?php echo substr($content, 0, 200); ?></p>
                  <a href="isi_content.php?page=<?php echo $row['kategori'] ?>&id=<?php echo $row['id_berita'] ?>" class="btn btn-danger">CONTINUE READING</a>
                </div>
              </div>
            </div> 
          </div>
        <?php } ?>          
      </div>
      <div class="text-center">
        <img src="assets/img/gif.gif" width="100%">
      </div>

      <br>
      <hr>  
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center text-dark">
          <li class="page-item disabled">
            <a class="page-link">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div>
    <!-- /.blog-main -->
    <div class="col-2 mt-3 blog-sidebar container-fluid">
      <div class="container bg-secondary card shadow text-white card p-lg-2 border-0">
        <img src="assets/img/sat.png" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <p class="card-text">Halo! Perkenalkan saya Satria. Mahasiswa dan Seniman Vektor, Desainer Grafis sejak 2020.</p>
          <button type="button" class="btn btn-outline-secondary" onclick="location.href='about.php'">About Me</button>
        </div>
      </div>

      <div class="container mt-3 bg-secondary card shadow text-white card p-lg-2 border-0">
        <h4 class="font-italic">Elsewhere</h4>
        <ol class="list-unstyled">
          <li><a href="#">GitHub</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Facebook</a></li>
        </ol>
      </div>
    </div><!-- /.blog-sidebar -->
  </div><!-- /.row -->
</main><!-- /.container -->

<?php   include 'footer.php' ?>
</main>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.6/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
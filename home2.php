<?php include 'header.php' ?>

  <main role="main" class="mt-4">
   <div id="carouselExampleFade" class="bg-secondary carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner" style="height: 100vh;width: 100%;">
      <div class="carousel-item active ">
        <img src="assets/img/3.jpg" class="d-block mx-auto" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/img/3.jpg" class="d-block mx-auto" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/img/3.jpg" class="d-block mx-auto" alt="...">
      </div>
    </div>
    <button class=" border-0 carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </button>
    <button class="border-0 carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </button>
  </div>
  <main role="main" class="container-fluid">
    <div class="row ml-3 mr-3">
      <div class="col-lg-8 mr-4">           
        <div class="card border-0 shadow mt-2 p-3 bg-secondary rounded" style="width: 100%;">
          <img src="assets/img/t-4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Vector Pop Art Style ini bisa dibilang style pop art komik-komik retro jaman dulu, memiliki warna yang dominan cerah dan lapisan shape shading-nya lebih sedikit. Cocok buat kalian yang mempunyai karakter ceria, unyu-unyu. ...</p>
            <a href="pop.php" class="btn btn-danger">CONTINUE READING</a>
          </div>
        </div>
        <div class="card border-0 shadow mt-2 p-3 bg-secondary rounded" style="width: 100%;">
          <img src="assets/img/t-5.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Mungkin kalian pernah mendengar atau melihat jenis art ini kisaran tahun 2008/2009-an. Yap, ini adalah jenis lukisan yang sangat fenomenal yang didesain oleh seniman Shepard Feirey pada zaman presiden Obama nyapres menjadi presiden Amerika Serikat....</p>
            <a href="obama.php" class="btn btn-danger">CONTINUE READING</a>
          </div>
        </div>
        <div class="card border-0 shadow mt-2 p-3 bg-secondary rounded" style="width: 100%;">
          <img src="assets/img/t-6.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Nah, bagi kalian yang punya mobil atau motor, atau hal yang berhubungan dengan otomotif dan ingin membuatnya menjadi versi vector, kalian berada di tempat yang tepat. ...</p>
            <a href="auto.php" class="btn btn-danger">CONTINUE READING</a>
          </div>
        </div>
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
      <aside class="col blog-sidebar">
        <div class="bg-secondary text-white card p-lg-2 border-0" style="width: 18rem;">
          <img src="assets/img/sat.png" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <p class="card-text">Halo! Perkenalkan saya Satria. Mahasiswa dan Seniman Vektor, Desainer Grafis sejak 2020.</p>
            <button type="button" class="btn btn-outline-secondary" onclick="location.href='about.php'">About Me</button>
          </div>
        </div>

        <div class="p-4">
          <h4 class="font-italic">Elsewhere</h4>
          <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div>
      </aside><!-- /.blog-sidebar -->
    </div><!-- /.row -->
  </main><!-- /.container -->

<?php include 'footer.php' ?>
</main>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.6/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
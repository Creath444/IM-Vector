<?php include 'header.php' ;
include 'backend/koneksi.php';
$cek = mysqli_query($konek,"SELECT * FROM db_login");
$username = mysqli_fetch_array($cek);
$cek = mysqli_query($konek,"SELECT * FROM tbl_berita WHERE id_berita=75");

include 'backend/admin/format_tanggal.php';
$row = mysqli_fetch_assoc($cek)
?>
<!-- content -->
<main role="main" class="container mt-5 mb-2">
  <h2 class="blog-post-title"><?php echo $row['judul'] ?></h2>
  <?php 
  $date     = $row['tanggal'];
  $tanggal  = tgl_indo("$date");
  ?>
  <p class="blog-post-meta"><?php echo $tanggal ?> by <a href="about.php"><?php echo $username['nama']  ?></a></p>
  <hr>
  <img src="backend/admin/gambar/<?php echo $row['gambar'] ?>" class="card-img-top" alt="...">
  <div class="row">
    <p class="card-text">
    Pada tutorial kali ini kita akan belajar cara membuat vector mata (lagi), tapi kali ini kita menggunakan software yang berbeda, nih. Yaitu Affinity Designer.</p>
    <p>Ada yang sudah tahu software ini sebelumnya?</p>
    <p>Oke, saya yakin sebagian besar pasti belum tahu karena software ini terbilang baru.</p>
    <p>Jadi, software ini sama seperti software pengolah desain lainnya seperti CorelDraw, Adobe Illustrator, Inkscape (Open Source), dll. Namun, hadirnya software ini lumayan mengguncang dunia per-desain-an. Pasalnya, harga software yang ditawarkan sangat kompetitif dengan fitur-fitur yang disajikan tidak kalah saing apabila kita bandingkan dengan para kompetitornya, Adobe Illustrator maupun CorelDraw.</p>
    <p>Maka dari itu, saya langsung 'gercep' membeli lisensi software ini yang hanya dibanderol dengan harga $49 seumur hidup, tanpa berlangganan. Sangat ramah dikantong jika kita bandingkan dengan biaya langganan produk Adobe atau CorelDraw.</p>
    <p>Untuk download trial atau membeli lisensinya kalian bisa cek di situs <a href="www.affinity.serif.com"> www.affinity.serif.com</a></p>
    <p>Untuk membeli jasa vector profesional dengan hasil yang maksimal kalian bisa cek www.imcreativeart.com</p>
    <p>Nah, untuk percobaan pertama menggunakan software ini, sesuai dengan profesi saya sebagai tukang vector, saya mau nyobain membuat vector mata dulu, nih.</p>
    <p>Mending kita langsung aja ke step-by-step nya, kuy!</p>
    <p>Pertama, kalian bisa download bahannya terlebih dahulu.</p>
    <a href="#" class="btn btn-light text-dark">Download</a>
    <p>Lalu buka Affinity Designer dan bikin dokumen baru dengan ukuran 1000 x 1000 piksel.</p>
    <img src="assets/img/tutor/2.jpg" class="card-img-top" alt="...">
    <p>Import foto mata yang sudah kalian download tadi ke area kerja dengan cara pilih menu File > Open atau dengan Drag (tarik) file jpg nya ke area kerja.</p>
    <img src="assets/img/tutor/3.jpg" class="card-img-top" alt="...">
    <p>Bikin layer baru, kemudian kita bisa mulai dengan membuat line art dari mata dan alisnya terlebih dahulu menggunakan Pen Tool.</p>
    <center><img src="assets/img/tutor/4.jpg" class="card-img-top w-50" alt="..."></center>
    <br>
    <center><img src="assets/img/tutor/6.jpg" class="card-img-top w-75" alt="..."></center>
    <br>
    <p>Kalau sudah, import palette color yang sudah kalian download ke dalam area kerja. Cara import bisa dengan klik menu File > Open atau dengan cara Drag (tarik) file palette nya ke dalam area kerja.</p>
    <p>Kemudian ambil warna base line menggunakan Color Picker Tool.</p>
    <img src="assets/img/tutor/5.jpg" class="card-img-top w-75" alt="...">
    <p>Jika sudah diambil, seleksi shape yang ingin kita beri warna. Kemudian klik pada Color swatches warna yang sudah kita Pick tadi.</p>
    <img src="assets/img/tutor/7.jpg" class="card-img-top w-75" alt="...">
    <p>Maka shape akan otomatis terwarnai. Lakukan step tadi ke semua shape yang sudah kita bikin. Kemudian hilangkan outlinenya.</p>
    <img src="assets/img/tutor/8.jpg" class="card-img-top w-75" alt="...">
    <p>Nah itu dia cara membuat line artnya, gaes. Cukup simpel, bukan?</p>
    <p>Saya sebenernya mau aja ngejelasin dengan detail step berikutnya. Tapi karena tutorial ini sudah kadung saya buat versi video di kanal YouTube saya, jadi langkah selanjutnya kalian bisa lihat versi videonya saja, ya.</p>
    <p>Hehehe. Maafkan daku para viewers blog ku :(</p>
  </div>

</main><!-- /.container -->

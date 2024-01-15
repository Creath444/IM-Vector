 <?php 
 include 'backend/koneksi.php'; 
 $cek = mysqli_query($konek,"SELECT * FROM tbl_berita");
 while ($row = mysqli_fetch_assoc($cek)) {
  $ambil = $row['isi'];
  $content = strip_tags(html_entity_decode($ambil,ENT_QUOTES,"ISO-8859-1"));
  ?>
  <div class="card border-0 shadow mt-2 p-3 bg-secondary rounded" style="width: 100%;">
    <img src="backend/admin/gambar/<?php echo $row['gambar']?>" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text text-justify child"><?php echo substr($content, 0, 200); ?></p>
      <a href="?page=isi_content&id=<?php echo $row['id_berita'] ?>" class="btn btn-danger">CONTINUE READING</a>
    </div>
  </div>
<?php } ?>
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
<?php
include 'templates/header.php';
?>      

  <h1 class="display-5">Ada peristiwa di sekitar anda?</h1>
  <p class="lead">Jangan ambil pusing! Sampaikan kepada kami.</p>
  <br>

  <div class="jumbotron-search">
    <form action="search.php" method="POST">
      <p class="lead mb-1">Cek status pengaduan Anda</p>
      <input type="text" class="p-3" style="width: 25vw;" name="keyword" id="keyword" placeholder="Masukkan nomor pengaduan Anda disini">
      <button type="submit" class="btn btn-danger search-button" value="cari"><span class="fas fa-search mr-2"></span>Cek</button>
    </form>

    <br>
    <p class="lead mt-2">atau ajukan pengaduan Anda</p>
    <a href="form-pengaduan.php" class="btn btn-danger sub-button"><span class="fas fa-chevron-right mr-2"></span>Disini</a>    
    
  </div>
<?php
include 'templates/footer.php';
?>

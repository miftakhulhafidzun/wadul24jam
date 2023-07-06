<?php
include "templates/header.php";
include "templates/sidebar-home.php";

$querySedangDiajukan = "SELECT COUNT(*) AS jumlah FROM pengaduan WHERE status = 'Sedang diajukan'";
$resultSedangDiajukan = mysqli_query($conn, $querySedangDiajukan);
$jumlahSedangDiajukan = mysqli_fetch_assoc($resultSedangDiajukan)['jumlah'];

$querySedangDiproses = "SELECT COUNT(*) AS jumlah FROM pengaduan WHERE status = 'Sedang diproses'";
$resultSedangDiproses = mysqli_query($conn, $querySedangDiproses);
$jumlahSedangDiproses = mysqli_fetch_assoc($resultSedangDiproses)['jumlah'];

$querySelesaiDiproses = "SELECT COUNT(*) AS jumlah FROM pengaduan WHERE status = 'Selesai diproses'";
$resultSelesaiDiproses = mysqli_query($conn, $querySelesaiDiproses);
$jumlahSelesaiDiproses = mysqli_fetch_assoc($resultSelesaiDiproses)['jumlah'];

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Dashboard</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- <div class="row row-cols-1 row-cols-md-3 g-4">

      <div class="col">
        <div class="card p-3">
          <i class='fas fa-book text-center' style='font-size:48px'></i>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card p-3">
          <i class='fas fa-book text-center' style='font-size:48px'></i>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card p-3">
          <i class='fas fa-book text-center' style='font-size:48px'></i>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
      
    </div> -->
    <div class="row row-cols-1 row-cols-md-3 g-4">

      <div class="col">
        <div class="card text-center p-3 bg-danger">
          <i class='fas fa-user-clock text-center' style='font-size:48px'></i>
          <div class="card-body">
            <h5>Pengaduan Sedang Diajukan</h5>
            <p class="card-text">Jumlah: <b><?php echo $jumlahSedangDiajukan; ?></b></p>
            <a href="data-pengaduan.php" class="stretched-link"></a>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card text-center p-3 bg-info">
          <i class='fas fa-hourglass-half text-center' style='font-size:48px'></i>
          <div class="card-body">
            <h5>Pengaduan Sedang Diproses</h5>
            <p class="card-text">Jumlah: <b><?php echo $jumlahSedangDiproses; ?></b></p>
            <a href="data-pengaduan.php" class="stretched-link"></a>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card text-center p-3 bg-success">
          <i class='fas fa-check text-center' style='font-size:48px'></i>
          <div class="card-body">
            <h5>Pengaduan Selesai Diproses</h5>
            <p class="card-text">Jumlah: <b><?php echo $jumlahSelesaiDiproses; ?></b></p>
            <a href="data-pengaduan.php" class="stretched-link"></a>
          </div>
        </div>
      </div>

    </div>


  </section>
  <!-- /.content -->
</div>
<?php
include "templates/footer.php";
?>
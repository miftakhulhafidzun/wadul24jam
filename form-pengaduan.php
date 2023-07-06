<?php
include 'templates/header2.php';
require 'function.php';
if (isset($_POST['submit'])) {
    // Memeriksa apakah ada file yang diunggah
    if (!empty($_FILES["photo"]["name"])) {
        // Mengumpulkan data dari formulir
        $data = $_POST;
        // Menambahkan data file yang diunggah ke dalam $data
        $data["photo"] = $_FILES["photo"];
    } else {
        // Jika tidak ada file yang diunggah, menggunakan hanya data dari $_POST
        $data = $_POST;
    }

    if (insertPengaduan($data) > 0) {
        echo "<script>alert('Data pengaduan Anda berhasil terkirim.'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Data pengaduan Anda gagal terkirim.'); window.location='form-pengaduan.php';</script>";
    }
}


$query = mysqli_query($conn, "SELECT max(id) as kodeTerbesar FROM pengaduan");
$r = mysqli_fetch_array($query);
$kodePengaduan = $r['kodeTerbesar'];
$urutan = (int) substr($kodePengaduan, 4, 4);
$urutan++;
$huruf = "NP";
$kodePengaduan = $huruf . sprintf("%04s", $urutan);
?>      
      <h1 style="margin-top: -40px;">Form Pengaduan Peristiwa</h1>
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-row p-3">
          <div class="form-group">
              <label for="id"><strong>Nomor Pengaduan</strong></label>
              <input type="text" name="id" id="id" class="form-control mb-3" value="<?= $kodePengaduan; ?>" style="cursor: default;" readonly>
              <p class="text-sm fw-light"><span style="color: red;">*</span>Harap catat kode ini untuk melihat pengaduan melalui kolom pencarian.</p>
          <div>
          <div class="form-group">
              <label for="nama"><strong>Nama Pelapor</strong></label>
              <input type="text" name="nama" id="nama" class="form-control mb-3"  required>
          <div>
          <div class="form-group">
              <label for="email"><strong>Email Pelapor</strong></label>
              <input type="text" name="email" id="email" class="form-control mb-3" required>
          <div>
          <div class="form-group">
              <label for="lokasi"><strong>Lokasi Kejadian</strong></label>
              <input type="text" name="lokasi" id="lokasi" class="form-control mb-3" required>
          <div>
          <div class="form-group">
              <label for="sosmed"><strong>Sosial Media Pelapor</strong></label>
              <input type="text" name="sosmed" id="sosmed" class="form-control mb-3" required>
              <div>
          <div class="form-group">
              <label for="photo"><strong>Upload Foto Kejadian</strong></label>
              <input type="file" name="photo" id="photo" class="form-control mb-3" >
          <div>
          <div class="form-group">
              <label for="ket"><strong>Keterangan</strong></label>
              <textarea name="ket" id="ket" class="form-control mb-3" required></textarea>
          <div>

          <button class="btn btn-outline-success mt-3 mr-3" type="submit" name="submit" value="Submit" style="width: 100px;"><span class="fas fa-paper-plane mr-2"></span>Kirim</button>
          
        </div>
      </form>      
      
<?php
include 'templates/footer.php';
?>

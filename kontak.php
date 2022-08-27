<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Mohamad Alfin Jauhari</title>
  </head>
  <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Website Pribadi - Alfin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="Mohamad Alfin Jauhari - Website.html">Biodata</a>
            <a class="nav-item nav-link" href="Pengalaman Kuliah.html">Pengalaman Kuliah</a>
            <a class="nav-item nav-link" href="kontak.php">Kontak</a>
            <a class="nav-item nav-link" href="Dicoding.html">Proyek Pelatihan</a>
          </div>
          </div>
        </div>
      </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
      <div class="container text-center">
        <img src="image/alfin.jpeg" width="200" class="rounded-circle">
        <h1 class="display-4">Mohamad Alfin Jauhari</h1>
        <p class="lead">Komputerisasi Akuntansi - Politeknik Negeri Semarang</p>
      </div>
    </div>

    <div class="container border p-3">
    <h2 class="alert alert-info text-center fw-bolder mt-3">DATA KONTAK</h2>
    <a href="tambahkontak.php" class="btn btn-primary btn-md mb-3 mt-3">Tambah Data Kontak</a>
    <table class="table table-striped table-hover table-bordered">
    <thead class="table-dark">
        <th>ID</th>
        <th>NAMA</th>
        <th>PROGRAM STUDI</th>
        <th>PESAN</th>
        <th>AKSI</th>
    </thead>
    <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($mysqli, 'SELECT * FROM tb_kontak');
        while ($data = mysqli_fetch_array($query)) {
    ?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['prodi']; ?></td>
		<td><?php echo $data['pesan']; ?></td>
		<td>
			<a class="edit" href="editkontak.php?id=<?php echo $data['id']; ?>">Edit</a> |
			<a class="hapus" href="deletekontak.php?id=<?php echo $data['id']; ?>">Hapus</a>					
		</td>
	</tr>
	<?php 
    ini_set("display_errors","Off");
    } 
    ?>
    </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
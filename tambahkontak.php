<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Tambah Data Kontak</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="container border p-3">
    <h2 class="alert alert-info text-center fw-bolder mt-3">DATA KONTAK</h2>
    <form  method="POST" id="forminput" enctype="multipart/form-data">
        <div class="form-group mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan nama anda">   
        </div>
        <div class="form-group mb-3">
            <label>Program Studi</label>
            <input type="text" name="prodi" class="form-control" placeholder="Masukan asal program studi">   
        </div>
        <div class="form-group mb-3">
            <label>Pesan</label>
            <input type="text" name="pesan" class="form-control" placeholder="Masukan pesan yang ingin disampaikan">   
        </div>
        <div>
            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            <a href="tambahkontak.php" class="btn btn-danger">Input Data Kontak Lagi</a>
            <a href="kontak.php" class="btn btn-warning">Daftar Data Kontak</a>
        </div>
    </form>
    </div>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
<?php
// Cek data jika sdh di submit, insert data ke dalam tabel
if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $pesan = $_POST['pesan'];
    // HUbungkan dengan file config.php
    include_once("koneksi.php");
            
    // menambah data kedalam tabel 
    $result = mysqli_query($mysqli, "INSERT INTO tb_kontak(nama,prodi,pesan) VALUES('$nama','$prodi','$pesan')");
}
?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
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
    <title>Form Edit Data Kontak</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<?php
// include database connection file
include_once("koneksi.php");

//check if from submitted for users update, then redirect to homepage after update
if(isset($_POST['update']))
{
    $id=$_POST['id'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $pesan = $_POST['pesan'];

    //update user data
    $result=mysqli_query($mysqli,"UPDATE tb_kontak SET nama='$nama',prodi='$prodi',pesan='$pesan' WHERE id=$id");

    //redirect to homepage to display updated users in list
    header("Location:kontak.php");
}
?>

<?php
// display selected user data based on id
//getting id from url
$id=$_GET['id'];

//fetch user data based on id
$result=mysqli_query($mysqli,"SELECT * FROM tb_kontak WHERE id='$_GET[id]'");

while($data=mysqli_fetch_array($result))
{
    $nama = $data['nama'];
    $prodi = $data['prodi'];
    $pesan = $data['pesan'];
}
?>
<html>
<head>
    <title>Edit Data Kontak</title>
</head>
<body>
<div class="container border p-3">
    <h2 class="alert alert-info text-center fw-bolder mt-3">EDIT DATA KONTAK</h2>
    <form  method="POST" id="forminput" enctype="multipart/form-data">
    <a href="tambahkontak.php" class="btn btn-primary">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="editkontak.php">
        <table border="0">
            <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" class="form-control" value=<?php echo $nama; ?>></td>
            </tr>
            <tr>
            <td>Program Studi</td>
            <td><input type="text" name="prodi" class="form-control" value=<?php echo $prodi; ?>></td>
            </tr>
            <tr>
            <td>Pesan</td>
            <td><input type="text" name="pesan" class="form-control" value=<?php echo $pesan; ?>></td>
            </tr>
                <tr>
                    <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                    <td><input type="submit" name="update" class="btn btn-primary" value="Update"></td>
                </tr>
</table>
</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
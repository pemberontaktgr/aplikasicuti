<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>LIST CUTI</title>
  </head>
  <body>
    <h1><center>LIST CUTI</center></h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
<?php
include "koneksi.php";

?>
<table class="table table-dark">
    <tr>
    <td> NIK </td>
    <td> nama </td>
    <td> jabatan </td>
		<td> bagian </td>
    <td> Date </td>
		<td> pengajuan cuti </td>
		<td> Sisa Cuti </td>
		<td> Action </td>
    </tr>
    <?php
        $query=mysqli_query($koneksi,"select * from cuti_karyawan");
        while ($sisa_cuti=mysqli_fetch_array($query))
        {
        ?>
    <tr>

		<td><?php echo $sisa_cuti['NIK'];?></td>
    <td><?php echo $sisa_cuti['nama'];?></td>
		<td><?php echo $sisa_cuti['jabatan'];?></td>
		<td><?php echo $sisa_cuti['bagian'];?></td>
    <td><?php echo $sisa_cuti['date'];?></td>
		<td><?php echo $sisa_cuti['pengajuan_cuti'];?></td>
    <td><?php echo $sisa_cuti['sisa_cuti'];?></td>
    <td><a href="edit_karyawan.php?id_karyawan=<?php echo $sisa_cuti['id_karyawan'];?>">edit</td>
		<td><a href="hapus_karyawan.php?id_karyawan=<?php echo $sisa_cuti['id_karyawan'];?>">hapus</td>
    </tr>

        <?php } ?>

</table>
<table class="table table-dark">
	<tr>
	<td><a class="btn btn-primary" href="input_karyawan.php" role="button">kembali</a><td>
	</tr>
</table>
</html>

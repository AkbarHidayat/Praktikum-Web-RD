<?php
//include file koneksi ke database
include "Connection.php"
//menerima nilai dari kiriman form
$nim=$_POST["nim"];
$nama=$_POST["nama"];
$prodi=$_POST["prodi"];

//query input menginput data kedalam tabel mahasiswa
$sql="insert into mahasiswa (nim,nama,prodi) values ('$nim','$nama','$prodi')";

//mengeksekusi/menjalankan query diatas
$hasil=mysqli_query($kon,$sql);

?>
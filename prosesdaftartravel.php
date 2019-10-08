<?php
// membuat koneksi
include "koneksi.php";
 
// Deklarasi variable
$email = $_POST['email'];
$password = $_POST['password'];
$perusahaan = $_POST['perusahaan'];
$alamat = $_POST['alamat'];
$nomor = $_POST['nomor'];
$level = $_POST['level'];
$submit =$_POST['submit'];
 
if(isset($submit)){
 
 if(empty($email) or empty($password)){
 
  echo "<script>alert('Form tidak boleh kosong!!! Silakan ulangi lagi'); window.location=('daftartravel.php') </script>";
 }else{
 

  $ins = mysqli_query($koneksi,"insert into perusahaan(email,password,alamat,perusahaan,nomor,level) values ('$email','$password','$perusahaan','$alamat','$nomor','$level')");
  echo "<script>alert('Data berhasil di Tambah'); window.location=('loginperusahaan.php');</script>";
 }
}
?>
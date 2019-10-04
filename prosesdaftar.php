<?php
// membuat koneksi
include "koneksi.php";
 
// Deklarasi variable
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$submit =$_POST['submit'];
 
if(isset($submit)){
 
 if(empty($username) or empty($password)){
 
  echo "<script>alert('Form tidak boleh kosong!!! Silakan ulangi lagi'); window.location=('daftar.php') </script>";
 }else{
 
  $pass = md5($_POST['password']);
  $ins = mysqli_query($koneksi,"insert into login(username,password,level) values ('$username','$pass','$level')");
  echo "<script>alert('Data berhasil di Tambah'); window.location=('login.php');</script>";
 }
}
?>
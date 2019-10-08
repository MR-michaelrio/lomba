<?php 
include('koneksi.php');
if(isset($_POST['tombol']))
{
    if(!isset($_FILES['gambar']['tmp_name'])){
        echo '<span style="color:red"><b><u><i>Pilih file gambar</i></u></b></span>';
    }
    else
    {
        $file_name = $_FILES['gambar']['name'];
        $file_size = $_FILES['gambar']['size'];
        $file_type = $_FILES['gambar']['type'];
        if ($file_size < 4000000 and ($file_type =='image/jpeg' or $file_type == 'image/png'))
        {
            $judul = $_POST['judul'];
            $tanggal = $_POST['tanggal'];
            $image   = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
            $keterangan = $_POST['keterangan'];
            mysqli_query($koneksi,"insert into buat_travel (judul,tanggal,gambar,nama_gambar,tipe_gambar,ukuran_gambar,keterangan) values ('$judul','$tanggal','$image','$file_name','$file_type','$file_size','$keterangan')");
            header("location:liat.php");
        }
        else
        {
            echo '<span style="color:red"><b><u><i>Ukuruan File / Tipe File Tidak Sesuai</i></u></b></span>';
        }
    }
}
?>
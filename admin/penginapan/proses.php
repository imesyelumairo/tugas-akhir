<?php
require_once('../koneksi.php');
$sql = "";
if (isset($_POST['mode'])){
    $id_hotel = $_POST['id_hotel'];
    $koordinat_N = $_POST['koordinat_N'];
    $koordinat_E = $_POST['koordinat_E'];
    $nama_hotel = $_POST['nama_hotel'];
    $alamat = $_POST['alamat'];
    $fasilitas = $_POST['fasilitas'];
    $jumlah_kamar = $_POST['jumlah_kamar'];
    $harga = $_POST['harga'];
    $informasi_lainnya = $_POST['informasi_lainnya'];
    
    if($_POST['mode'] == 'tambah'){
        $sql = "INSERT INTO hotel (koordinat_N,koordinat_E,nama_hotel,alamat,fasilitas,jumlah_kamar,harga,informasi_lainnya) VALUES ('$koordinat_N','$koordinat_E','$nama_hotel','$alamat','$fasilitas','$jumlah_kamar','$harga','$informasi_lainnya')";
    } else if($_POST['mode'] == 'update'){
        $sql= "UPDATE hotel SET koordinat_N='$koordinat_N',koordinat_E='$koordinat_E',nama_hotel='$nama_hotel',alamat='$alamat',fasilitas='$fasilitas',jumlah_kamar='$jumlah_kamar',harga='$harga',informasi_lainnya='$informasi_lainnya' WHERE id_hotel=".$id_hotel; 
    }
} else if (isset($_GET['mode']) && $_GET['mode'] == 'hapus'){
    $id_hotel = $_GET['id_hotel'];
    $sql = "DELETE FROM hotel WHERE id_hotel = ". $id_hotel;
}


if (mysqli_query($conn, $sql)) {
  header('location:list.php');
} else {
  echo "Error: " . $sql ;
}
?>
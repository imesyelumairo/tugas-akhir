<?php
require_once('../koneksi.php');
$sql = "";
if (isset($_POST['mode'])){
    $id_supermarket = $_POST['id_supermarket'];
    $koordinat_N = $_POST['koordinat_N'];
    $koordinat_E = $_POST['koordinat_E'];   
    $kelurahan = $_POST['kelurahan'];
    $keterangan = $_POST['keterangan'];
    $nama_supermarket = $_POST['nama_supermarket'];
    if($_POST['mode'] == 'tambah'){
        $sql = "INSERT INTO supermarket (koordinat_N,koordinat_E,kelurahan,keterangan,nama_supermarket) VALUES ('$koordinat_N','$koordinat_E','$kelurahan','$keterangan','$nama_supermarket')";
    } else if($_POST['mode'] == 'update'){
        $sql= "UPDATE supermarket SET koordinat_N='$koordinat_N',koordinat_E='$koordinat_E',kelurahan='$kelurahan',keterangan='$keterangan',nama_supermarket='$nama_supermarket'WHERE id_supermarket=".$id_supermarket; 
    }
} else if (isset($_GET['mode']) && $_GET['mode'] == 'hapus'){
    $id_supermarket = $_GET['id_supermarket'];
    $sql = "DELETE FROM supermarket WHERE id_supermarket = ". $id_supermarket;
}


if (mysqli_query($conn, $sql)) {
  header('location:list.php');
} else {
  echo "Error: " . $sql ;
}
?>
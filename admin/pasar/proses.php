<?php
require_once('../koneksi.php');
$sql = "";
if (isset($_POST['mode'])){
    $id_pasar = $_POST['id_pasar'];
    $nama_pasar = $_POST['nama_pasar'];
    $koordinat_N = $_POST['koordinat_N'];
    $koordinat_E = $_POST['koordinat_E'];
    $keterangan = $_POST['keterangan'];
    if($_POST['mode'] == 'tambah'){
        $sql = "INSERT INTO pasar (nama_pasar,koordinat_N,koordinat_E,keterangan) VALUES ('$nama_pasar','$koordinat_N','$koordinat_E','$keterangan')";
    } else if($_POST['mode'] == 'update'){
        $sql= "UPDATE pasar SET nama_pasar='$nama_pasar',koordinat_N='$koordinat_N',koordinat_E='$koordinat_E',keterangan='$keterangan' WHERE id_pasar=".$id_pasar; 
    }
} else if (isset($_GET['mode']) && $_GET['mode'] == 'hapus'){
    $id_pasar = $_GET['id_pasar'];
    $sql = "DELETE FROM pasar WHERE id_pasar = ". $id_pasar;
}


if (mysqli_query($conn, $sql)) {
  header('location:list.php');
} else {
  echo "Error: " . $sql ;
}
?>
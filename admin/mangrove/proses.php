<?php
require_once('../koneksi.php');
$sql = "";
if (isset($_POST['mode'])){
    $id_mangrove = $_POST['id_mangrove'];
    $file_geojson = $_POST['file_geojson'];
    $nama_geojson = $_POST['nama_geojson'];
    $color = $_POST['color'];
    if($_POST['mode'] == 'tambah'){
        $sql = "INSERT INTO mangrove (file_geojson,nama_geojson,color) VALUES ('$file_geojson','$nama_geojson','$color')";
    } else if($_POST['mode'] == 'update'){
        $sql= "UPDATE mangrove SET file_geojson='$file_geojson',nama_geojson='$nama_geojson',color='$color' WHERE id_mangrove=".$id_mangrove; 
    }
} else if (isset($_GET['mode']) && $_GET['mode'] == 'hapus'){
    $id_mangrove = $_GET['id_mangrove'];
    $sql = "DELETE FROM mangrove  WHERE id_mangrove = ". $id_mangrove ;
}


if (mysqli_query($conn, $sql)) {
  header('location:list_mangrove.php');
} else {
  echo "Error: " . $sql ;
}
?>
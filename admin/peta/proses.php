<?php
require_once('../koneksi.php');
$sql = "";
if (isset($_POST['mode'])){
    $id = $_POST['id'];
    $file_geojson = $_POST['file_geojson'];
    $nama_geojson = $_POST['nama_geojson'];
    $color = $_POST['color'];
    if($_POST['mode'] == 'tambah'){
        $sql = "INSERT INTO peta (file_geojson,nama_geojson,color) VALUES ('$file_geojson','$nama_geojson','$color')";
    } else if($_POST['mode'] == 'update'){
        $sql= "UPDATE peta SET file_geojson='$file_geojson',nama_geojson='$nama_geojson',color='$color' WHERE id=".$id; 
    }
} else if (isset($_GET['mode']) && $_GET['mode'] == 'hapus'){
    $id = $_GET['id'];
    $sql = "DELETE FROM peta  WHERE id = ". $id ;
}


if (mysqli_query($conn, $sql)) {
  header('location:list.php');
} else {
  echo "Error: " . $sql ;
}
?>
<?php
require_once('../koneksi.php');
$sql = "";
if (isset($_POST['mode'])){
    $id_atm = $_POST['id_atm'];
    $koordinat_N = $_POST['koordinat_N'];
    $koordinat_E = $_POST['koordinat_E'];
    $nama_atm = $_POST['nama_atm'];
    $alamat = $_POST['alamat'];
    $informasi_lainnya = $_POST['informasi_lainnya'];
    if($_POST['mode'] == 'tambah'){
        $sql = "INSERT INTO atm (koordinat_N,koordinat_E,nama_atm,alamat,informasi_lainnya) VALUES ('$koordinat_N','$koordinat_E','$nama_atm','$alamat','$informasi_lainnya')";
    } else if($_POST['mode'] == 'update'){
        $sql= "UPDATE atm SET koordinat_N='$koordinat_N',koordinat_E='$koordinat_E',nama_atm='$nama_atm',alamat='$alamat',informasi_lainnya='$informasi_lainnya' WHERE id_atm=".$id_atm; 
    }
} else if (isset($_GET['mode']) && $_GET['mode'] == 'hapus'){
    $id_atm = $_GET['id_atm'];
    $sql = "DELETE FROM atm WHERE id_atm = ". $id_atm;
}


if (mysqli_query($conn, $sql)) {
  header('location:list.php');
} else {
  echo "Error: " . $sql ;
}
?>
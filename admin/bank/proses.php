<?php
require_once('../koneksi.php');
$sql = "";
if (isset($_POST['mode'])){
    $id_bank = $_POST['id_bank'];
    $koordinat_n = $_POST['koordinat_n'];
    $koordinat_e = $_POST['koordinat_e'];
    $nama_bank = $_POST['nama_bank'];
    $alamat = $_POST['alamat'];
    $informasi_lainnya = $_POST['informasi_lainnya'];
    if($_POST['mode'] == 'tambah'){
        $sql = "INSERT INTO bank (koordinat_n,koordinat_e,nama_bank,alamat,informasi_lainnya) VALUES ('$koordinat_n','$koordinat_e','$nama_bank','$alamat','$informasi_lainnya')";
    } else if($_POST['mode'] == 'update'){
        $sql= "UPDATE bank SET koordinat_n='$koordinat_n',koordinat_e='$koordinat_e',nama_bank='$nama_bank',alamat='$alamat',informasi_lainnya='$informasi_lainnya' WHERE id_bank=".$id_bank; 
    }
} else if (isset($_GET['mode']) && $_GET['mode'] == 'hapus'){
    $id_bank = $_GET['id_bank'];
    $sql = "DELETE FROM bank WHERE id_bank = ". $id_bank;
}


if (mysqli_query($conn, $sql)) {
  header('location:list.php');
} else {
  echo "Error: " . $sql ;
}
?>
<?php
require_once('../koneksi.php');
$sql = "";
if (isset($_POST['mode'])){
    $id_rumah_makan = $_POST['id_rumah_makan'];
    $koordinat_N = $_POST['koordinat_N'];
    $koordinat_E = $_POST['koordinat_E'];
    $nama_rumah_makan = $_POST['nama_rumah_makan'];
    $alamat = $_POST['alamat'];
    $menu_makanan = $_POST['menu_makanan'];
    $jumlah_harga = $_POST['jumlah_harga'];
    $informasi_lainnya = $_POST['informasi_lainnya'];
    $file_foto = $_POST['file_foto'];
    if($_POST['mode'] == 'tambah'){
        $sql = "INSERT INTO kuliner (koordinat_N,koordinat_E,nama_rumah_makan,alamat,menu_makanan,jumlah_harga,informasi_lainnya,file_foto) VALUES ('$Koordinat_N','$koordinat_E','$nama_rumah_makan','$alamat','$menu_makanan','$jumlah_harga','$informasi_lainnya','$file_foto')";
    } else if($_POST['mode'] == 'update'){
        $sql= "UPDATE kuliner SET koordinat_N='$koordinat_N',koordinat_E='$koordinat_E',nama_rumah_makan='$nama_rumah_makan',alamat='$alamat',menu_makanan='$menu_makanan',jumlah_harga='$jumlah_harga',informasi_lainnya='$informasi_lainnya',file_foto='$file_foto' WHERE id_rumah_makan=".$id_rumah_makan; 
    }
} else if (isset($_GET['mode']) && $_GET['mode'] == 'hapus'){
    $id_rumah_makan = $_GET['id_rumah_makan'];
    $sql = "DELETE FROM kuliner WHERE id_rumah_makan = ". $id_rumah_makan;
}


if (mysqli_query($conn, $sql)) {
  header('location:list.php');
} else {
  echo "Error: " . $sql ;
}
?>
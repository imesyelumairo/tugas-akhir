<?php
include '_loader.php';
if(isset($_GET['halaman'])){
    $halaman=$_GET['halaman'];
   
}
else{
    $halaman='beranda';

}
ob_start();
$file='_halaman/'.$halaman.'.php';
if(!file_exists($file)){
    include '_halaman/error.php';
}
else{
    include $file;
}
$halaman = ob_get_contents();
ob_end_clean();
session_start();
$koneksi = new mysqli ("localhost","root","","pariwisata");

    if(!isset($_SESSION['t_admin']))
    {
      echo "<sript>alert('Anda Harus Login');</script>";
      echo "<sript>location='login.php';</script>";
      header('location:login.php');
      exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<?php include '_layout/head.php'?>
        <body class="hold-transition skin-green sidebar-mini">
        <div class="wrapper">
<?php
     include '_layout/header.php';
     include '_layout/sidebar.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?=$judul?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?=$judul?></li>
      </ol>
    </section>
<?php
    echo $halaman;
?>

  <!-- Main content -->
     <section class="content">
     </section>
     </div> 
     </div>   
<?php
        include '_layout/footer.php';
        include '_layout/javascript.php';
?>
</body>
</html> 
<?php
    require_once('../koneksi.php');
    $head="Data Supermarket";
    $judul="Input Data Supermarket";
    
    $mode = 'tambah';
    $caption = 'Tambah';
    $id_supermarket= '';
    $koordinat_N = '';
    $koordinat_E = '';
    $kelurahan = '';
    $keterangan = '';
    $nama_supermarket = '';

    $sqll="SELECT * FROM supermarket";
    $queryl = mysqli_query($conn,$sqll);
    if(isset($_GET['mode']) &&  $_GET['mode'] == 'update'){
        $mode = 'update';
        $caption = 'Update';

        $id_supermarket = $_GET['id_supermarket'];

        $sql="SELECT * FROM supermarket WHERE id_supermarket = ".$id_supermarket;
        $query = mysqli_query($conn,$sql);
        $dt = mysqli_fetch_assoc($query);
        $koordinat_N = $dt['koordinat_N'];
        $koordinat_E = $dt['koordinat_E'];
        $nama_supermarket = $dt['nama_supermarket'];
        $kelurahan = $dt['kelurahan'];
        $keterangan = $dt['keterangan'];
        $nama_supermarket = $dt['nama_supermarket'];
        }
?>
<!DOCTYPE html>
<html lang="en">
<?php include('../_layout/head.php');?>
<body class="hold-transition skin-green sidebar-mini">
        <div class="wrapper">
<?php include('../_layout/header.php');?>
<?php include('../_layout/sidebar.php');?>
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
    <!-- Main content -->
     <section class="content">
        <form method="post" action="proses.php">
            <input type="hidden" name="mode" value="<?php echo $mode;?>" class="form-control">
             <input type="hidden" name="id_supermarket" value="<?php echo $id_supermarket;?>" class="form-control">
           <div class="form-group">
               <label>Koordinat N</label>
               <input type="text" name="koordinat_N" id_supermarket="koordinat_N"  value="<?php echo $koordinat_N;?>" class="form-control">
           </div>
           <div class="form-group">
               <label>Koordinat E</label>
               <input type="text" name="koordinat_E" id_supermarket="koordinat_E"  value="<?php echo $koordinat_E;?>" class="form-control">
           </div>
           <div class="form-group">
               <label>Kelurahan</label>
               <input type="text" name="kelurahan" value="<?php echo $kelurahan;?>" class="form-control">
           </div>
           <div class="form-group">
               <label>Keterangan</label>
               <input type="text" name="keterangan" value="<?php echo $keterangan;?>" class="form-control">
           </div>
           <div class="form-group">
               <label>Nama Supermarket</label>
               <input type="text" name="nama_supermarket" value="<?php echo $nama_supermarket;?>" class="form-control">
           </div>
           <div class="form-group">
                <button type="submit" name="simpan"class="btn btn-info"><i class="fa fa-save"></i> Simpan</button>
                <a href="list.php" class="btn btn-danger"><i class="fa fa-reply"></i> Kembali</a>
           </div>
     </form>
     </section>
    </div> 
<?php include('../_layout/footer.php');?>
<?php include('../_layout/javascript.php');?>
</body>
</html>


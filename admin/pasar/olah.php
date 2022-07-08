<?php
    require_once('../koneksi.php');
    $head="Data Pasar Tradisional";
    $judul="Input Data Pasar Tradisional";
    
    $mode = 'tambah';
    $caption = 'Tambah';
    $nama_pasar = '';
    $koordinat_N = '';
    $koordinat_E = '';
    $keterangan = '';
   
    $sqll="SELECT * FROM pasar";
    $queryl = mysqli_query($conn,$sqll);
    if(isset($_GET['mode']) &&  $_GET['mode'] == 'update'){
        $mode = 'update';
        $caption = 'Update';

        $id_pasar = $_GET['id_pasar'];

        $sql="SELECT * FROM pasar WHERE id_pasar = ".$id_pasar;
        $query = mysqli_query($conn,$sql);
        $dt = mysqli_fetch_assoc($query);
        $nama_pasar = $dt['nama_pasar'];
        $koordinat_N = $dt['koordinat_N'];
        $koordinat_E = $dt['koordinat_E'];
        $keterangan = $dt['keterangan']; 
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
             <input type="hidden" name="id_pasar" value="<?php echo $id_pasar;?>" class="form-control">
           <div class="form-group">
               <label>Nama Pasar</label>
               <input type="text" name="nama_pasar" value="<?php echo $nama_pasar;?>" class="form-control">
           </div>
           <div class="form-group">
               <label>Koordinat_N</label>
               <input type="text" name="koordinat_N" value="<?php echo $koordinat_N;?>" class="form-control">
           </div>
           <div class="form-group">
               <label>Koordinat_E</label>
               <input type="text" name="koordinat_E" value="<?php echo $koordinat_E;?>" class="form-control">
           </div>
           <div class="form-group">
               <label>Keterangan</label>
               <input type="text" name="keterangan" value="<?php echo $keterangan;?>" class="form-control">
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


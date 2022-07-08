<?php
    require_once('../koneksi.php');
    $head="Data ATM";
    $judul="Input Data ATM";
    
    $mode = 'tambah';
    $caption = 'Tambah';
    $id_atm= '';
    $koordinat_N = '';
    $koordinat_E = '';
    $nama_atm = '';
    $alamat = '';
    $informasi_lainnya = '';  

    $sqll="SELECT * FROM atm";
    $queryl = mysqli_query($conn,$sqll);
    if(isset($_GET['mode']) &&  $_GET['mode'] == 'update'){
        $mode = 'update';
        $caption = 'Update';

        $id_atm = $_GET['id_atm'];

        $sql="SELECT * FROM atm WHERE id_atm = ".$id_atm;
        $query = mysqli_query($conn,$sql);
        $dt = mysqli_fetch_assoc($query);
        $koordinat_N = $dt['koordinat_N'];
        $koordinat_E = $dt['koordinat_E'];
        $nama_atm = $dt['nama_atm'];
        $alamat = $dt['alamat']; 
        $informasi_lainnya = $dt ['informasi_lainnya'];
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
             <input type="hidden" name="id_atm" value="<?php echo $id_atm;?>" class="form-control">
           <div class="form-group">
               <label>Koordinat N</label>
               <input type="text" name="koordinat_N" id_atm="koordinat_N"  value="<?php echo $koordinat_N;?>" class="form-control">
           </div>
           <div class="form-group">
               <label>Koordinat E</label>
               <input type="text" name="koordinat_E" id_atm="koordinat_E"  value="<?php echo $koordinat_E;?>" class="form-control">
           </div>
           <div class="form-group">
               <label>Nama ATM</label>
               <input type="text" name="nama_atm" value="<?php echo $nama_atm;?>" class="form-control">
           </div>
           <div class="form-group">
               <label>Alamat</label>
               <input type="text" name="alamat" value="<?php echo $alamat;?>" class="form-control">
           </div>
           <div class="form-group">
               <label>Informasi Lainnya</label>
               <input type="text" name="informasi_lainnya" value="<?php echo $informasi_lainnya;?>" class="form-control">
           </div>
           <div class="form-group">
                <button type="submit" name="simpan"class="btn btn-info"><i class="fa fa-simpan"></i> Simpan</button>
                <a href="list.php" class="btn btn-danger"><i class="fa fa-reply"></i> Kembali</a>
           </div>
     </form>
     </section>
    </div> 
<?php include('../_layout/footer.php');?>
<?php include('../_layout/javascript.php');?>
</body>
</html>


<?php
    require_once('../koneksi.php');
    $head="Data BANK";
    $judul="Input Data BANK";
    
    $mode = 'tambah';
    $caption = 'Tambah';
    $id_bank= '';
    $koordinat_n = '';
    $koordinat_e = '';
    $nama_bank = '';
    $alamat = '';
    $informasi_lainnya = '';
  
    $sqll="SELECT * FROM bank";
    $queryl = mysqli_query($conn,$sqll);
    if(isset($_GET['mode']) &&  $_GET['mode'] == 'update'){
        $mode = 'update';
        $caption = 'Update';

        $id_bank = $_GET['id_bank'];

        $sql="SELECT * FROM bank WHERE id_bank = ".$id_bank;
        $query = mysqli_query($conn,$sql);
        $dt = mysqli_fetch_assoc($query);
        $koordinat_n = $dt['koordinat_n'];
        $koordinat_e = $dt['koordinat_e'];
        $nama_bank = $dt['nama_bank'];
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
            <input type="hidden" name="id_bank" value="<?php echo $id_bank;?>" class="form-control">
           <div class="form-group">
               <label>Koordinat N</label>
               <input type="text" name="koordinat_n" id="koordinat_n"  value="<?php echo $koordinat_n;?>" class="form-control">
           </div>
           <div class="form-group">
               <label>Koordinat E</label>
               <input type="text" name="koordinat_e" id="koordinat_e"  value="<?php echo $koordinat_e;?>" class="form-control">
           </div>
           <div class="form-group">
               <label>Nama Bank</label>
               <input type="text" name="nama_bank" value="<?php echo $nama_bank;?>" class="form-control">
           </div>
           <div class="form-group">
               <label>Alamat Bank</label>
               <input type="text" name="alamat" value="<?php echo $alamat;?>" class="form-control">
           </div>
           <div class="form-group">
               <label>Informasi Lainnya</label>
               <input type="text" name="informasi_lainnya" value="<?php echo $informasi_lainnya;?>" class="form-control">
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


<?php
    require_once('../koneksi.php');
    $head="Data Penginapan";
    $judul="Input Data Penginapan";
    
    $mode = 'tambah';
    $caption = 'Tambah';
    $koordinat_N = '';
    $koordinat_E = '';
    $nama_hotel = '';
    $alamat = '';
    $fasilitas = '';
    $jumlah_kamar = '';
    $harga = '';
    $informasi_lainnya = '';

    $sqll="SELECT * FROM hotel";
    $queryl = mysqli_query($conn,$sqll);
    if(isset($_GET['mode']) &&  $_GET['mode'] == 'update'){
        $mode = 'update';
        $caption = 'Update';

        $id_hotel = $_GET['id_hotel'];

        $sql="SELECT * FROM hotel WHERE id_hotel = ".$id_hotel;
        $query = mysqli_query($conn,$sql);
        $dt = mysqli_fetch_assoc($query);
        $koordinat_N = $dt['koordinat_N'];
        $koordinat_E = $dt['koordinat_E'];
        $nama_hotel = $dt['nama_hotel'];
        $alamat = $dt['alamat'];
        $fasilitas = $dt['fasilitas'];
        $jumlah_kamar = $dt['jumlah_kamar'];
        $harga = $dt['harga'];
        $informasi_lainnya = $dt['informasi_lainnya']; 
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
             <input type="hidden" name="id_hotel" value="<?php echo $id_hotel;?>" class="form-control">
           <div class="form-group">
               <label>Koordinat_N</label>
               <input type="text" name="koordinat_N" id_hotel=h"koordinat_N" value="<?php echo $koordinat_N;?>" class="form-control">
           </div>
           <div class="form-group">
               <label>Koordinat_E</label>
               <input type="text" name="koordinat_E" value="<?php echo $koordinat_E;?>" class="form-control">
           </div>
           <div class="form-group">
               <label>Nama Hotel</label>
               <input type="text" name="nama_hotel" value="<?php echo $nama_hotel;?>" class="form-control">
           </div>
           <div class="form-group">
               <label>Alamat</label>
               <input type="text" name="alamat" value="<?php echo $alamat;?>" class="form-control">
           </div>
           <div class="form-group">
               <label>Fasilitas</label>
               <input type="text" name="fasilitas" value="<?php echo $fasilitas;?>" class="form-control">
           </div>
           <div class="form-group">
               <label>Jumlah Kamar</label>
               <input type="text" name="jumlah_kamar" value="<?php echo $jumlah_kamar;?>" class="form-control">
           </div>
           <div class="form-group">
               <label>Harga</label>
               <input type="text" name="harga" value="<?php echo $harga;?>" class="form-control">
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


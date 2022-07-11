<?php
    require_once('../koneksi.php');
    $head="Data Kuliner";
    $judul="Input Data Kuliner";
    
    $mode = 'tambah';
    $caption = 'Tambah';
    $koordinat_N = '';
    $koordinat_E = '';
    $nama_rumah_makan = '';
    $alamat = '';
    $menu_makanan = '';
    $jumlah_harga = '';
    $informasi_lainnya = '';
    $file_foto = '';

    $sqll="SELECT * FROM kuliner";
    $queryl = mysqli_query($conn,$sqll);
    if(isset($_GET['mode']) &&  $_GET['mode'] == 'update'){
        $mode = 'update';
        $caption = 'Update';

        $id_rumah_makan = $_GET['id_rumah_makan'];

        $sql="SELECT * FROM kuliner WHERE id_rumah_makan = ".$id_rumah_makan;
        $query = mysqli_query($conn,$sql);
        $dt = mysqli_fetch_assoc($query);
        $koordinat_N = $dt['koordinat_N'];
        $koordinat_E = $dt['koordinat_E'];
        $nama_rumah_makan = $dt['nama_rumah_makan'];
        $alamat = $dt['alamat']; 
        $menu_makanan = $dt['menu_makanan']; 
        $jumlah_harga = $dt['jumlah_harga']; 
        $informasi_lainnya = $dt ['informasi_lainnya'];
        $file_foto = $dt ['file_foto'];
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
             <input type="hidden" name="id_rumah_makan" value="<?php echo $id_rumah_makan;?>" class="form-control">
           <div class="form-group">
               <label>koordinat_N</label>
               <input type="text" name="koordinat_N" value="<?php echo $koordinat_N;?>" class="form-control">
           </div>
           <div class="form-group">
               <label>koordinat_E</label>
               <input type="text" name="koordinat_E" value="<?php echo $koordinat_E;?>" class="form-control">
           </div>
           <div class="form-group">
               <label>Nama Rumah Makanan</label>
               <input type="text" name="nama_rumah_makan" value="<?php echo $nama_rumah_makan;?>" class="form-control">
            </select>
            </div>
           <div class="form-group">
               <label>Alamat</label>
               <input type="text" name="alamat" value="<?php echo $alamat;?>" class="form-control">
           </div>
           <div class="form-group">
               <label>Menu Makanan</label>
               <input type="text" name="menu_makanan" value="<?php echo $menu_makanan;?>" class="form-control">
           </div>
           <div class="form-group">
               <label>Jumlah harga</label>
               <input type="text" name="jumlah_harga" value="<?php echo $jumlah_harga;?>" class="form-control">
           </div>
           <div class="form-group">
               <label>Informasi Lainnya</label>
               <input type="text" name="informasi_lainnya" value="<?php echo $informasi_lainnya;?>" class="form-control">
           </div>
           <div class="form-group">
               <label>Gambar</label>
               <input type="file" name="file_foto" id_rumah_makan="file_foto"  class="form-control">
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
<script>
    $(document).ready(function(){
    $('#file_foto').change(function (e){
        var  = e.target.files[0].name;
        $('#file_foto').val();
    });
});
</script>
</body>
</html>
</script


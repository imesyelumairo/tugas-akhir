<?php
    $head="Data Mangrove";
    $judul="Input Data Mangrove";
    
    $mode = 'tambah';
    $caption = 'Tambah';
    $id_mangrove = '';
    $file_geojson = '';
    $nama_geojson = '';
    $color = '';
    
    if(isset($_GET['mode']) &&  $_GET['mode'] == 'update'){
        $mode = 'update';
        $caption = 'Update';

        require_once('../koneksi.php');

        $id_mangrove = $_GET['id_mangrove'];

        $sql="SELECT * FROM mangrove WHERE id_mangrove = ".$id_mangrove;
        $query = mysqli_query($conn,$sql);
        $dt = mysqli_fetch_assoc($query);
        
        $file_geojson = $dt['file_geojson'];
        $nama_geojson = $dt['nama_geojson'];
        $color = $dt['color'];  
    }
    

?>
<!DOCTYPE html>
<html lang="en">
<?php include('../_layout/head.php');?>
<body class="hold-transition skin-green  sidebar-mini">
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
             <input type="hidden" name="id_mangrove" value="<?php echo $id_mangrove;?>" class="form-control">
           <div class="form-group">
               <label>File Geojson</label>
               <input type="file" name="_file_geojson" id_mangrove="_file_geojson"  class="form-control">
               <input type="text" name="file_geojson" id_mangrove="file_geojson"  value="<?php echo $file_geojson;?>" class="form-control">
           </div>
           <div class="form-group">
               <label>Nama Geojson</label>
               <input type="text" name="nama_geojson" value="<?php echo $nama_geojson;?>" class="form-control">
           </div>
           <div class="form-group">
               <label>color </label>
               <input type="color" name="color" value="<?php echo $color;?>" class="form-control">
           </div>
           <div class="form-group">
                <button type="submit" name="simpan"class="btn btn-info"><i class="fa fa-save"></i> Simpan</button>
                <a href="list_mangrove.php" class="btn btn-danger"><i class="fa fa-reply"></i> Kembali</a>
           </div>
     </form>
     </section>
    </div> 
<?php include('../_layout/footer.php');?>
<?php include('../_layout/javascript.php');?>
<script> 
$(document).ready(function(){
    $('#_file_geojson').change(function (e){
        var fileName = e.target.files[0].name;
        $('#file_geojson').val(fileName);
    });
});
</script>
</body>
</html>


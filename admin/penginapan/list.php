<?php
    include('../koneksi.php');
    $head="Data Penginapan/Hotel";
    $judul="Manajemen Penginapan/Hotel";

    $sql="SELECT * FROM hotel";  
    $query = mysqli_query($conn,$sql);
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
     <a href="olah.php" class="btn btn-success" ><i class="fa fa-plus"></i> Tambah</a>
        <hr>
        <div class="box">
            <div class="box-header"></div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="datatables" class="table table-bordered table-striped">
            <thead> 
                <tr> 
                    <th>No</th>
                    <th>Koordinat_N</th>
                    <th>Koordinat_E</th>
                    <th>Nama Hotel</th>
                    <th>Alamat</th>
                    <th>Fasilitas</th>
                    <th>Jumlah Kamar</th>
                    <th>Harga</th>
                    <th>Informasi Lainnya</th>
                    <th>Aksi</th>
                </tr>   
            </thead> 
            <tbody>
                <?php
        $no = 0;
        while($dt = mysqli_fetch_array($query)) { 
             $no++;
                ?>                  
                    <tr>
                            <td><?php echo $no;?></td>
                            <td><?php echo $dt["koordinat_N"];?></td>
                            <td><?php echo $dt["koordinat_E"];?></td>
                            <td><?php echo $dt["nama_hotel"];?></td>
                            <td><?php echo $dt["alamat"];?></td>
                            <td><?php echo $dt["fasilitas"];?></td>
                            <td><?php echo $dt["jumlah_kamar"];?></td>
                            <td><?php echo $dt["harga"];?></td>
                            <td><?php echo $dt["informasi_lainnya"];?></td>
                            <td>
                            <a href="olah.php?mode=update&id_hotel=<?php  echo $dt["id_hotel"];?>" class="btn btn-info"><i class="fa fa-edit"></i> Ubah</a>
                            <a href="proses.php?mode=hapus&id_hotel=<?php echo $dt["id_hotel"];?>" class="btn btn-danger"onclick="return confirm('Hapus data?')"><i class="fa fa-trash"></i>Hapus</a>
                            </td>
                    </tr> 
                    <?php              
                }              
                ?>
            </tbody> 
        </table>
        <!-- /.box-body -->
        </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      </div>
     </section>
     </div> 
     </div>   
<?php include('../_layout/footer.php');?>
<?php include('../_layout/javascript.php');?>

</body>
</html>


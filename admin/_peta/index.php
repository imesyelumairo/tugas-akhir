<?php
require_once('../koneksi.php');
$head="Peta";
$judul="Peta";
$sql = "SELECT * FROM pariwisata ORDER BY nama_geojson DESC";
$query = mysqli_query($conn, $sql);

$sqla = "SELECT * FROM atm";
$querya = mysqli_query($conn, $sqla);

$sqlk = "SELECT * FROM kuliner";
$queryk = mysqli_query($conn, $sqlk);
                                                                                            
$sqlh = "SELECT * FROM hotel";
$queryh = mysqli_query($conn, $sqlh);

$sqls = "SELECT * FROM supermarket";
$querys = mysqli_query($conn, $sqls);

$sqlm = "SELECT * FROM mangrove";
$querym = mysqli_query($conn, $sqlm);

$sqlp = "SELECT * FROM peta";
$queryp = mysqli_query($conn, $sqlp);

?>
<!doctype html>
<html lang="en">
<?php include('../_layout/head.php');?>
<link rel="stylesheet" href="css/leaflet.css"><link rel="stylesheet" href="css/L.Control.Locate.min.css">
        
<body class="hold-transition skin-green sidebar-mini">
<link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/leaflet-search.css">
        <link rel="stylesheet" href="css/leaflet-control-geocoder.Geocoder.css">
        <style>
        #map {
            width: 100%;
            height: 800px;
        }
        </style>
        <div class="wrapper">
<?php include('../_layout/header.php');?>
<?php include('../_layout/sidebar.php');?>
<div class="content-wrapper">

        <div id="map">
        </div>
        <script src="js/qgis2web_expressions.js"></script>
        <script src="js/leaflet.js"></script>
        <script src="js/L.Control.Locate.min.js"></script>
        <script src="js/leaflet.rotatedMarker.js"></script>
        <script src="js/leaflet.pattern.js"></script>
        <script src="js/leaflet-hash.js"></script>
        <script src="js/Autolinker.min.js"></script>
        <script src="js/rbush.min.js"></script>
        <script src="js/labelgun.min.js"></script>
        <script src="js/labels.js"></script>
        <script src="js/leaflet-control-geocoder.Geocoder.js"></script>
        <script src="js/leaflet-search.js"></script>
        <script>
        var map = L.map('map', {
            zoomControl:true, maxZoom:30, minZoom:1
        }).fitBounds([[3.4981247032968996,125.51965650693425],[3.5829541663394924,125.68593714048488]]);
        mbAttr = 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community';

        mbUrl = 'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}';
        L.tileLayer(mbUrl, {
        id: 'mapbox.streets',
        maxZoom: 20,
        attribution: mbAttr
        }).addTo(map);
        
        var markersLayer = new L.LayerGroup() ;
        var controlSearch = new L.Control.Search({
		position:'topright',		
		layer: markersLayer,
		initial: false,
		zoom: 25,
		marker: false
	    });

        map.addControl(controlSearch);
      // show the scale bar on the lower left corner
      
        </script>
   <?php
        //START atm
            while($dba = mysqli_fetch_array($querya)) { 
        ?>
        </script>
        <script>

       function style_<?php echo $dba['id_atm'];?>() {
            return {
                pane: 'pane_<?php echo $dba['id_atm'];?>',
                opacity: 1,
                color: 'rgba(255, 0, 0, 1)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity:0.3,
                fillColor: 'red',
                interactive: true,
                style :style_<?php echo $dba['id_atm'];?>,
            }
        }
        map.createPane('pane_<?php echo $dba['id_atm'];?>');
        map.getPane('pane_<?php echo $dba['id_atm'];?>').style.zIndex = 404;
        map.getPane('pane_<?php echo $dba['id_atm'];?>').style['mix-blend-mode'] = 'normal';
        var layer_<?php echo $dba['id_atm'];?> = new L.marker([<?php echo $dba['koordinat_E'];?>,<?php echo $dba['koordinat_N'];?>], {
            attribution: '',
            title: '<?php echo $dba['nama_atm'];?>',
            interactive: true,
            layerName: 'layer_<?php echo $dba['nama_atm'];?>',
           

        });  
        layer_<?php echo $dba['id_atm'];?>.bindPopup('<?php echo $dba['nama_atm'];?><br><?php echo $dba['alamat'];?>');
        markersLayer.addLayer(layer_<?php echo $dba['id_atm'];?>);
  
        map.addLayer(markersLayer);


<?php
        }
     ?>
        
              <?php
         //START kuliner
         while($dbk = mysqli_fetch_array($queryk)) { 
            ?>
            </script>
            <script>
    
           function style_<?php echo $dbk['id_rumah_makan'];?>() {
                return {
                    pane: 'pane_<?php echo $dbk['id_rumah_makan'];?>',
                    opacity: 1,
                    color: 'rgba(255, 0, 0, 1)',
                    dashArray: '',
                    lineCap: 'butt',
                    lineJoin: 'miter',
                    weight: 1.0, 
                    fill: true,
                    fillOpacity:0.3,
                    fillColor: 'red',
                    interactive: true,
                    style :style_<?php echo $dbk['id_rumah_makan'];?>,
                }
            }
            map.createPane('pane_<?php echo $dbk['id_rumah_makan'];?>');
            map.getPane('pane_<?php echo $dbk['id_rumah_makan'];?>').style.zIndex = 404;
            map.getPane('pane_<?php echo $dbk['id_rumah_makan'];?>').style['mix-blend-mode'] = 'normal';
            var layer_<?php echo $dbk['id_rumah_makan'];?> = new L.marker([<?php echo $dbk['koordinat_E'];?>,<?php echo $dbk['koordinat_N'];?>], {
                attribution: '',
                title: '<?php echo $dbk['nama_rumah_makan'];?>',
                interactive: true,
                layerName: 'layer_<?php echo $dbk['nama_rumah_makan'];?>',
               
    
            });  
            layer_<?php echo $dbk['id_rumah_makan'];?>.bindPopup('<?php echo $dbk['nama_rumah_makan'];?><br><?php echo $dbk['alamat'];?><br><?php echo $dbk['menu_makanan'];?><br><?php echo $dbk['jumlah_harga'];?><br><?php echo $dbk['informasi_lainnya'];?>');
            markersLayer.addLayer(layer_<?php echo $dbk['id_rumah_makan'];?>);
      
            map.addLayer(markersLayer);
    
    
    <?php
            }
         ?>

                <?php
         //START hotel
         while($dbh = mysqli_fetch_array($queryh)) { 
            ?>
            </script>
            <script>
    
           function style_<?php echo $dbh['id_hotel'];?>() {
                return {
                    pane: 'pane_<?php echo $dbh['id_hotel'];?>',
                    opacity: 1,
                    color: 'rgba(255, 0, 0, 1)',
                    dashArray: '',
                    lineCap: 'butt',
                    lineJoin: 'miter',
                    weight: 1.0, 
                    fill: true,
                    fillOpacity:0.3,
                    fillColor: 'red',
                    interactive: true,
                    style :style_<?php echo $dbh['id_hotel'];?>,
                }
            }
            map.createPane('pane_<?php echo $dbh['id_hotel'];?>');
            map.getPane('pane_<?php echo $dbh['id_hotel'];?>').style.zIndex = 404;
            map.getPane('pane_<?php echo $dbh['id_hotel'];?>').style['mix-blend-mode'] = 'normal';
            var layer_<?php echo $dbh['id_hotel'];?> = new L.marker([<?php echo $dbh['koordinat_E'];?>,<?php echo $dbh['koordinat_N'];?>], {
                attribution: '',
                title: '<?php echo $dbh['nama_hotel'];?>',
                interactive: true,
                layerName: 'layer_<?php echo $dbh['informasi_lainnya'];?>',
               
    
            });  
            layer_<?php echo $dbh['id_hotel'];?>.bindPopup('<?php echo $dbh['nama_hotel'];?><br><?php echo $dbh['fasilitas'];?><br><?php echo $dbh['harga'];?><br><?php echo $dbh['informasi_lainnya'];?>');
            markersLayer.addLayer(layer_<?php echo $dbh['id_hotel'];?>);
      
            map.addLayer(markersLayer);
            <?php
                }
         ?>

                <?php
         //START supermarket
         while($dbs = mysqli_fetch_array($querys)) { 
            ?>
            </script>
            <script>
    
           function style_<?php echo $dbs['id_supermarket'];?>() {
                return {
                    pane: 'pane_<?php echo $dbs['id_supermarket'];?>',
                    opacity: 1,
                    color: 'rgba(255, 0, 0, 1)',
                    dashArray: '',
                    lineCap: 'butt',
                    lineJoin: 'miter',
                    weight: 1.0, 
                    fill: true,
                    fillOpacity:0.3,
                    fillColor: 'red',
                    interactive: true,
                    style :style_<?php echo $dbs['id_supermarket'];?>,
                }
            }
            map.createPane('pane_<?php echo $dbs['id_supermarket'];?>');
            map.getPane('pane_<?php echo $dbs['id_supermarket'];?>').style.zIndex = 404;
            map.getPane('pane_<?php echo $dbs['id_supermarket'];?>').style['mix-blend-mode'] = 'normal';
            var layer_<?php echo $dbs['id_supermarket'];?> = new L.marker([<?php echo $dbs['koordinat_E'];?>,<?php echo $dbs['koordinat_N'];?>], {
                attribution: '',
                title: '<?php echo $dbs['nama_supermarket'];?>',
                interactive: true,
                layerName: 'layer_<?php echo $dbs['nama_supermarket'];?>',
               
    
            });  
            layer_<?php echo $dbs['id_supermarket'];?>.bindPopup('<?php echo $dbs['nama_supermarket'];?><br><?php echo $dbs['kelurahan'];?>');
            markersLayer.addLayer(layer_<?php echo $dbs['id_supermarket'];?>);
      
            map.addLayer(markersLayer);
    
    
    <?php
            }
         ?>

<?php
        //START peta
        $query =mysqli_query($conn, $sql);
        while($dbp = mysqli_fetch_array($queryp)) { 
            ?>
            </script>
            <script src="data/<?php echo $dbp['file_geojson'];?>"></script>
            <script>
    
                function pop_<?php echo $dbp['nama_geojson'];?>(feature, layer) {
                layer.on({
                    mouseout: function() {
                        for (i in e.target._eventParents) {
                            e.target._eventParents[i].resetStyle(e.target);
                        }
                        if (typeof layer.closePopup == 'function') {
                            layer.closePopup();
                        } else {
                            layer.eachLayer(function(feature){
                                feature.closePopup()
                            });
                        }
                    },
                    
                });
                var popupContent_<?php echo $dbp['nama_geojson'];?> = '<table><tr><td colspan="2"><?php echo $dbp['nama_geojson'];?></td></tr></table>';
                layer.bindPopup(popupContent_<?php echo $dbp['nama_geojson'];?>, {maxHeight: 400});
            }
           function style_<?php echo $dbp['nama_geojson'];?>() {
            return {
                pane: 'pane_<?php echo $dbp['nama_geojson'];?>',
                opacity: 1,
                color: 'rgba(255, 0, 0, 1)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity:0.1,
                fillColor: '<?php echo $dbp['color'];?>',
                interactive: true,
                style :style_<?php echo $dbp['nama_geojson'];?>,
            }
        }
            map.createPane('pane_<?php echo $dbp['nama_geojson'];?>');
            map.getPane('pane_<?php echo $dbp['nama_geojson'];?>').style.zIndex = 404;
            map.getPane('pane_<?php echo $dbp['nama_geojson'];?>').style['mix-blend-mode'] = 'normal';
            var layer_<?php echo $dbp['nama_geojson'];?> = new L.geoJson(<?php echo $dbp['nama_geojson'];?>, {
                attribution: '',
                interactive: true,
                dataVar: 'json_<?php echo $dbp['nama_geojson'];?>',
                layerName: 'layer_<?php echo $dbp['nama_geojson'];?>',
                onEachFeature: pop_<?php echo $dbp['nama_geojson'];?>,
                style: style_<?php echo $dbp['nama_geojson'];?>
    
            });
            map.addLayer(layer_<?php echo $dbp['nama_geojson'];?>);
            <?php
                }
            ?>

         <?php
        //START mangrove
        $query =mysqli_query($conn, $sql);
        while($dbm = mysqli_fetch_array($querym)) { 
            ?>
            </script>
            <script src="data/<?php echo $dbm['file_geojson'];?>"></script>
            <script>
    
                function pop_<?php echo $dbm['nama_geojson'];?>(feature, layer) {
                layer.on({
                    mouseout: function() {
                        for (i in e.target._eventParents) {
                            e.target._eventParents[i].resetStyle(e.target);
                        }
                        if (typeof layer.closePopup == 'function') {
                            layer.closePopup();
                        } else {
                            layer.eachLayer(function(feature){
                                feature.closePopup()
                            });
                        }
                    },
                    
                });
                var popupContent_<?php echo $dbm['nama_geojson'];?> = '<table><tr><td colspan="2"><?php echo $dbm['nama_geojson'];?></td></tr></table>';
                layer.bindPopup(popupContent_<?php echo $dbm['nama_geojson'];?>, {maxHeight: 400});
            }
           function style_<?php echo $dbm['nama_geojson'];?>() {
            return {
                pane: 'pane_<?php echo $dbm['nama_geojson'];?>',
                opacity: 1,
                color: 'rgba(255, 0, 0, 1)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity:0.3,
                fillColor: '<?php echo $dbm['color'];?>',
                interactive: true,
                style :style_<?php echo $dbm['nama_geojson'];?>,
            }
        }
            map.createPane('pane_<?php echo $dbm['nama_geojson'];?>');
            map.getPane('pane_<?php echo $dbm['nama_geojson'];?>').style.zIndex = 404;
            map.getPane('pane_<?php echo $dbm['nama_geojson'];?>').style['mix-blend-mode'] = 'normal';
            var layer_<?php echo $dbm['nama_geojson'];?> = new L.geoJson(<?php echo $dbm['nama_geojson'];?>, {
                attribution: '',
                interactive: true,
                dataVar: 'json_<?php echo $dbm['nama_geojson'];?>',
                layerName: 'layer_<?php echo $dbm['nama_geojson'];?>',
                onEachFeature: pop_<?php echo $dbm['nama_geojson'];?>,
                style: style_<?php echo $dbm['nama_geojson'];?>
    
            });
            map.addLayer(layer_<?php echo $dbm['nama_geojson'];?>);
            <?php
                }
            ?>

        </script>
    <?php include('../_layout/footer.php');?>
    <?php include('../_layout/javascript.php');?>
    </body>
    </http>
   

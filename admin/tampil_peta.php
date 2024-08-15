<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location:../tampil_data.php?pesan=belum_login");
}
include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<?php include "header.php"; ?>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include "menu_sidebar.php"; ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <?php include "menu_topbar.php"; ?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">PETA CLUSTERING KECAMATAN KEMANG</h6>
                        </div>
                        <meta charset="utf-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
                        <meta name="mobile-web-app-capable" content="yes">
                        <meta name="apple-mobile-web-app-capable" content="yes">
                        <link rel="stylesheet" href="css/leaflet.css">
                        <link rel="stylesheet" href="css/qgis2web.css"><link rel="stylesheet" href="css/fontawesome-all.min.css">
                        <link rel="stylesheet" href="css/leaflet-search.css">
                         <style type="text/css">
                         #map { height: 75vh; }
                         </style>

                        <div id="map"></div>

                     <script src="js/qgis2web_expressions.js"></script>
                    <script src="js/leaflet.js"></script>
                    <script src="js/leaflet.rotatedMarker.js"></script>
                    <script src="js/leaflet.pattern.js"></script>
                    <script src="js/leaflet-hash.js"></script>
                    <script src="js/Autolinker.min.js"></script>
                    <script src="js/rbush.min.js"></script>
                    <script src="js/labelgun.min.js"></script>
                    <script src="js/labels.js"></script>
                    <script src="js/leaflet-search.js"></script>
                    <script src="data/PotensiSmartTourism_1.js"></script>
                    <script>
                    var map = L.map('map', {
                        zoomControl:true, maxZoom:28, minZoom:1
                    })
                    var hash = new L.Hash(map);
                    map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
                    var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
                    var bounds_group = new L.featureGroup([]);
                    function setBounds() {
                        if (bounds_group.getLayers().length) {
                            map.fitBounds(bounds_group.getBounds());
                        }
                    }
                    map.createPane('pane_OpenStreetMap_0');
                    map.getPane('pane_OpenStreetMap_0').style.zIndex = 400;
                    var layer_OpenStreetMap_0 = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        pane: 'pane_OpenStreetMap_0',
                        opacity: 1.0,
                        attribution: '',
                        minZoom: 1,
                        maxZoom: 28,
                        minNativeZoom: 0,
                        maxNativeZoom: 19
                    });
                    layer_OpenStreetMap_0;
                    map.addLayer(layer_OpenStreetMap_0);
                    function pop_PotensiSmartTourism_1(feature, layer) {
                        var popupContent = '<table>\
                                <tr>\
                                    <td colspan="2">' + (feature.properties['NAMOBJ'] !== null ? autolinker.link(feature.properties['NAMOBJ'].toLocaleString()) : '') + '</td>\
                                </tr>\
                                <tr>\
                                    <td colspan="2">' + (feature.properties['WADMKC'] !== null ? autolinker.link(feature.properties['WADMKC'].toLocaleString()) : '') + '</td>\
                                </tr>\
                                <tr>\
                                    <td colspan="2">' + (feature.properties['WADMKK'] !== null ? autolinker.link(feature.properties['WADMKK'].toLocaleString()) : '') + '</td>\
                                </tr>\
                                <tr>\
                                    <td colspan="2"><strong>WADMPR</strong><br />' + (feature.properties['WADMPR'] !== null ? autolinker.link(feature.properties['WADMPR'].toLocaleString()) : '') + '</td>\
                                </tr>\
                                <tr>\
                                    <td colspan="2">' + (feature.properties['SHAPE_Leng'] !== null ? autolinker.link(feature.properties['SHAPE_Leng'].toLocaleString()) : '') + '</td>\
                                </tr>\
                                <tr>\
                                    <td colspan="2">' + (feature.properties['SHAPE_Area'] !== null ? autolinker.link(feature.properties['SHAPE_Area'].toLocaleString()) : '') + '</td>\
                                </tr>\
                                <tr>\
                                    <td colspan="2">' + (feature.properties['X1'] !== null ? autolinker.link(feature.properties['X1'].toLocaleString()) : '') + '</td>\
                                </tr>\
                                <tr>\
                                    <td colspan="2">' + (feature.properties['X2'] !== null ? autolinker.link(feature.properties['X2'].toLocaleString()) : '') + '</td>\
                                </tr>\
                                <tr>\
                                    <td colspan="2">' + (feature.properties['X3'] !== null ? autolinker.link(feature.properties['X3'].toLocaleString()) : '') + '</td>\
                                </tr>\
                                <tr>\
                                    <td colspan="2">' + (feature.properties['X4'] !== null ? autolinker.link(feature.properties['X4'].toLocaleString()) : '') + '</td>\
                                </tr>\
                                <tr>\
                                    <td colspan="2">' + (feature.properties['X5'] !== null ? autolinker.link(feature.properties['X5'].toLocaleString()) : '') + '</td>\
                                </tr>\
                                <tr>\
                                    <td colspan="2">' + (feature.properties['X6'] !== null ? autolinker.link(feature.properties['X6'].toLocaleString()) : '') + '</td>\
                                </tr>\
                                <tr>\
                                    <td colspan="2">' + (feature.properties['X7'] !== null ? autolinker.link(feature.properties['X7'].toLocaleString()) : '') + '</td>\
                                </tr>\
                                <tr>\
                                    <td colspan="2">' + (feature.properties['X8'] !== null ? autolinker.link(feature.properties['X8'].toLocaleString()) : '') + '</td>\
                                </tr>\
                                <tr>\
                                    <td colspan="2">' + (feature.properties['X9'] !== null ? autolinker.link(feature.properties['X9'].toLocaleString()) : '') + '</td>\
                                </tr>\
                                <tr>\
                                    <td colspan="2">' + (feature.properties['X10'] !== null ? autolinker.link(feature.properties['X10'].toLocaleString()) : '') + '</td>\
                                </tr>\
                                <tr>\
                                    <td colspan="2">' + (feature.properties['X11'] !== null ? autolinker.link(feature.properties['X11'].toLocaleString()) : '') + '</td>\
                                </tr>\
                                <tr>\
                                    <td colspan="2">' + (feature.properties['NAMOBJ_2'] !== null ? autolinker.link(feature.properties['NAMOBJ_2'].toLocaleString()) : '') + '</td>\
                                </tr>\
                                <tr>\
                                    <td colspan="2">' + (feature.properties['Cluster'] !== null ? autolinker.link(feature.properties['Cluster'].toLocaleString()) : '') + '</td>\
                                </tr>\
                            </table>';
                        layer.bindPopup(popupContent, {maxHeight: 400});
                    }

                    function style_PotensiSmartTourism_1_0(feature) {
                        if (feature.properties['Cluster'] >= 1.000000 && feature.properties['Cluster'] <= 1.000000 ) {
                            return {
                            pane: 'pane_PotensiSmartTourism_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(215,25,28,1.0)',
                            interactive: false,
                        }
                        }
                        if (feature.properties['Cluster'] >= 1.000000 && feature.properties['Cluster'] <= 2.000000 ) {
                            return {
                            pane: 'pane_PotensiSmartTourism_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(253,253,17,1.0)',
                            interactive: false,
                        }
                        }
                        if (feature.properties['Cluster'] >= 2.000000 && feature.properties['Cluster'] <= 3.000000 ) {
                            return {
                            pane: 'pane_PotensiSmartTourism_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0, 
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(81,244,11,1.0)',
                            interactive: false,
                        }
                        }
                    }
                    map.createPane('pane_PotensiSmartTourism_1');
                    map.getPane('pane_PotensiSmartTourism_1').style.zIndex = 401;
                    map.getPane('pane_PotensiSmartTourism_1').style['mix-blend-mode'] = 'normal';
                    var layer_PotensiSmartTourism_1 = new L.geoJson(json_PotensiSmartTourism_1, {
                        attribution: '',
                        interactive: false,
                        dataVar: 'json_PotensiSmartTourism_1',
                        layerName: 'layer_PotensiSmartTourism_1',
                        pane: 'pane_PotensiSmartTourism_1',
                        onEachFeature: pop_PotensiSmartTourism_1,
                        style: style_PotensiSmartTourism_1_0,
                    });
                    bounds_group.addLayer(layer_PotensiSmartTourism_1);
                    var baseMaps = {};
                    L.control.layers(baseMaps,{'Potensi Smart Tourism<br /><table><tr><td style="text-align: center;"><img src="legend/PotensiSmartTourism_1_CukupPotensial0.png" /></td><td>Cukup Potensial</td></tr><tr><td style="text-align: center;"><img src="legend/PotensiSmartTourism_1_Potensial1.png" /></td><td>Potensial</td></tr><tr><td style="text-align: center;"><img src="legend/PotensiSmartTourism_1_SangatPotensial2.png" /></td><td>Sangat Potensial</td></tr></table>': layer_PotensiSmartTourism_1,"OpenStreetMap": layer_OpenStreetMap_0,}).addTo(map);
                    setBounds();
                    var i = 0;
                    layer_PotensiSmartTourism_1.eachLayer(function(layer) {
                        var context = {
                            feature: layer.feature,
                            variables: {}
                        };
                        layer.bindTooltip((layer.feature.properties['NAMOBJ'] !== null?String('<div style="color: #000000; font-size: 9pt; font-weight: bold; font-family: \'Open Sans\', sans-serif;">' + layer.feature.properties['NAMOBJ']) + '</div>':''), {permanent: true, offset: [-0, -16], className: 'css_PotensiSmartTourism_1'});
                        labels.push(layer);
                        totalMarkers += 1;
                        layer.added = true;
                        addLabel(layer, i);
                        i++;
                    });
                    map.addControl(new L.Control.Search({
                        layer: layer_PotensiSmartTourism_1,
                        initial: false,
                        hideMarkerOnCollapse: true,
                        propertyName: 'Cluster'}));
                    document.getElementsByClassName('search-button')[0].className +=
                    ' fa fa-binoculars';
                    resetLabels([layer_PotensiSmartTourism_1]);
                    map.on("zoomend", function(){
                        resetLabels([layer_PotensiSmartTourism_1]);
                    });
                    map.on("layeradd", function(){
                        resetLabels([layer_PotensiSmartTourism_1]);
                    });
                    map.on("layerremove", function(){
                        resetLabels([layer_PotensiSmartTourism_1]);
                    });
                    </script>
                </div>

                
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Cluster FCM Kecamatan Kemang</h6>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <a href="tambah_data_cluster.php" class="btn btn-primary">TAMBAH DATA</a>
                                 </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="90%" cellspacing="0">
                                    <div class="scrollme">   
                                    <table class="table table-condensed table-bordered">
                                        <tr>
                                            <th rowspan="2" style="text-align:center; vertical-align:middle; ">ID</th>
                                            <th rowspan="2" style="text-align:center; vertical-align:middle; ">Desa</th>
                                            <th rowspan="2" style="text-align:center; vertical-align:middle; ">Potensi</th>
                                            <th colspan="14"  style="text-align:center; vertical-align:middle; ">Skor Variable</th>
                                            <th rowspan="2" style="text-align:center; vertical-align:middle; ">Aksi</th>
                                        </tr>
                                        <tr>
                                            <th  style="text-align:center; vertical-align:middle; ">Program_Pembangunan</th>
                                            <th  style="text-align:center; vertical-align:middle; ">Pasar</th>
                                            <th  style="text-align:center; vertical-align:middle; ">Tenaga_Kerja</th>
                                            <th  style="text-align:center; vertical-align:middle; ">Peluang_Usaha</th>
                                            <th  style="text-align:center; vertical-align:middle; ">Modal_Usaha</th>
                                            <th  style="text-align:center; vertical-align:middle; ">Keterampilan_Masyarakat</th>
                                            <th  style="text-align:center; vertical-align:middle; ">Infrastruktur_JalanRaya</th>
                                            <th  style="text-align:center; vertical-align:middle; ">Transportasi</th>
                                            <th  style="text-align:center; vertical-align:middle; ">Aksebilitas</th>
                                            <th  style="text-align:center; vertical-align:middle; ">Teknologi</th>
                                            <th  style="text-align:center; vertical-align:middle; ">TIK</th>
                                            <th  style="text-align:center; vertical-align:middle; ">Internet</th>
                                            <th  style="text-align:center; vertical-align:middle; ">Air_Bersih</th>
                                            <th  style="text-align:center; vertical-align:middle; ">Bobot</th>
                                          
                                        </tr>
                                        <tbody>
                                            <?php
                                        $no = 0;
                                        $data = mysqli_query($koneksi, "select * from cluster");
                                        while ($d = mysqli_fetch_array($data)) {
                                            $no++;
                                        ?>
                                        <tr>
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $d['Desa']; ?> </a> </b></td>
                                                <td><?php echo $d['Potensi']; ?></td>
                                                <td><?php echo $d['Program_Pembangunan']; ?></td>
                                                <td><?php echo $d['Pasar']; ?></td>
                                                <td><?php echo $d['Tenaga_Kerja']; ?></td>
                                                <td><?php echo $d['Peluang_Usaha']; ?></td>
                                                <td><?php echo $d['Modal_Usaha']; ?></td>
                                                <td><?php echo $d['Keterampilan_Masyarakat']; ?></td>
                                                <td><?php echo $d['Infrastuktur_JalanRaya']; ?></td>
                                                <td><?php echo $d['Transportasi']; ?></td>
                                                <td><?php echo $d['Aksebilitas']; ?></td>
                                                <td><?php echo $d['Teknologi']; ?></td>
                                                <td><?php echo $d['TIK']; ?></td>
                                                <td><?php echo $d['Internet']; ?></td>
                                                <td><?php echo $d['Air_Bersih']; ?></td>
                                                <td><?php echo $d['Bobot']; ?></td>
                                                <td>
                                                    <a href="edit_data_cluster.php?ID=<?php echo $d['ID']; ?> " class="btn-sm btn-primary"><span class="fas fa-edit"></a>
                                                </td>
                                            </tr>
                                    <?php
                                        }
                                    ?>
                                 </tbody>
                                    
                                    </table>
                                    </div>
                                </table>
                            </div>
                    </div>
                </div>


            </div>
        </div>

        

    </div>
    <!-- End of Page Wrapper -->
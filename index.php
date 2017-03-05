<?php
date_default_timezone_set('Asia/Jakarta');
//require_once "config/func_config.php";
require_once "config/func_url.php";
//require_once "module/cuaca.php"; 
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Pantauan Terkini-D1</title>
    <!-- Bootstrap -->
    <link rel='shorcut icon' href='<?php echo base_url(); ?>assets/images/icon-bnpb.png'>
    <link href="assets/bootsrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="assets/bootsrap/js/jquery.min.js"></script>
    <script src="assets/bootsrap/js/bootstrap.min.js"></script>
    <script src="assets/bootsrap/chart/highcharts.js"></script>
    <script src="assets/bootsrap/chart/exporting.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=&v=3.0&sensor=true&language=ee&dummy=dummy.js"></script>
    <style>
    .fixed-panel {
      min-height: 10;
      height: 260px;
      /*overflow-y: scroll;*/
    }
    </style>
  </head>
  <body>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 alert alert-info" role="alert">
          <div align="center" class="text-capitalize" id="clock"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 panel panel-success">
          <div class="panel-heading" align="center">Gempa Terkini</div>
          <div class="panel-body fixed-panel">
            <table border="0" height="200px" width="340px">
              <tr>
                <td width="100px">Magnitude</td>
                <td><div id="magnitude"></div></td>
              </tr>
              <tr>
                <td>Potensi</td>
                <td><div id="potensi"></div></td>
              </tr>
              <tr>
                <td>Waktu Gempa</td>
                <td><div id="wkt_gempa"></div></td>
              </tr>
              <tr>
                <td>Kordinat</td>
                <td><div id="kordinat"></div></td>
              </tr>
              <tr>
                <td>Kedalaman</td>
                <td><div id="kedalaman"></div></td>
              </tr>
              <tr>
                <td>Wilayah</td>
                <td><div id="wilayah"></div></td>
              </tr>
            </table>
          </div>
        </div>
        <div class="col-md-4 panel panel-success">
          <div class="panel-heading" align="center">Gempa yang dirasakan</div>
          <div class="panel-body fixed-panel">
            <table border="0" height="200px" width="340px">
              <tr>
                <td width="100px">Magnitude</td>
                <td><div id="magnitude2"></div></td>
              </tr>
              <tr>
                <td>Potensi</td>
                <td><div id="keterangan2"></div></td>
              </tr>
              <tr>
                <td>Waktu Gempa</td>
                <td><div id="wkt_gempa2"></div></td>
              </tr>
              <tr>
                <td>Kordinat</td>
                <td><div id="kordinat2"></div></td>
              </tr>
              <tr>
                <td>Kedalaman</td>
                <td><div id="kedalaman2"></div></td>
              </tr>
              <tr>
                <td>Wilayah</td>
                <td><div id="wilayah2"></div></td>
              </tr>
	     </table>
          </div>
        </div>
        <div class="col-md-4 panel panel-success">
          <div class="panel-heading" align="center">Hotspot</div>
          <div class="panel-body fixed-panel" id="grafikhotpsot">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 panel panel-success">
          <div class="panel-body" id="map" style="height:400px;"></div>
        </div>
      </div>
    </div>
  </body>
</html>
<?php
//require_once "module/hotspot.php";
require_once "module/gempa.php";
//require_once "module/get_cuaca.php";
?>

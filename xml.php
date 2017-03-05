<?php date_default_timezone_set('Asia/Jakarta'); ?>
<html>
    <head><title>How to Load Content from JSON File using AJAX</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
        <script async defersrc="https://maps.googleapis.com/maps/api/js?key=AIzaSyBV2eWzBB_EaPXYaXSicNrb0ghF380wiCc&callback=initMap"></script>
        <!--<script src="https://maps.googleapis.com/maps/api/js?key=&v=3.0&sensor=true&language=ee&dummy=dummy.js"></script>-->
    </head>
    <body>
        <h1>How to Load Content from JSON File using AJAX</h1>
        <div id='update'></div>
        <div id="map"></div>
    </body>
</html>

<script type="text/javascript">
$(document).ready(function(){    
    $.ajax({
        url: 'gempa.php',
        dataType: 'json',
        success: function(json) {
            console.log("communition with server success.");
            $.each(JSON.parse(json), function(idx, obj) {
                var todate = '<?php echo date("d-M-y"); ?>';
                //var totime = '<?php echo date("H:i:s"); ?>';
                var totime = '15:30:06';
                var tgl = obj.Tanggal;
                var jam = obj.Jam.substring(0,8);
                var kordinat = obj.point.coordinates;
                var lintang = obj.Lintang;
                var bujur = obj.bujur;
                var magnitude = obj.Magnitude;
                var kedalaman = obj.kedalaman;
                var wil_1 = obj.Wilayah1;
                var wil_2 = obj.Wilayah2;
                var wil_3 = obj.Wilayah3;
                var wil_4 = obj.Wilayah4;
                var wil_5 = obj.Wilayah5;
                var potensi = obj.Potensi;
                $("#update").text(jam);
                if(tgl == todate && totime == jam) {
                    var audio = new Audio('assets/music/Warning.mp3');
                    audio.play();
                }else{

                }
            });
        },
        error: function(data, status, err) {
          console.log('error communition with server.');
        }
    });
});
</script>
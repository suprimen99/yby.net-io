<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- ajax realtime -->
    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        //atur interval wktu untuk realtime
        setInterval(function() {
            $("#suhu").load("<?php echo site_url('Monitoring_sensor/ceksuhu'); ?>");
            $("#kelembaban").load("<?php echo site_url('Monitoring_sensor/kelembaban'); ?>");
            $("#asap").load("<?php echo site_url('Monitoring_sensor/cekasap'); ?>");
        }, );
    });
    </script>
</head>

<body>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>


<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="container-fluid" style="text-align: center;">
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">
            <div style="display: flex; justify-content:center">
                <div class="card text-white border-dark bg- mr-3 mb-3" style="max-width: 20rem;">
                    <div class="card-header bg-primary"><b>SUHU</b></div>
                    <div class="card-body">
                        <img src="<?= base_url('assets/high-temperature.png') ?>" alt="" width="80px">
                        <div>
                            <h1><span id="suhu" class="text-dark"></span></h1>
                        </div>
                    </div>
                </div>

                <div style="display: flex; justify-content:center">
                    <div class="card text-white border-dark mr-3 mb-3" style="max-width: 20rem;">
                        <div class="card-header bg-primary"><b>KELEMBABAN</b></div>
                        <div class="card-body">
                            <img src="<?= base_url('assets/humidity.png') ?>" alt="" width="80px">
                            <div>
                                <h1><span id="kelembaban" class="text-dark"></span></h1>
                            </div>
                        </div>
                    </div>

                    <div class="card text-white border-dark mr-3 mb-3" style="max-width: 20rem;">
                        <div class="card-header bg-primary"><b>ASAP</b></div>
                        <div class="card-body">
                            <img src="<?= base_url('assets/carbon-dioxide.png') ?>" alt="" width="80px">
                            <div>
                                <h1><span id="asap" class="text-dark"></span>
                                </h1>
                            </div>
                        </div>
                    </div>


                </div>


            </div>
        </h1>

    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
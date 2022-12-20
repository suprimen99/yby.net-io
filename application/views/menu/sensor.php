<!-- ajax realtime -->
<!-- <script type="text/javascript" src="< ?=base_url('jquery/jquery.min.js')?>"></script> -->
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




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script> -->

<div class="container" style="text-align: center;">
    <div class="row">
        <div class="col-md-3 col-lg-3 pt-3">
            <div class="card border-dark" style="width: 10rem;">
                <div class="card-header bg-primary text-white"><b>SUHU</b></div>
                <div class="card-body">
                    <img src="<?= base_url('assets/high-temperature.png') ?>" alt="" width="60px">
                    <div>
                        <h1><span id="suhu" class="text-dark"></span></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 pt-3">
            <div class="card border-dark" style="width: 10rem;">
                <div class="card-header bg-primary text-white"><b>KELEMBABAN</b></div>
                <div class="card-body">
                    <img src="<?= base_url('assets/humidity.png') ?>" alt="" width="60px">
                    <div>
                        <h1><span id="kelembaban" class="text-dark"></span></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 pt-3">
            <div class="card border-dark " style="width: 10rem;">
                <div class=" card-header bg-primary text-white"><b>ASAP</b></div>
                <div class="card-body">
                    <img src="<?= base_url('assets/carbon-dioxide.png') ?>" alt="" width="60px">
                    <div>
                        <h1><span id="asap" class="text-dark"></span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
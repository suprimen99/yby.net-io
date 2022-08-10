<!-- <script>
setInterval(
    function() {
        $('#data').load("< ?php echo site_url ('M_Monitoring/InputData') ?>");
    }, 3000);
</script> -->
<div class="container-fluid">
    <div style="overflow-x: TRUE;">

        <a class="btn btn-danger" href="<?= base_url('Monitoring_sensor/print')?>"><i class="fa fa-print"></i> Print</a>
        <br>
        <br>
        <table class="table table-striped" style="overflow-x: true;" id="datasensor">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Suhu</th>
                    <th scope="col">Kelembaban</th>
                    <th scope="col">Asap</th>
                    <th scope="col">Waktu</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($sensor as $key => $value) : ?>
                <tr>
                    <th><?= ++$start;?></th>
                    <td id="data"><?= $value['suhu']; ?></td>
                    <td id="data"><?= $value['kelembaban']; ?></td>
                    <td id="data"><?= $value['asap']; ?></td>
                    <td id="data"><?= $value['Waktu']; ?></td>

                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <?= $this->pagination->create_links();?>
    </div>
</div>

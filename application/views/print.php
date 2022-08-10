<div class="container-fluid">
    <div style="overflow-x: TRUE;">
        <br><br>
        <a class="btn btn-primary" href="<?= base_url('Monitoring_sensor/Datasensor')?>"><i
                class="fa-solid fa-angles-left"></i>
            kembali</a> <br> <br><br>
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
                <?php $i = 1;
				foreach ($sensor as $key => $value) : ?>
                <tr>
                    <th><?= $i++;?></th>
                    <td id="data"><?= $value['suhu']; ?></td>
                    <td id="data"><?= $value['kelembaban']; ?></td>
                    <td id="data"><?= $value['asap']; ?></td>
                    <td id="data"><?= $value['Waktu']; ?></td>

                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <script type="text/javascript">
        window.print();
        </script>
        </ div>
    
    </ div>
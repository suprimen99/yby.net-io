<style>
th,
td {
    border: 1px solid black;
    padding: 30px;
}

.table {
    justify-content: center;
}
</style>
<div align="center">
    <img class="rounded mx-auto d-block" src="<?=base_url('/assets/YBY.NET hitam.png')?>" alt="">
    <br>
    <h2 align="center">LAPORAN HASIL MONITORING</h2>
    <b>
        <hr>
    </b>
</div>

<div class="table">


    <table>
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
</div>
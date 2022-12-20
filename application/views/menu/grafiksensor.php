<!-- <script>
var refreshid = setInterval(function() {
    $('#myChart').load('< ?= base_url('views/menu/grafiksensor.php')?>')
}, 3000);
</script> -->


<div class="container">
    <div class="card">
    </div>
    <div class="card-body">
        <canvas id="myChart"></canvas>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script type="text/javascript">
var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [
            <?php
            if (count($graph)>0) {
              foreach ($graph as $data) {
                echo "'" .$data->Waktu ."',";
              }
            }
          ?>
        ],
        datasets: [{
            label: 'suhu',
            backgroundColor: 'rgba(52, 231, 43, 0.2)',
            borderColor: 'rgba(52, 231, 43, 2)',
            data: [
                <?php
                if (count($graph)>0) {
                   foreach ($graph as $data) {
                    echo $data->suhu . ", ";
                  }
                }
              ?>
            ]
        }, {
            label: 'kelembaban',
            backgroundColor: 'rgba(239, 82, 93, 0.2)',
            borderColor: 'rgba(239, 82, 82, 2)',
            data: [
                <?php
                if (count($graph)>0) {
                   foreach ($graph as $data) {
                    echo $data->kelembaban . ", ";
                  }
                }
              ?>
            ]
        }, {
            label: 'asap',
            backgroundColor: 'rgba(28, 72, 93, 0.2)',
            borderColor: 'rgba(28, 72, 93, 2)',
            data: [
                <?php
                if (count($graph)>0) {
                   foreach ($graph as $data) {
                    echo $data->asap . ", ";
                  }
                }
              ?>
            ]
        }]
    }
});
</script>









<!-- 
	<style>
.highcharts-figure,
.highcharts-data-table table {
    min-width: 310px;
    max-width: 800px;
    margin: 1rem auto;
}

#container {
    height: 300px;
}

.highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #EBEBEB;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}

.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}

.highcharts-data-table th {
    font-weight: 600;
    padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
    padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}

.highcharts-data-table tr:hover {
    background: #f1f7ff;
}
    </style> -->

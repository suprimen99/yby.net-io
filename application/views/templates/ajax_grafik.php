<!-- <script>
setInterval(() => {
    data_suhu()
}, 300000);
</script>


	<div class="container">
        <canvas id="myChart"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script type="text/javascript">
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [
                < ?php
            if (count($graph)>0) {
              foreach ($graph as $data) {
                echo "'" .$data->Waktu ."',";
              }
            }
          ?>
            ],
            datasets: [{
                label: 'suhu',
                backgroundColor: '#ADD8E6',
                borderColor: '##93C3D2',
                data: [
                    < ?php
                if (count($graph)>0) {
                   foreach ($graph as $data) {
                    echo $data->suhu . ", ";
                  }
                }
              ?>
                ]
            }]
        },
    });
    </script> -->







// $.ajax({
// type: "GET",
// url: "< ?=base_url('Monitoring_sensor/cek_grafik'); ?>",
    // dataType: "JSON",
    // success: function(response) {
    // var canvas = response['data_waktu'];
    // $(document).ready(function() {
    // var ctx = document.getElementById("myChart4").getContext('2d')
    // var myChart = new Chart(ctx, {
    // type: 'line',
    // data: {
    // labels: [

    // 0, response['data_waktu']['waktu'], 0, response[
    // 'data_waktu2']['waktu'], 0, response['data_waktu3'][
    // 'waktu'
    // ], 0, response['data_waktu4']['waktu']
    // // < ?=$waktu1 ?>, < ?=$waktu2 ?>, < ?=$waktu3 ?>,
                // // < ?=$waktu4 ?>
                    // ],
                    // datasets: [{
                    // label: 'SUHU',
                    // fill: true,
                    // backgroundColor: "rgba(52, 231, 43, 0.2)",
                    // borderColor: "rgba(52, 231, 43, 2)",
                    // data: [
                    // 0, response['count_suhu']['suhu'], 0, response[
                    // 'count_suhu']['suhu'], 0, response[
                    // 'count_suhu']['suhu'], 0, response[
                    // 'count_suhu']['suhu']
                    // // < ?=$suhu1 ?>, < ?=$suhu2 ?>, < ?=$suhu3 ?>,
                                // // < ?=$suhu4 ?>
                                    // ],
                                    // hoverOffset: 4
                                    // },
                                    // {
                                    // label: 'KELEMBABAN',
                                    // fill: true,
                                    // backgroundColor: "rgba(239, 82, 93, 0.2)",
                                    // borderColor: "rgba(239, 82, 82, 2)",
                                    // data: [
                                    // 0, response['count_kelembaban']['kelembaban'],
                                    // 0, response['count_kelembaban']['kelembaban'],
                                    // 0, response['count_kelembaban']['kelembaban'],
                                    // 0, response['count_kelembaban']['kelembaban']
                                    // // < ?=$kelembaban1 ?>, < ?=$kelembaban2 ?>,
                                            // // < ?=$kelembaban3 ?>,
                                                // // < ?=$kelembaban4 ?>
                                                    // ],
                                                    // hoverOffset: 4
                                                    // }
                                                    // ]
                                                    // },


                                                    // options: {
                                                    // plugins: {
                                                    // legend: {
                                                    // display: false
                                                    // }
                                                    // }
                                                    // }
                                                    // });
                                                    // });
                                                    // }
                                                    // })
                                                    // };


                                                    // var option = {
                                                    // showLines: true,
                                                    // animation: {
                                                    // duration: 0
                                                    // }
                                                    // };
                                                    // var myLineChart = Chart.Line(
                                                    // canvas, {
                                                    // data: data,
                                                    // option: option
                                                    // });
                                                    // </script>
















                                                    // <script>
                                                    //     $(document).ready(function() {
                                                    //         var ctx = document.getElementById("myChart").getContext('2d');
                                                    //         var myChart = new Chart(ctx, {
                                                    //             type: 'line',
                                                    //             data: {
                                                    //                 labels: ["HCGA", "PROC", "RMMS", "AMP"],
                                                    //                 datasets: [{
                                                    //                     label: '# of Votes',
                                                    //                     data: [1, 2, 3, 4],
                                                    //                     backgroundColor: [
                                                    //                         '#FF3333',
                                                    //                         '#00FF00',
                                                    //                         'rgba(54, 162, 235, 1)',
                                                    //                         'rgba(75, 192, 192, 1)'
                                                    //                     ],
                                                    //                     hoverOffset: 4
                                                    //                 }]
                                                    //             },
                                                    //             options: {
                                                    //                 plugins: {
                                                    //                     legend: {
                                                    //                         display: false
                                                    //                     }
                                                    //                 }
                                                    //             }
                                                    //         });
                                                    //     });
            
                                        // 
                                                    </script>
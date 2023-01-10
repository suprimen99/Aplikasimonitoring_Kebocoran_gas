<!-- <script>
var refreshid = setInterval(function() {
    $('#myChart').load('< ?= base_url('views/menu/grafiksensor.php')?>')
}, 3000);
</script> -->


<div class="container">

    <div class="card">
        <div class="card-body">
            <canvas id="myChart"></canvas>
        </div>
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
            if (count($grafik)>0) {
              foreach ($grafik as $data) {
                echo "'" .$data->Waktu ."',";
              }
            }
          ?>
        ],
        datasets: [{
                label: 'GAS',
                backgroundColor: 'rgba(239, 82, 93, 0.2)',
                borderColor: 'rgba(239, 82, 82, 2)',
                data: [
                    <?php
                if (count($grafik)>0) {
                   foreach ($grafik as $data) {
                    echo $data->gas . ", ";
                  }
                }
              ?>
                ]
            },
            {
                label: 'SUHU',
                backgroundColor: 'rgba(52, 231, 43, 0.2)',
                borderColor: 'rgba(52, 231, 43, 2)',
                data: [
                    <?php
                if (count($grafik)>0) {
                   foreach ($grafik as $data) {
                    echo $data->suhu . ", ";
                  }
                }
              ?>
                ]
            }

        ]
    }

});
</script>

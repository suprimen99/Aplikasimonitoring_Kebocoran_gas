    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-OXTEbYDqaX2ZY/BOaZV/yFGChYHtrXH2nyXJ372n2Y8abBhrqacCEe+3qhSHtLjy" crossorigin="anonymous">

    <title>Monitoring</title>
    <script type="text/javascript" src="<?=base_url('jquery/jquery.min.js')?>"></script>
    <script type="text/javascript">
$(document).ready(function() {

    setInterval(function() {
        $("#cekgas").load("<?php echo site_url('Monitoring/cekgas');?>");
        $("#ceksuhu").load("<?php echo site_url('Monitoring/ceksuhu');?>");
    }, 1000);

});
    </script>
    <div class="container" style="text-align: center; ">
        <div class="sensor col-12 col-lg-12 ">
            <h1>SENSOR</h1>
            <div class="row justify-content-center">
                <div class="col-lg-2">
                    <div class="card border-dark" style="width: 10rem;">
                        <div class="card-header bg-danger text-white"><b>SUHU</b></div>
                        <div class="card-body">
                            <img src="<?= base_url('assets/humidity.png') ?>" alt="" width="60px">
                            <div>
                                <h1><span id="ceksuhu" class="text-dark"></span></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card border-dark " style="width:10rem;">
                        <div class=" card-header bg-success text-white"><b>GAS</b></div>
                        <div class="card-body">
                            <img src="<?= base_url('assets/carbon-dioxide.png') ?>" alt="" width="60px">
                            <div>
                                <h1><span id="cekgas" class="text-dark"></span>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
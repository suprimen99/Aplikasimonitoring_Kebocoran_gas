<div class="container">
    <div style="overflow-x: TRUE;">
        <div class="row">
            <div class="col-lg-12 mb-10">
                <div class="card">
                    <div class="card-body">
                        <h1>DATA SENSOR</h1>
                        <div class="table-responsive">
                            <table class="table table-striped" style="overflow-x: true;" id="datasensor">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Gas</th>
                                        <th scope="col">Suhu</th>
                                        <th scope="col">Waktu</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($sensor as $key => $value) : ?>
                                    <tr>
                                        <th><?= ++$start;?></th>
                                        <td id="data"><?= $value['gas']; ?></td>
                                        <td id="data"><?= $value['suhu']; ?></td>
                                        <td id="data"><?= $value['Waktu']; ?></td>

                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>

                        </div>

                        <?= $this->pagination->create_links();?>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
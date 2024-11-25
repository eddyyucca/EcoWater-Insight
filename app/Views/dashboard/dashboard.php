<?= $this->extend('layout/header'); ?>

<?= $this->section('content'); ?>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12"> <!-- Ubah kolom menjadi 12 supaya kartu lebih lebar -->
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Settling Pond BT-14</h3>
                    <div class="card-tools">
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="chart-container">
                                <h3 class="chart-title">pH Level</h3>
                                <canvas id="phChart" style="height: 400px; width: 100%;"></canvas>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="chart-container">
                                <h3 class="chart-title">TSS Level (mg/L)</h3>
                                <canvas id="tssChart" style="height: 400px; width: 100%;"></canvas>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="chart-container">
                                <h3 class="chart-title">Water Level (cm)</h3>
                                <canvas id="waterLevelChart" style="height: 400px; width: 100%;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->

<?= $this->endSection(); ?>
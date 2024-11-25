<?= $this->extend('layout/header'); ?>

<?= $this->section('content'); ?>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-md-4">
				<div class="card card-success">
					<div class="card-header">
						<h3 class="card-title">Donut Chart Status Unit</h3>
						<div class="card-tools">
						</div>
					</div>
					<div class="card-body">
						<div class="chart">
							<canvas id="myDonutChart" width="auto" height="auto"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- /.content -->

<?= $this->endSection(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SafetyAlertPro</title>

  <!-- icon -->
  <link rel="shortcut icon" href=" <?= base_url('assets/') ?>icon.ico">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/adminlte.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/chart.js/Chart.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>sweetalert/sweetalert2.min.css">

</head>

<style>
  .custom-hr {
  background-color: white;
  height: 1px;
  border: none;
}
</style>

            <!-- Sidebar -->
            <?= $this->include('layout/sidebar'); ?>
            <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-3">
				<div class="col-sm-6">
					<h1 class="m-0"><i class="fas fa-chart-line"></i> Unit's Summary Dashboard</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Dashboard</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
            <?= $this->renderSection('content'); ?> 
            </div>
            <?= $this->include('layout/footer'); ?>
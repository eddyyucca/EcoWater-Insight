
 <footer class="main-footer">
    <strong>Copyright &copy; 2024 <a href="https://github.com/eddyyucca">BUMA-IT-IPR</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 2.2
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('assets/') ?>plugins/jquery/jquery.js"></script>
<!-- sweetalert -->
 
 <script>
      document.querySelectorAll('.confirmButton').forEach(button => {
    button.addEventListener('click', function(event) {
        event.preventDefault();
        const href = this.getAttribute('href');

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, do it!',
            cancelButtonText: 'Cancel',
            background: '#f0f0f0',
            backdrop: `rgba(0,0,0,0.4)`
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = href;
            }
        });
    });
});
    </script>
  <script src="<?= base_url('assets/') ?>sweetalert/sweetalert2.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url('assets/') ?>plugins/flot/jquery.flot.js"></script>

<script src="<?= base_url('assets/') ?>plugins/flot/plugins/jquery.flot.resize.js"></script>

<script src="<?= base_url('assets/') ?>plugins/flot/plugins/jquery.flot.pie.js"></script>
<script src="<?= base_url('assets/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url('assets/') ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/') ?>js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/') ?>chart.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assets/') ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- Page specific script -->
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": true,
            "buttons": [
                {
                    extend: 'copy',
                    exportOptions: {
                        columns: ':visible:not(.no-export)' // Mengecualikan kolom yang disembunyikan
                    }
                },
                {
                    extend: 'csv',
                    exportOptions: {
                    columns: ':visible:not(.no-export)'
                }
            },
            {
                extend: 'excel',
                exportOptions: {
                    columns: ':visible:not(.no-export)'
                }
            },
            {
                extend: 'pdf',
                exportOptions: {
                    columns: ':visible:not(.no-export)'
                }
            },
            {
                extend: 'print',
                exportOptions: {
                    columns: ':visible:not(.no-export)'
                }
            },
            'colvis'
        ]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": false,
        "info": false,
        "autoWidth": false,
        "responsive": true,
    });
});
</script><script>
        // pH Chart
        var phCtx = document.getElementById('phChart').getContext('2d');
        var phLabels = [];
        var phData = [];

        var phChart = new Chart(phCtx, {
            type: 'line',
            data: {
                labels: phLabels,
                datasets: [{
                    label: 'pH Level',
                    data: phData,
                    borderColor: 'rgba(60, 141, 188, 1)',
                    borderWidth: 2,
                    fill: false,
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'pH Level'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Time'
                        }
                    }
                }
            }
        });

        // TSS Chart
        var tssCtx = document.getElementById('tssChart').getContext('2d');
        var tssLabels = [];
        var tssData = [];

        var tssChart = new Chart(tssCtx, {
            type: 'bar',
            data: {
                labels: tssLabels,
                datasets: [{
                    label: 'TSS Level (mg/L)',
                    data: tssData,
                    backgroundColor: 'rgba(255, 99, 132, 0.5)',
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'TSS (mg/L)'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Time'
                        }
                    }
                }
            }
        });

        // Water Level Chart
        var waterLevelCtx = document.getElementById('waterLevelChart').getContext('2d');
        var waterLevelLabels = [];
        var waterLevelData = [];

        var waterLevelChart = new Chart(waterLevelCtx, {
            type: 'line', // Area chart dapat dibuat dengan jenis 'line' dan mengisi area
            data: {
                labels: waterLevelLabels,
                datasets: [{
                    label: 'Water Level (cm)',
                    data: waterLevelData,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                    fill: true,
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Water Level (cm)'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Time'
                        }
                    }
                }
            }
        });

        // Simulasi pengambilan data real-time
        setInterval(function() {
            var timestamp = new Date().toLocaleTimeString();

            // Menghasilkan data pH
            var newPHValue = (Math.random() * 2 + 6).toFixed(2);
            if (phLabels.length >= 10) {
                phLabels.shift();
                phData.shift();
            }
            phLabels.push(timestamp);
            phData.push(newPHValue);
            phChart.update();

            // Menghasilkan data TSS
            var newTSSValue = Math.floor(Math.random() * 500); // TSS antara 0 - 500 mg/L
            if (tssLabels.length >= 10) {
                tssLabels.shift();
                tssData.shift();
            }
            tssLabels.push(timestamp);
            tssData.push(newTSSValue);
            tssChart.update();

            // Menghasilkan data level air
            var newWaterLevelValue = Math.floor(Math.random() * 100); // Level air antara 0 - 100 cm
            if (waterLevelLabels.length >= 10) {
                waterLevelLabels.shift();
                waterLevelData.shift();
            }
            waterLevelLabels.push(timestamp);
            waterLevelData.push(newWaterLevelValue);
            waterLevelChart.update();
        }, 2000); // Update setiap 2 detik
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js"></script>

</body>
</html>
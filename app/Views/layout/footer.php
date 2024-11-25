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
</script>

</body>
</html>